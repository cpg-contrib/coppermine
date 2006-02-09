<?php
/**
 * cpgProcessCategory.class.php
 *
 * Class containing static function which are used for different kind of data processing regarding categories
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */
require_once('classes/cpgProcessPicture.class.php');

class cpgProcessCategory {

    var $db;
    var $config;
    var $auth;

    function cpgProcessCategory()
    {
        $this->config = cpgConfig::getInstance();
        $this->db = cpgDB::getInstance();
        $this->auth = cpgAuth::getInstance();
    }
    /**
     * getSubcatData()
     *
     * @param integer $parent
     * @param string $ident
     */
    // This function is to be moved to Category class if ever made.
    function getSubcatData($parent, $catList, $ident = '')
    {
        if (GALLERY_ADMIN_MODE) {
            $query = "SELECT cid, name, description FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE parent = '$parent' AND cid != 1 ORDER BY pos";
            $this->db->query($query);

            if ($this->db->nf() > 0) {
                $rowset = $this->db->fetchRowSet();

                foreach ($rowset as $subcat) {
                    $catList[] = array($subcat['cid'], $ident . $subcat['name']);
                    $catList = $this->getSubcatData($subcat['cid'], $catList, $ident . '&nbsp;&nbsp;&nbsp;');
                }
            }

            return $catList;
        } else {
            $categories = cpgUtils::cpgGetCategories();

            reset($categories);
            unset($catList);

            foreach ($categories as $categoryId => $categoryData) {
                $catList[] = array($categoryId, $categoryData['name']);
            }

            return $catList;
        }
    }

    function getAlbumSet($cat)
    {
        global $lang_errors;

        $cat = (int)$cat;

        if (GALLERY_ADMIN_MODE) {
            $query = "SELECT aid, title FROM {$this->config->conf['TABLE_ALBUMS']} WHERE category = '$cat' ORDER BY pos ASC";
        } elseif (USER_ADMIN_MODE) {
            $categories = cpgUtils::cpgGetCategories();

            if (!array_key_exists($cat, $categories) && $cat >= 0) {
                cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
            }

            if ($cat >= 0) {
                $query = "SELECT aid, title FROM {$this->config->conf['TABLE_ALBUMS']} WHERE category = '$cat' AND user_id = '".$this->auth->userData['user_id']."' ORDER BY pos ASC";
            } else {
                $query = "SELECT aid, title FROM {$this->config->conf['TABLE_ALBUMS']} WHERE category = '".(int)($this->auth->isDefined('USER_ID') + FIRST_USER_CAT)."' ORDER BY pos ASC";
            }

        } else {
            cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
        }

        $this->db->query($query);
        if ($this->db->nf()) {
          $this->albumSet = $this->db->fetchRowSet();
        }

        $i = 100;
        $this->sort_order = '';

        if (count ($this->albumSet) > 0) {
          foreach ($this->albumSet as $album) {
            $this->sort_order .= $album['aid'] . '@' . ($i++) . ',';
            $this->albumSet[$album]['title'] = stripslashes($this->albumSet[$album]['title']);
          }
        }
    }

    function buildCatData()
    {
      $this->catList = array();
      $this->catList = $this->getSubcatDataWithPos(0, $this->catList);

      /**
      * Check whether the alphabetic sort order is selected
      */
      $this->miscArr['yesSelected'] = $this->config->conf['categories_alpha_sort'] ? 'checked="checked"' : '';
      $this->miscArr['noSelected']  = !$this->config->conf['categories_alpha_sort'] ? 'checked="checked"' : '';

      /**
      * Which operation to perform when the user hits the create/update button.
      */
      $this->op = $this->currentCategory['cid'] ? 'updatecat' : 'createcat';

      /**
      * Get the list of pictures to be displayed as a category thumb.
      */
      $query = "SELECT
                  pid, filepath, filename, url_prefix
                FROM
                  {$this->config->conf['TABLE_PICTURES']},{$this->config->conf['TABLE_ALBUMS']}
                WHERE
                  {$this->config->conf['TABLE_PICTURES']}.aid = {$this->config->conf['TABLE_ALBUMS']}.aid AND
                  {$this->config->conf['TABLE_ALBUMS']}.category = '$cid' AND
                  approved='YES'
                ORDER BY
                  filename";
      $this->db->query($query);

      if ($this->db->nf() > 0) {
        /**
        * Some images found. Do the needful.
        */
        $cpgNopicData = cpgUtils::cpgGetSystemThumb('nopic.jpg', $this->auth->userData['user_id']);

        /**
        * Array to be used for creating javascript array in smarty.
        */
        $this->picArr = array();
        $this->picArr[0] = $cpgNopicData['thumb'];
        $this->miscArr['initialThumbUrl'] = $cpgNopicData['thumb'];

        /**
        * Array to create a drop-down of image names.
        */
        $this->imgList = array(0 => $lang_modifyalb_php['last_uploaded']);
        while ($picture = $this->db->fetchRow()) {
          $this->picArr[$picture['pid']] = cpgUtils::getPicUrl($picture, 'thumb');

          if ($picture['pid'] == $this->currentCategory['thumb']) {
            $this->miscArr['initialThumbUrl'] = $this->picArr[$picture['pid']];
          }
          $this->imgList[$picture['pid']] = htmlspecialchars($picture['filename']);
        }
        $this->miscArr['thumbCellHeight'] = $this->config->conf['thumb_width'] + 17;
      } else {
        /**
        * No images found.
        */
        $this->miscArr['noThumbs'] = 1;
      }
    }

    /**
     * fixCatTable()
     *
     * @param integer $parent
     * @param string $ident
     */
    function fixCatTable()
    {
        $query = "SELECT cid FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE 1";
        $this->db->query($query);
        if ($this->db->nf() > 0) {
            $set = '';
            while ($row = $this->db->fetchRow()) {
                $set .= $row['cid'] . ',';
            }
            $set = '(' . substr($set, 0, -1) . ')';
            $query = "UPDATE {$this->config->conf['TABLE_CATEGORIES']} " . "SET parent = '0' " . "WHERE parent=cid OR parent NOT IN $set";
            $this->db->query($query);
        }
    }

    /**
     * cpgProcessCategory::getSubcatDataWithPos()
     *
     * @param  $parent
     * @param  $catList
     * @param string $ident
     * @return
     */
    function getSubcatDataWithPos($parent, $catList, $ident = '')
    {
        if ($this->config->conf['categories_alpha_sort'] == 1) {
            $sort_query = 'name';
        } else {
            $sort_query = 'pos';
        }

        $sql = "SELECT cid, name, description " . "FROM {$this->config->conf['TABLE_CATEGORIES']} " . "WHERE parent = '$parent' " . "ORDER BY $sort_query";
        $this->db->query($sql);

        if (($cat_count = $this->db->nf()) > 0) {
            $rowset = $this->db->fetchRowSet();
            $pos = 0;
            foreach ($rowset as $subcat) {
                if ($pos > 0) {
                    $catList[] = array('cid' => $subcat['cid'],
                        'parent' => $parent,
                        'pos' => $pos++,
                        'prev' => $prev_cid,
                        'cat_count' => $cat_count,
                        'name' => $ident . $subcat['name']
                        );
                    $catList[$last_index]['next'] = $subcat['cid'];
                } else {
                    $catList[] = array('cid' => $subcat['cid'],
                        'parent' => $parent,
                        'pos' => $pos++,
                        'cat_count' => $cat_count,
                        'name' => $ident . $subcat['name']
                        );
                }
                $prev_cid = $subcat['cid'];
                $last_index = count($catList) -1;
                $catList = $this->getSubcatDataWithPos($subcat['cid'], $catList, $ident . '&nbsp;&nbsp;&nbsp;');
            }
        }
        return $catList;
    }

    /**
     * processCategory()
     *
     * @param string $op
     * @return $mesg
     */
    function processCategory($op)
    {
        global $lang_catmgr_php;

        /**
         * Get all the permitted groups to create album in this cat(if any).
         */
        $cid = (isset($_POST['cid'])) ? (int)$_POST['cid'] : (int)$_GET['cid'];
        if (!empty($cid)) {
            $query = "SELECT group_id FROM {$this->config->conf['TABLE_CATEGORY_MAP']} WHERE cid = '$cid'";
            $this->db->query($query);
            if ($this->db->nf() >= 1) {
               do {
                  $this->groups[] = $this->db->f('group_id');
               } while($this->db->nextRecord());
            }
        }

        switch ($op) {
            case 'move':
                if (!isset($_GET['cid1']) || !isset($_GET['cid2']) || !isset($_GET['pos1']) || !isset($_GET['pos2'])) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'move'), __FILE__, __LINE__);
                }

                $cid1 = (int)$_GET['cid1'];
                $cid2 = (int)$_GET['cid2'];
                $pos1 = (int)$_GET['pos1'];
                $pos2 = (int)$_GET['pos2'];

                $query = "UPDATE {$this->config->conf['TABLE_CATEGORIES']} SET pos='$pos1' WHERE cid = '$cid1' LIMIT 1";
                $this->db->query($query);

                $query = "UPDATE {$this->config->conf['TABLE_CATEGORIES']} SET pos='$pos2' WHERE cid = '$cid2' LIMIT 1";
                $this->db->query($query);
                // return $lang_catmgr_php['move_success'];
                break;

            case 'setparent':
                if (!isset($_GET['cid']) || !isset($_GET['parent'])) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'setparent'), __FILE__, __LINE__);
                }

                $cid = (int)$_GET['cid'];
                $parent = (int)$_GET['parent'];
                $children = array();
                $children = cpgProcessCategory::verifyChildren($cid, $cid, $children);

                if (!in_array($parent, $children)) {
                    $query = "UPDATE {$this->config->conf['TABLE_CATEGORIES']} SET parent='$parent', pos='-1' WHERE cid = '$cid' LIMIT 1";
                    $this->db->query($query);
                } else {
                    cpgUtils::cpgDie(ERROR, $lang_catmgr_php['cannot_set_parent'], __FILE__, __LINE__);
                }
                break;

            case 'editcat':
                if (!isset($_GET['cid'])) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'editcat'), __FILE__, __LINE__);
                }

                $cid = (int)$_GET['cid'];
                $query = "SELECT cid, name, parent, description, thumb FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE cid = '$cid' LIMIT 1";
                $this->db->query($query);

                if ($this->db->nf() == 0) {
                    cpgUtils::cpgDie(ERROR, $lang_catmgr_php['unknown_cat'], __FILE__, __LINE__);
                }
                $this->currentCategory = $this->db->fetchRow();

                break;

            case 'updatecat':
                if (!isset($_POST['cid']) || !isset($_POST['parent']) || !isset($_POST['name']) || !isset($_POST['description'])) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'updatecat'), __FILE__, __LINE__);
                }

                $name = trim($_POST['name']);
                if (empty($name)) {
                    break;
                }

                $cid = (int)$_POST['cid'];
                $parent = (int)$_POST['parent'];
                $thumb = (int)$_POST['thumb'];
                $name = trim($_POST['name']) ? addslashes($_POST['name']) : '&lt;???&gt;';
                $description = addslashes($_POST['description']);
                $children = array();
                $this->verifyChildren($cid, $cid);
                if (!in_array($parent, $children)) {
                    $query = "UPDATE {$this->config->conf['TABLE_CATEGORIES']} SET parent='$parent', name='$name', description='$description', thumb='$thumb' WHERE cid = '$cid' LIMIT 1";
                    $this->db->query($query);
                } else {
                    $query = "UPDATE {$this->config->conf['TABLE_CATEGORIES']} SET name='$name', description='$description', thumb='$thumb' WHERE cid = '$cid' LIMIT 1";
                    $this->db->query($query);
                }

                /**
                 * insert the groupid and catid to db,
                 * if admin has given permission to group(s) to create album in this category
                 */
                if (isset($_POST['user_groups']) && !empty($_POST['user_groups'])) {
                    foreach ($_POST['user_groups'] as $key => $value) {
                         if (in_array($value, $this->groups)) {
                             // skip IF IT ALREADY EXIST
                             continue;
                         } else {
                             $query = "INSERT INTO {$this->config->conf['TABLE_CATEGORY_MAP']} SET cid = '$cid', group_id = '$value'";
                             $this->db->query($query);
                         }
                    }
                }

                break;

            case 'createcat':
                if (!isset($_POST['parent']) || !isset($_POST['name']) || !isset($_POST['description'])) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'createcat'), __FILE__, __LINE__);
                }

                $name = trim($_POST['name']);

                if (empty($name)) {
                    break;
                }
                $parent = (int)$_POST['parent'];
                $name = trim($_POST['name']) ? addslashes($_POST['name']) : '&lt;???&gt;';
                $description = addslashes($_POST['description']);

                $query = "INSERT INTO {$this->config->conf['TABLE_CATEGORIES']} (pos, parent, name, description) VALUES ('10000', '$parent', '$name', '$description')";
                $this->db->query($query);

                /**
                 * insert the groupid and catid to db,
                 * if admin has given permission to group(s) to create album in this category
                 */
                $cid = mysql_insert_id();
                if (isset($_POST['user_groups']) && !empty($_POST['user_groups'])) {
                    foreach ($_POST['user_groups'] as $key => $value) {
                             $query = "INSERT INTO {$this->config->conf['TABLE_CATEGORY_MAP']} SET cid = '$cid', group_id = '$value'";
                             $this->db->query($query);
                    }
                }

                break;

            case 'deletecat':
                if (!isset($_GET['cid'])) {
                    cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($lang_catmgr_php['miss_param'], 'deletecat'), __FILE__, __LINE__);
                }

                $cid = (int)$_GET['cid'];
                if ($cid == 1) {
                    cpgUtils::cpgDie(ERROR, $lang_catmgr_php['usergal_cat_ro'], __FILE__, __LINE__);
                }

                $query = "SELECT parent FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE cid = '$cid' LIMIT 1";
                $this->db->query($query);

                if ($this->db->nf() == 0) {
                    cpgUtils::cpgDie(ERROR, $lang_catmgr_php['unknown_cat'], __FILE__, __LINE__);
                }

                $del_category = $this->db->fetchRowSet($result);
                $parent = $del_category['parent'];
                $query = "UPDATE {$this->config->conf['TABLE_CATEGORIES']} SET parent='$parent' WHERE parent = '$cid'";
                $this->db->query($query);

                $query = "UPDATE {$this->config->conf['TABLE_ALBUMS']} SET category='$parent' WHERE category = '$cid'";
                $this->db->query($query);

                $query = "DELETE FROM {$this->config->conf['TABLE_CATEGORIES']} WHERE cid='$cid' LIMIT 1";
                $this->db->query($query);

                $query = "DELETE FROM {$this->config->conf['TABLE_CATEGORY_MAP']} WHERE cid='$cid'";
                $this->db->query($query);

                break;
        }
    }

    /**
     * verifyChildren()
     *
     * @param int $parent
     * @param int $cid
     * @return $mesg
     */
    function verifyChildren($parent, $cid)
    {
        $query = "SELECT cid " . "FROM {$this->config->conf['TABLE_CATEGORIES']} " . "WHERE parent = '$parent' ";
        $this->db->query($query);

        if (($cat_count = $this->db->nf()) > 0) {
            while ($row = $this->db->fetchRow()) {
                $children[] = $row['cid'];
                // call this function again to this this
                // child's children
                $this->verifyChildren($row['cid'], $cid, $children);
            }
        }
        return $children;
    }
}

?>
