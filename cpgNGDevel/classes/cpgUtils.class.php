<?php
/**
 * cpgUtils.class.php
 *
 * This class contains all the miscellenous static functions
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

class cpgUtils {
    /**
     * cpgUtils::getAid()
     *
     * @param  $name
     * @param  $value
     * @return $album
     */
    function getAid($name, $value)
    {
        $db = cpgDb::getInstance();
        $config = cpgConfig::getInstance();
        $query = "SELECT aid FROM {$config->conf['TABLE_PICTURES']} WHERE $name = '$value'";
        $db->query($query);
        $row = $db->fetchRow();
        $album = $row['aid'];
        unset($row);
        return ($album);
    }

    /**
     * cpgUtils::getPicUrl()
     *
     * @param  $pic_row
     * @param  $mode
     * @param boolean $system_pic
     * @return
     */
    function getPicUrl(&$pic_row, $mode, $system_pic = false)
    {
        global $THEME_DIR;

        static $pic_prefix = array();
        static $url_prefix = array();

        $config = cpgConfig::getInstance();

        if (!count($pic_prefix)) {
            $pic_prefix = array('thumb' => $config->conf['thumb_pfx'],
                'normal' => $config->conf['normal_pfx'],
                'fullsize' => ''
                );

            $url_prefix = array(0 => $config->conf['fullpath'],
                );
        }

        $mime_content = cpg_get_type($pic_row['filename']);

        $pic_row = array_merge($pic_row, $mime_content);

        $filepathname = null;
        // Code to handle custom thumbnails
        // If fullsize or normal mode use regular file
        if ($mime_content['content'] != 'image' && $mode == 'normal') {
            $mode = 'fullsize';
        } elseif (($mime_content['content'] != 'image' && $mode == 'thumb') || $system_pic) {
            $thumb_extensions = Array('.gif', '.png', '.jpg');
            // Check for user-level custom thumbnails
            // Create custom thumb path and erase extension using filename; Erase filename's extension
            $custom_thumb_path = $url_prefix[$pic_row['url_prefix']] . $pic_row['filepath'] . $pic_prefix[$mode];
            $file_base_name = str_replace('.' . $mime_content['extension'], '', basename($pic_row['filename']));
            // Check for file-specific thumbs
            foreach ($thumb_extensions as $extension) {
                if (file_exists($custom_thumb_path . $file_base_name . $extension)) {
                    $filepathname = $custom_thumb_path . $file_base_name . $extension;
                    break;
                }
            }
            if (!$system_pic) {
                // Check for extension-specific thumbs
                if (is_null($filepathname)) {
                    foreach ($thumb_extensions as $extension) {
                        if (file_exists($custom_thumb_path . $mime_content['extension'] . $extension)) {
                            $filepathname = $custom_thumb_path . $mime_content['extension'] . $extension;
                            break;
                        }
                    }
                }
                // Check for content-specific thumbs
                if (is_null($filepathname)) {
                    foreach ($thumb_extensions as $extension) {
                        if (file_exists($custom_thumb_path . $mime_content['content'] . $extension)) {
                            $filepathname = $custom_thumb_path . $mime_content['content'] . $extension;
                            break;
                        }
                    }
                }
            }
            // Use default thumbs
            if (is_null($filepathname)) {
                // Check for default theme- and global-level thumbs
                $thumb_paths[] = $THEME_DIR . 'images/'; // Used for custom theme thumbs
                $thumb_paths[] = 'images/'; // Default Coppermine thumbs
                foreach ($thumb_paths as $default_thumb_path) {
                    if (is_dir($default_thumb_path)) {
                        if (!$system_pic) {
                            foreach ($thumb_extensions as $extension) {
                                // Check for extension-specific thumbs
                                if (file_exists($default_thumb_path . $config->conf['thumb_pfx'] . $mime_content['extension'] . $extension)) {
                                    $filepathname = $default_thumb_path . $config->conf['thumb_pfx'] . $mime_content['extension'] . $extension;
                                    break 2;
                                }
                            }
                            foreach ($thumb_extensions as $extension) {
                                // Check for media-specific thumbs (movie,document,audio)
                                if (file_exists($default_thumb_path . $config->conf['thumb_pfx'] . $mime_content['content'] . $extension)) {
                                    $filepathname = $default_thumb_path . $config->conf['thumb_pfx'] . $mime_content['content'] . $extension;
                                    break 2;
                                }
                            }
                        } else {
                            // Check for file-specific thumbs for system files
                            foreach ($thumb_extensions as $extension) {
                                if (file_exists($default_thumb_path . $config->conf['thumb_pfx'] . $file_base_name . $extension)) {
                                    $filepathname = $default_thumb_path . $config->conf['thumb_pfx'] . $file_base_name . $extension;
                                    break 2;
                                }
                            }
                        }
                    }
                }
            }
            $filepathname = cpgUtils::path2Url($filepathname);
        }

        if (is_null($filepathname)) {
            $filepathname = $url_prefix[$pic_row['url_prefix']] . cpgUtils::path2Url($pic_row['filepath'] . $pic_prefix[$mode] . $pic_row['filename']);
        }
        // Added hack:  "&& !isset($pic_row['mode'])" thumb_data filter isn't executed for the fullsize image
        if ($mode == 'thumb' && !isset($pic_row['mode'])) {
            $pic_row['url'] = $filepathname;
            $pic_row['mode'] = $mode;
            ///$pic_row = CPGPluginAPI::filter('thumb_data', $pic_row);
        } elseif ($mode != 'thumb') {
            $pic_row['url'] = $filepathname;
            $pic_row['mode'] = $mode;
        } else {
            $pic_row['url'] = $filepathname;
        }

        return $pic_row['url'];
    }
    // Display a localised date
    /**
     * localisedDate()
     *
     * Display a localised date
     *
     * @param integer $timestamp
     * @param  $datefmt
     * @return
     */

    function localisedDate($timestamp = -1, $datefmt)
    {
        global $lang_month, $lang_day_of_week;
        $config = cpgConfig::getInstance();

        if ($timestamp == -1) {
            $timestamp = time();
        }
        $diff_to_GMT = date("O") / 100;

        $timestamp += ($config->conf['time_offset'] - $diff_to_GMT) * 3600;

        $date = ereg_replace('%[aA]', $lang_day_of_week[(int)strftime('%w', $timestamp)], $datefmt);
        $date = ereg_replace('%[bB]', $lang_month[(int)strftime('%m', $timestamp)-1], $date);     
        return strftime($date, $timestamp);
    }

    /**
     * localisedTimestamp()
     *
     * Display a localised timestamp
     *
     * @return
     */
    function localisedTimestamp()
    {        
        return strtotime(cpgUtils::localisedDate(-1, '%B %d, %Y  %H : %M : %S'));
    }

    /**
     * makeClickable()
     *
     * @param  $text
     * @return
     */

    function makeClickable($text)
    {
        $ret = " " . $text;
        $ret = preg_replace("#([\n ])([a-z]+?)://([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+]+)#i", "\\1<a href=\"\\2://\\3\" rel=\"external\">\\2://\\3</a>", $ret);
        $ret = preg_replace("#([\n ])www\.([a-z0-9\-]+)\.([a-z0-9\-.\~]+)((?:/[a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+]*)?)#i", "\\1<a href=\"http://www.\\2.\\3\\4\" rel=\"external\">www.\\2.\\3\\4</a>", $ret);
        $ret = preg_replace("#([\n ])([a-z0-9\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)?[\w]+)#i", "\\1<a href=\"mailto:\\2@\\3\">\\2@\\3</a>", $ret);
        $ret = substr($ret, 1);

        return($ret);
    }
    // Allow the use of a limited set of phpBB bb codes in albums and image descriptions
    // Taken from phpBB code
    /**
     * bbDecode()
     *
     * @param  $text
     * @return
     */

    function bbDecode($text)
    {
        $text = nl2br($text);

        static $bbcode_tpl = array();
        static $patterns = array();
        static $replacements = array();
        // First: If there isn't a "[" and a "]" in the message, don't bother.
        if ((strpos($text, "[") === false || strpos($text, "]") === false)) {
            return $text;
        }
        // [b] and [/b] for bolding text.
        $text = str_replace("[b]", '<b>', $text);
        $text = str_replace("[/b]", '</b>', $text);
        // [u] and [/u] for underlining text.
        $text = str_replace("[u]", '<u>', $text);
        $text = str_replace("[/u]", '</u>', $text);
        // [i] and [/i] for italicizing text.
        $text = str_replace("[i]", '<i>', $text);
        $text = str_replace("[/i]", '</i>', $text);
        // colours
        $text = preg_replace("/\[color=(\#[0-9A-F]{6}|[a-z]+)\]/", '<span style="color:$1">', $text);
        $text = str_replace("[/color]", '</span>', $text);
        // [i] and [/i] for italicizing text.
        // $text = str_replace("[i:$uid]", $bbcode_tpl['i_open'], $text);
        // $text = str_replace("[/i:$uid]", $bbcode_tpl['i_close'], $text);
        if (!count($bbcode_tpl)) {
            // We do URLs in several different ways..
            $bbcode_tpl['url'] = '<span class="bblink"><a href="{URL}" rel="external">{DESCRIPTION}</a></span>';
            $bbcode_tpl['email'] = '<span class="bblink"><a href="mailto:{EMAIL}">{EMAIL}</a></span>';

            $bbcode_tpl['url1'] = str_replace('{URL}', '\\1\\2', $bbcode_tpl['url']);
            $bbcode_tpl['url1'] = str_replace('{DESCRIPTION}', '\\1\\2', $bbcode_tpl['url1']);

            $bbcode_tpl['url2'] = str_replace('{URL}', 'http://\\1', $bbcode_tpl['url']);
            $bbcode_tpl['url2'] = str_replace('{DESCRIPTION}', '\\1', $bbcode_tpl['url2']);

            $bbcode_tpl['url3'] = str_replace('{URL}', '\\1\\2', $bbcode_tpl['url']);
            $bbcode_tpl['url3'] = str_replace('{DESCRIPTION}', '\\3', $bbcode_tpl['url3']);

            $bbcode_tpl['url4'] = str_replace('{URL}', 'http://\\1', $bbcode_tpl['url']);
            $bbcode_tpl['url4'] = str_replace('{DESCRIPTION}', '\\2', $bbcode_tpl['url4']);

            $bbcode_tpl['email'] = str_replace('{EMAIL}', '\\1', $bbcode_tpl['email']);
            // [url]xxxx://www.phpbb.com[/url] code..
            $patterns[1] = "#\[url\]([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/url\]#si";
            $replacements[1] = $bbcode_tpl['url1'];
            // [url]www.phpbb.com[/url] code.. (no xxxx:// prefix).
            $patterns[2] = "#\[url\]([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/url\]#si";
            $replacements[2] = $bbcode_tpl['url2'];
            // [url=xxxx://www.phpbb.com]phpBB[/url] code..
            $patterns[3] = "#\[url=([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\](.*?)\[/url\]#si";
            $replacements[3] = $bbcode_tpl['url3'];
            // [url=www.phpbb.com]phpBB[/url] code.. (no xxxx:// prefix).
            $patterns[4] = "#\[url=([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\](.*?)\[/url\]#si";
            $replacements[4] = $bbcode_tpl['url4'];
            // [email]user@domain.tld[/email] code..
            $patterns[5] = "#\[email\]([a-z0-9\-_.]+?@[\w\-]+\.([\w\-\.]+\.)?[\w]+)\[/email\]#si";
            $replacements[5] = $bbcode_tpl['email'];
            // [img]xxxx://www.phpbb.com[/img] code..
            $bbcode_tpl['img'] = '<img src="{URL}" alt="" />';
            $bbcode_tpl['img'] = str_replace('{URL}', '\\1\\2', $bbcode_tpl['img']);

            $patterns[6] = "#\[img\]([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/img\]#si";
            $replacements[6] = $bbcode_tpl['img'];
        }
        $text = preg_replace($patterns, $replacements, $text);
        return $text;
    }
    // Return the total number of comments for a certain picture
    /**
     * countPicComments()
     *
     * @param  $pid
     * @param integer $skip
     * @return
     */
    function countPicComments($pid, $skip = 0)
    {
        $config = cpgConfig::getInstance();
        $db = cpgDb::getInstance();
        $query = "SELECT count(pid) AS count from {$config->conf['TABLE_COMMENTS']} where pid=$pid and msg_id!=$skip";
        $db->query($query);
        $count = $db->f('count');
        return $count;
    }

    /**
     * path2url()
     *
     * Function to create correct URLs for image name with space or exotic characters
     *
     * @param  $path
     * @return
     */

    function path2Url($path)
    {
        return str_replace("%2F", "/", rawurlencode($path));
    }

    function cpgDie($msgCode, $msgText, $errorFile, $errorLine)
    {
        global $lang_cpg_die;

        $auth = cpgAuth::getInstance();
		$config = cpgConfig::getInstance();
        $t = new cpgTemplate;

        $t->assign('msgTitle', $lang_cpg_die[$msgCode]);
        $t->assign('msgText', $msgText);
		if (($config->conf['debug_mode'] == 1 || ($config->conf['debug_mode'] == 2 && GALLERY_ADMIN_MODE))){
	        $t->assign('fileText', $lang_cpg_die['file']);
	        $t->assign('file', $errorFile);
	        $t->assign('lineText', $lang_cpg_die['line']);
	        $t->assign('line', $errorLine);
		}

        $t->assign('CONTENT', $t->fetchHTML('common/cpgDie.html'));

        /**
         * Cleanup connections, freeze objects in session, set user cookie.
         */
        include ('include/cleanUp.inc.php');

        $t->assign('SUB_TITLE', $lang_cpg_die[$msgCode]);

        $t->display('main.html');
        exit;
    }

    /**
     * cpgUtils::msgBox()
     *
     * @param  $title
     * @param  $msgText
     * @param string $buttonText
     * @param string $buttonLink
     * @param string $width
     * @param boolean $meta
     * @return
     */
    function msgBox($title, $msgText, $buttonText = "", $buttonLink = "", $width = "-1", $meta = false)
    {
        $t = new cpgTemplate;
        $config = cpgConfig::getInstance();
        $auth = cpgAuth::getInstance();

        if ($width == '-1') {
            $width = $config->conf['picture_table_width'];
        }
        if ($width == '100%') {
            $width = $config->conf['main_table_width'];
        }
        $t->assign('msgTitle', $title);
        $t->assign('msgText', $msgText);
        $t->assign('buttonText', $buttonText);
        $t->assign('buttonLink', $buttonLink);
        $t->assign('width', $width);

        $t->assign('CONTENT', $t->fetchHTML('common/msgBox.html'));

        /**
         * Cleanup connections, freeze objects in session, set user cookie.
         */
        include ('include/cleanUp.inc.php');

        if ($meta) {
          $meta = '<META http-equiv="refresh" content="3;url='.$buttonLink.'">';
        } else {
          $meta = '';
        }

        $t->assign('SUB_TITLE', $title);
        $t->assign('META', $meta);

        $t->display('main.html');
        exit;
    }

    /**
     * cpgUtils::isRefererSearchEngine()
     *
     * @param string $engine
     * @return
     */
    function isRefererSearchEngine($engine = 'google')
    {
        // $siteurl = get_settings('home');
        $referer = urldecode($_SERVER['HTTP_REFERER']);
        // echo "referer is: $referer<br />";
        if (! $engine) {
            return 0;
        }

        switch ($engine) {
            case 'google':
                if (preg_match('|^http://(www)?\.?google.*|i', $referer)) {
                    return 1;
                }
                break;

            case 'lycos':
                if (preg_match('|^http://search\.lycos.*|i', $referer)) {
                    return 1;
                }
                break;

            case 'yahoo':
                if (preg_match('|^http://search\.yahoo.*|i', $referer)) {
                    return 1;
                }
                break;
        }
        return 0;
    }

    /**
     * Function to get the search string if the picture is viewed from google, lucos or yahoo search engine
     */

    /**
     * cpgUtils::getSearchQueryTerms()
     *
     * @param string $engine
     * @return
     */
    function getSearchQueryTerms($engine = 'google')
    {
        $referer = urldecode($_SERVER['HTTP_REFERER']);
        $query_array = array();
        switch ($engine) {
            case 'google':
                // Google query parsing code adapted from Dean Allen's
                // Google Hilite 0.3. http://textism.com
                $query_terms = preg_replace('/^.*q=([^&]+)&?.*$/i', '$1', $referer);
                $query_terms = preg_replace('/\'|"/', '', $query_terms);
                $query_array = preg_split ("/[\s,\+\.]+/", $query_terms);
                break;

            case 'lycos':
                $query_terms = preg_replace('/^.*query=([^&]+)&?.*$/i', '$1', $referer);
                $query_terms = preg_replace('/\'|"/', '', $query_terms);
                $query_array = preg_split ("/[\s,\+\.]+/", $query_terms);
                break;

            case 'yahoo':
                $query_terms = preg_replace('/^.*p=([^&]+)&?.*$/i', '$1', $referer);
                $query_terms = preg_replace('/\'|"/', '', $query_terms);
                $query_array = preg_split ("/[\s,\+\.]+/", $query_terms);
                break;
        }
        return $query_array;
    }

    /**
     * Function to get the array of all the albums for building the select box
     */
    /**
     * cpgUtils::getAlbumListArray()
     *
     * @param string $userId
     * @return
     */
    /**
     * cpgUtils::getAlbumListArray()
     *
     * @param string $userId
     * @return
     */
    function getAlbumListArray($userId = '')
    {
        global $lang_upload_php;

        $db = cpgDB::getInstance();
        $config = cpgConfig::getInstance();
        $auth = cpgAuth::getInstance();

        if (GALLERY_ADMIN_MODE) {
            $query = "SELECT aid, title FROM {$config->conf['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " ORDER BY title";
        } else {
            $query = "SELECT aid, title FROM {$config->conf['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " AND uploads='YES' AND user_id <> '" . $auth->isDefined('USER_ID') . "' ORDER BY title";
        }

        $db->query($query);

        if ($db->nf()) {
            $public_albums_list = $db->fetchRowSet();
        } else {
            $public_albums_list = array();
        }

        if ($userId != '') {
            $or = " OR category='" . (FIRST_USER_CAT + $userId) . "'";
        }

        if ($auth->isDefined('USER_ID')) {
            if (GALLERY_ADMIN_MODE) {
                $query = "SELECT aid, title FROM {$config->conf['TABLE_ALBUMS']} WHERE user_Id='" . $auth->isDefined('USER_ID') . "' AND category > '" . FIRST_USER_CAT. "' ORDER BY title";
            } else {
                $query = "SELECT aid, title FROM {$config->conf['TABLE_ALBUMS']} WHERE user_Id='" . $auth->isDefined('USER_ID') . "' $or ORDER BY title";
            }
            $db->query($query);

            if ($db->nf()) {
                $user_albums_list = $db->fetchRowSet();
            } else {
                $user_albums_list = array();
            }
        } else {
            $user_albums_list = array();
        }

        if (!count($public_albums_list) && !count($user_albums_list)) {
            cpgUtils::cpgDie (ERROR, $lang_upload_php['err_no_alb_uploadables'], __FILE__, __LINE__);
        }
        // Assign maximum file size for browser crontrols.
        $max_file_size = $config->conf['max_upl_size'] << 10;
        // Reset counter

        $list_count = 0;
        // Cycle through the User albums
        foreach($user_albums_list as $album) {

            $album_id = $album['aid'];
            // Get the category name
            $vQuery = "SELECT cat.name FROM " . $config->conf['TABLE_CATEGORIES'] . " cat, " . $config->conf['TABLE_ALBUMS'] . " alb WHERE alb.aid='" . $album_id . "' AND cat.cid=alb.category";
            $db->query($vQuery);
            $vRes = $db->fetchRow();

            // Add to multi-dim array for sorting later
            if ($vRes['name']) {
                $listArray[$list_count]['cat'] = $vRes['name'];
            } else {
                $listArray[$list_count]['cat'] = $lang_upload_php['personal_albums'];
            }

            $listArray[$list_count]['aid'] = $album['aid'];
            $listArray[$list_count]['title'] = $album['title'];
            $list_count++;
        }

        // Cycle through the public albums
        foreach($public_albums_list as $album) {
            // Set $album_id to the actual album ID
            $album_id = $album['aid'];
            // Get the category name
            $vQuery = "SELECT cat.name FROM " . $config->conf['TABLE_CATEGORIES'] . " cat, " . $config->conf['TABLE_ALBUMS'] . " alb WHERE alb.aid='" . $album_id . "' AND cat.cid=alb.category";
            $db->query($vQuery);
            $vRes = $db->fetchRow();
            // Add to multi-dim array for sorting later
            if ($vRes['name']) {
                $listArray[$list_count]['cat'] = $vRes['name'];
            } else {
                $listArray[$list_count]['cat'] = $lang_upload_php['albums_no_category'];
            }
            $listArray[$list_count]['aid'] = $album['aid'];
            $listArray[$list_count]['title'] = $album['title'];
            $list_count++;
        }

        return($listArray);
    }

    /**
     * cpgUtils::getPublicAlbums()
     *
     * @return
     */
    function getPublicAlbums()
    {
        global $lang_upload_php;

        $db = cpgDB::getInstance();
        $config = cpgConfig::getInstance();
        $auth = cpgAuth::getInstance();

        if (GALLERY_ADMIN_MODE) {
            $query = "SELECT aid, title FROM {$config->conf['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " ORDER BY title";
        } else {
            $query = "SELECT aid, title FROM {$config->conf['TABLE_ALBUMS']} WHERE category < " . FIRST_USER_CAT . " AND uploads='YES' ORDER BY title";
        }

        $db->query($query);

        if ($db->nf()) {
            $public_albums_list = $db->fetchRowSet();
        } else {
            $public_albums_list = array();
        }
        // Reset counter
        $list_count = 0;
        // Cycle through the public albums
        foreach($public_albums_list as $album) {
            // Set $album_id to the actual album ID
            $album_id = $album['aid'];
            // Get the category name
            $vQuery = "SELECT cat.name FROM " . $config->conf['TABLE_CATEGORIES'] . " cat, " . $config->conf['TABLE_ALBUMS'] . " alb WHERE alb.aid='" . $album_id . "' AND cat.cid=alb.category";
            $db->query($vQuery);
            $vRes = $db->fetchRow();
            // Add to multi-dim array for sorting later
            if ($vRes['name']) {
                $listArray[$list_count]['cat'] = $vRes['name'];
            } else {
                $listArray[$list_count]['cat'] = $lang_upload_php['albums_no_category'];
            }
            $listArray[$list_count]['aid'] = $album['aid'];
            $listArray[$list_count]['title'] = $album['title'];
            $list_count++;
        }
        return($listArray);
    }

    /**
     * cpgUtils::getUserAlbums()
     *
     * @param string $userId
     * @return
     */
    function getUserAlbums($userId = '')
    {
        global $lang_upload_php;

        $db = cpgDB::getInstance();
        $config = cpgConfig::getInstance();
        $auth = cpgAuth::getInstance();

        if ($userId != '') {
            $or = " OR category='" . (FIRST_USER_CAT + $userId) . "'";
        }

        if ($auth->isDefined('USER_ID')) {
            $query = "SELECT aid, title FROM {$config->conf['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + $auth->isDefined('USER_ID')) . "' OR user_Id = '".$auth->isDefined('USER_ID') ."' $or ORDER BY title";

            $db->query($query);

            if ($db->nf()) {
                $user_albums_list = $db->fetchRowSet();
            } else {
                $user_albums_list = array();
            }
        } else {
            $user_albums_list = array();
        }
        // Reset counter
        $list_count = 0;
        // Cycle through the User albums
        foreach($user_albums_list as $album) {
            // Add to multi-dim array for later sorting
            $listArray[$list_count]['cat'] = $lang_upload_php['personal_albums'];
            $listArray[$list_count]['aid'] = $album['aid'];
            $listArray[$list_count]['title'] = $album['title'];
            $list_count++;
        }

        return($listArray);
    }

    /**
     * Multi-dim array sort, with ability to sort by two and more dimensions
     * Coded by Ichier2003, available at php.net
     * syntax:
     * $array = array_csort($array [, 'col1' [, SORT_FLAG [, SORT_FLAG]]]...);
     */
    /**
     * cpgUtils::array_csort()
     *
     * @return
     */
    function array_csort()
    {
        $args = func_get_args();
        $marray = array_shift($args);

        $msortline = "return(array_multisort(";
        foreach ($args as $arg) {
            $i++;
            if (is_string($arg)) {
                foreach ($marray as $row) {
                    $sortarr[$i][] = $row[$arg];
                }
            } else {
                $sortarr[$i] = $arg;
            }
            $msortline .= "\$sortarr[" . $i . "],";
        }
        $msortline .= "\$marray));";

        eval($msortline);
        return $marray;
    }

    /**
     * cpgDisplayHelp()
     *
     * @param string $reference
     * @param string $width
     * @param string $height
     * @return
     */

    function cpgDisplayHelp($reference = 'f=index.htm', $width = '600', $height = '350')
    {
        $config = cpgConfig::getInstance();
        $auth = cpgAuth::getInstance();

        if ($reference == '' || $config->conf['enable_help'] == '0') {
            return;
        }

        if ($config->conf['enable_help'] == '2' && GALLERY_ADMIN_MODE == false) {
            return;
        }

        $help_theme = $config->conf['theme'];
        if (isset($auth->user['theme'])) {
            $help_theme = $auth->user['theme'];
        }
        $help_html = "<a href=\"javascript:;\" onclick=\"MM_openBrWindow('docs/showdoc.php?css=" . $help_theme . "&amp;" . $reference . "','" . uniqid(rand()) . "','scrollbars=yes,toolbar=no,status=no,resizable=yes,width=" . $width . ",height=" . $height . "')\" style=\"cursor:help\"><img src=\"images/help.gif\" width=\"13\" height=\"11\" border=\"0\" alt=\"\" title=\"\" /></a>";
        return $help_html;
    }

    /**
     * cpgGetSystemThumb()
     *
     * Gets data for system thumbs
     *
     * @param string $filename
     * @param integer $user
     * @return array
     */

    function&cpgGetSystemThumb($filename, $user = 10001)
    {
        $config = cpgConfig::getInstance();
        $auth = cpgAuth::getInstance();
        // Correct user_id
        if ($user < 10000) {
            $user += 10000;
        }

        if ($user == 10000) {
            $user = 10001;
        }
        // Get image data for thumb
        $picdata = array ('filename' => $filename,
            'filepath' => $config->conf['userpics'] . $user . '/',
            'url_prefix' => 0
            );

        $picUrl = cpgUtils::getPicUrl($picdata, 'thumb', true);
        $picdata['thumb'] = $picUrl;
        /*
    $image_info = getimagesize($pic_url);
    $picdata['pwidth'] = $image_info[0];
    $picdata['pheight'] = $image_info[1];
    $image_size = cpgUtils::computeImgSize($picdata['pwidth'], $picdata['pheight'], $CONFIG['alb_list_thumb_size']);
    $picdata['whole'] = $image_size['whole'];
    $picdata['reduced'] = (isset($image_size['reduced']) && $image_size['reduced']);
*/
        return $picdata;
    }

    /**
     * cpgGetSystemThumbList()
     *
     * Return an array containing the system thumbs in a directory
     *
     * @param string $search_folder
     * @return array
     */
    function cpgGetSystemThumbList($searchFolder = 'images/') {
        static $thumbs = array();
        $config = cpgConfig::getInstance();

        $folder = 'images/';

        $thumbPfx = $config->conf['thumb_pfx'];

        /**
         * If thumb array is empty get list from coppermine 'images' folder
         */
        if ((count($thumbs) == 0) && ($folder == $searchFolder)) {
            $dir = opendir($folder);

            while (($file = readdir($dir)) !== false) {
                if (is_file($folder.$file) && strpos($file, $thumbPfx) === 0) {
                    /**
                     * Store filenames in an array
                     */
                    $thumbs[] = array('filename' => $file);
                }
            }

            closedir($dir);

            return $thumbs;
        } elseif ($folder == $searchFolder) {
            /**
             * Search folder is the same as coppermine images folder; just return the array
             */
            return $thumbs;
        } else {
            /**
             * Search folder is the different; check for files in the given folder
             */
            $results = array();

            foreach ($thumbs as $thumb) {
                if (is_file($searchFolder.$thumb['filename'])) {
                    $results[] = array('filename' => $thumb['filename']);
                }
            }

            return $results;
        }
    } // End of function 'cpgGetSystemThumbList'

    /**
     * cpgUtils::getUsername()
     *
     * Function to get username for a particular user id
     *
     * @param $uid
     * @return
     */
    function getUsername($uid)
    {
        $db = cpgDb::getInstance();
        $auth = cpgAuth::getInstance();
        $config = cpgConfig::getInstance();

        $uid = (int)$uid;

        if (!$uid) {
            return 'Anonymous';
        } elseif (UDB_INTEGRATION != 'coppermine' && $config->conf['bridge_enable']) {
            return $auth->get_user_name($uid);
        } else {
            $query = "SELECT user_name FROM {$config->conf['TABLE_USERS']} WHERE user_id = '$uid'";
            $db->query($query);

            if ($db->nf() == 0) {
                return '';
            }

            $row = $db->fetchRow();

            return $row['user_name'];
        }
    } // End of function 'getUsername'

    /**
     * cpgUtils::getUserid()
     *
     * Function to get user id for a particular username
     *
     * @param $username
     * @return
     */
    function getUserid($username)
    {
        $db = cpgDb::getInstance();
        $auth = cpgAuth::getInstance();
        $config = cpgConfig::getInstance();

        $username = addslashes($username);

        if (!$username) {
            return 0;
        } elseif (UDB_INTEGRATION != 'coppermine' && $config->conf['bridge_enable']) {
            return $auth->get_user_id($username);
        } else {
            $query = "SELECT user_id FROM {$config->conf['TABLE_USERS']} WHERE user_name = '$username'";
            $db->query($query);

            if ($db->nf() == 0) {
                return 0;
            }

            $row = $db->fetchRow();

            return (int)$row['user_id'];
        }
    } // End of function 'getUserid'

    /**
     * cpgUtils::buildTree()
     *
     * Function to get comment tree
     *
     * @param $ele
     * @param $childParent
     * @return
     */
    function buildTree($ele, $childParent)
    {
        global $commentTree;

        if ($childParent[$ele] > 0) {
            $position = (int)($commentTree[$childParent[$ele]] + 1);
        } else {
            $position = 0;
        }

        $commentTree[$ele] = $position;

        if (in_array($ele, $childParent)) {
            reset($childParent);

            foreach ($childParent as $k => $v) {
                if (!array_key_exists($k, $commentTree) && $v == $ele) {
                    cpgUtils::buildTree($k, $childParent);
                }
            }
        }
    } // End of function 'getUserid'

    /**
     * cpgUtils::cpgMail()
     *
     * Function to send mail
     *
     * @param $to
     * @param $subject
     * @param $msgBody
     * @param $type
     * @param $senderName
     * @param $senderEmail
     * @param $msgBodyPlaintext
     * @return
     */
    function cpgMail($to, $subject, $msgBody = '', $type = 'text/plain', $senderName = '', $senderEmail = '', $msgBodyPlaintext = '')
    {
        $db = cpgDb::getInstance();
        $config = cpgConfig::getInstance();

        global $lang_charset;

        require_once('libs/phpmailer/class.phpmailer.php');

        // makeshift plaintext if not set
        if (!$msgBodyPlaintext){
            $msgBodyPlaintext = strip_tags($msgBody);
        }

        // send mails to ALL admins - not bridged only
        if ($to == 'admin') {
            if (UDB_INTEGRATION == 'coppermine') {
                $to = array($config->conf['gallery_admin_email']);

                $query = "SELECT user_email FROM {$config->conf['TABLE_USERS']} WHERE user_group = 1";
                $db->query($query);

                while ($row = $db->fetchRow()) {
                    if (isset($row['user_email'])) $to[] = $row['user_email'];
                }

                $to = array_unique($to);
            } else {
                $to = array($config->conf['gallery_admin_email']);
            }
        } else {
            $to = array($to);
        }

        if ($senderName == '') { $senderName = $config->conf['gallery_name']; }
        if ($senderEmail == '') { $senderEmail = $config->conf['gallery_admin_email']; }

        $charset = ($config->conf['charset'] == 'language file' ? $lang_charset : $config->conf['charset']);

        /**
         * Code to send confirmation email starts
         * Create the mail object
         */
        $mail = new PHPmailer();
        $mail->SetLanguage('en', 'libs/phpmailer/language/');

        // Set the mail configuration
        if ($config->conf['smtp_host']) {
            $mail->IsSMTP();
            $mail->Host = $config->conf['smtp_host'];

            if ($config->conf['smtp_username']) {
                $mail->SMTPAuth = true;
                $mail->Username = $config->conf['smtp_username'];
                $mail->Password = $config->conf['smtp_password'];
            } else {
                $mail->SMTPAuth = false;
            }
        } else {
            $mail->IsMail();
        }

        $mail->IsHTML(true);

        foreach ($to as $email) {
            $mail->AddAddress($email);
        }

        $mail->From = $senderEmail;
        $mail->FromName = $senderName;
        $mail->Subject = $subject;
        $mail->Body = $msgBody;
        $mail->AltBody = $msgBodyPlaintext;

        if ($mail->Send()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * cpgUtils::cpgGetCategories()
     *
     * Method to return array of categories in which user can create album
     *
     * @param
     * return $categories
     */
    function cpgGetCategories()
    {
        global $lang_albmgr_php;

        $db = cpgDb::getInstance();
        $auth = cpgAuth::getInstance();
        $config = cpgConfig::getInstance();

        $categories = array();
        $categories[(int)($auth->isDefined('USER_ID') + FIRST_USER_CAT)] = array(
                                                  'name' => stripslashes($lang_albmgr_php['my_gallery']),
                                                  'description' => stripslashes($lang_albmgr_php['my_gallery'])
                                                  );

        /**
         * Query to get categories in which user can create album
         */
        $query = 'SELECT c.cid, c.name, c.description FROM '.$config->conf['TABLE_CATEGORIES']." c, {$config->conf['TABLE_CATEGORY_MAP']} cm WHERE c.cid = cm.cid AND cm.group_id IN ('".implode("', '", $auth->userData['groups'])."') ORDER BY pos ASC";
        $db->query($query);

        if ($db->nf() > 0) {
          while ($row = $db->fetchRow()) {
            $categories[(int)$row['cid']] = array(
                                                  'name' => stripslashes($row['name']),
                                                  'description' => stripslashes($row['description'])
                                                  );
          }
        }

        return $categories;
    }

    /**
     * deleteFoldersFilesRecursively()
     *
     * Method to delete directories and files under a particular directory recursively
     *
     * @param String $directory Directory to be deleted
     * @return
     */
    function deleteFoldersFilesRecursively($directory)
    {
        // If directory
        if (is_dir($directory)) {
            // Open directory handle
            if ($handle = opendir($directory)) {
                // Read a directory
                while (($fileOrDirectory = readdir($handle)) !== false) {
                    // If directory is '.' (current directory) or '..' (parent directory) then skip it
                    if ($fileOrDirectory == '.' || $fileOrDirectory == '..') {
                        continue;
                    }

                    // If directory
                    if (is_dir($directory.'/'.$fileOrDirectory)) {
                        // Delete directory and files recursively
                        cpgUtils::deleteFoldersFilesRecursively($directory.'/'.$fileOrDirectory);
                    // If file
                    } else if (is_file($directory.'/'.$fileOrDirectory)) {
                        // Delete file
                        $isDeleted = unlink($directory.'/'.$fileOrDirectory);
/*
                        if ($isDeleted) {
                            print('<font color="green">File - '.$directory.'/'.$fileOrDirectory.' deleted successfully</font>.<br />'."\n");
                        } else {
                            print('<font color="red">Unable to delete file - '.$directory.'/'.$fileOrDirectory.'</font>.<br />'."\n");
                        }
*/
                    }
                }

                // Close directory handle
                closedir($handle);

                // Delete directory
                $isDeleted = rmdir($directory);
/*
                if ($isDeleted) {
                    print('<font color="green">Directory - '.$directory.' deleted successfully</font>.<br />'."\n");
                } else {
                    print('<font color="red">Unable to delete directory - '.$directory.'</font>.<br />'."\n");
                }
*/
            }
        }
    } // End of method 'deleteFoldersFilesRecursively'

    /**
     * replaceForbidden()
     * Method to replace forbidden characters from filename/string.
     *
     * @param String $str
     * @return String
     */
    function replaceForbidden($str)
    {
	    static $forbidden_chars;
	    $config = cpgConfig::getInstance();
	    if (!is_array($forbidden_chars)) {
	      global $mb_utf8_regex;
	      if (function_exists('html_entity_decode')) {
	        $chars = html_entity_decode($config->conf['forbiden_fname_char'], ENT_QUOTES, 'UTF-8');
  	      } else {
	        $chars = str_replace(array('&amp;', '&quot;', '&lt;', '&gt;', '&nbsp;', '&#39;'), array('&', '"', '<', '>', ' ', "'"), $config->conf['forbiden_fname_char']);
	      }
	      preg_match_all("#$mb_utf8_regex".'|[\x00-\x7F]#', $chars, $forbidden_chars);
	    }
	    /**
	     * $str may also come from $_POST, in this case, all &, ", etc will get replaced with entities.
 	     * Replace them back to normal chars so that the str_replace below can work.
	     */
	    $str = str_replace(array('&amp;', '&quot;', '&lt;', '&gt;'), array('&', '"', '<', '>'), $str);;
	    $return = str_replace($forbidden_chars[0], '_', $str);

	    /**
	     * Fix the obscure, misdocumented "feature" in Apache that causes the server
	     * to process the last "valid" extension in the filename (rar exploit): replace all
	     * dots in the filename except the last one with an underscore.
	     */
	    // This could be concatenated into a more efficient string later, keeping it in three
	    // lines for better readability for now.
	    $extension = ltrim(substr($return,strrpos($return,'.')),'.');
	    $filenameWithoutExtension = str_replace('.' . $extension, '', $return);
	    $return = str_replace('.', '_', $filenameWithoutExtension) . '.' . $extension;

	    return $return;
    }

    /**
     * utf_ucfirst()
     *
     * Method to make first character of string uppercase if it is alphabet
     *
     * @param String $str String to be converted
     * @return String
     */
    function utf_ucfirst($str)
    {
        if (!function_exists('mb_strtoupper')) { require_once 'include/mb.inc.php'; }
        return mb_strtoupper(mb_substr($str, 0, 1)).mb_substr($str, 1);
    } // End of method 'utf_ucfirst'

    /**
     * utf_strtolower()
     *
     * Method to make all alphabets in a string as lowercase
     *
     * @param String $str String to be converted
     * @return String
     */
    function utf_strtolower($str)
    {
        if (!function_exists('mb_strtolower')) { require_once 'include/mb.inc.php'; }
        return mb_strtolower($str);
    } // End of method 'utf_strtolower'
    
    /**
     * themeSelect()
     *
     * Method to create theme selection drop down box.
     *
     * @param String $parameter String to be converted
     * @return String $return
     */
    function themeSelect($parameter = '') {  
        global $lang_theme_selection;        
        $config = cpgConfig::getInstance();
        $db = cpgDb::getInstance();
        $t = new cpgTemplate();
                               
        if ($config->conf['theme_list'] == 0) {
           return;
        }
                      
        $cpgCurrentScript = $_SERVER["SCRIPT_NAME"]."?";
        
        foreach ($_GET as $key => $value) {
            if ($key!="theme"){$cpgCurrentScript.= $key . "=" . $value . "&amp;";}
        }
        $cpgCurrentScript.="theme=";
                   
                   
        $theme_dir = 'templates/';
    
        $dir = opendir($theme_dir);
        while ($file = readdir($dir)) {
            if (is_dir($theme_dir . $file) && $file != "." && $file != ".." && $file != 'CVS' && $file != 'sample' && $file != '.svn' && $file != 'common') {
                $theme_array[] = $file;
            }
        }
        closedir($dir);
    
        natcasesort($theme_array);
        
        //start the output
        switch ($parameter) {
          case 'table':
              $return = 'not yet implemented';
              break;
          default:
             
              $return = $t->getThemeSelectHtml($theme_array,$cpgCurrentScript);
          }
                
        return $return;                
    }  
}

?>