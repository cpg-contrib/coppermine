<?php
/**
 * cpgProcessGroup.class.php
 *
 * Class containing static function which are used for different kind of data processing related to groups
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

class cpgProcessGroup {

  function cpgProcessGroup()
  {
    $this->db = cpgDB::getInstance();
    $this->config = cpgConfig::getInstance();
    $this->auth = cpgAuth::getInstance();
  }

  function getGroups($defaultGroupNames)
  {
    global $lang_groupmgr_php;

   /**
    * Create the array for groups to be displayed.
    */
    $query = "SELECT * FROM {$this->config->conf['TABLE_USERGROUPS']} WHERE 1 ORDER BY group_id";
    $this->db->query($query);
    if ($this->db->nf() == 0) {
      /**
      * No groups found. Error!!!
      */
      cpgUtils::cpgDie(CRITICAL_ERROR, $lang_groupmgr_php['error_group_empty']);
    }

    $this->groupArr = array();
    $i = 0;
    while ($row = $this->db->fetchRow()) {
      $this->groupArr[$i] = $row;
      if ($row['group_id'] == 3 && $this->config->conf['allow_unlogged_access'] == 0) {
        $this->groupArr[$i]['disabled'] = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
        $this->groupArr[$i]['grayoutHelp'] ='&nbsp;'.cpgUtils::cpgDisplayHelp('f=index.htm&base=64&h='.urlencode(base64_encode(serialize($lang_groupmgr_php['explain_greyed_out_title']))).'&t='.urlencode(base64_encode(serialize(sprintf($lang_groupmgr_php['explain_guests_greyed_out_text'],'<i>'.$row['group_name'].'</i>')))), '450', '300');
      } elseif ($row['group_id'] == 4) {
        $this->groupArr[$i]['disabled'] = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
        $this->groupArr[$i]['grayoutHelp'] = '&nbsp;'.cpgUtils::cpgDisplayHelp('f=index.htm&base=64&h='.urlencode(base64_encode(serialize($lang_groupmgr_php['explain_greyed_out_title']))).'&t='.urlencode(base64_encode(serialize(sprintf($lang_groupmgr_php['explain_banned_greyed_out_text'],'<i>'.$row['group_name'].'</i>')))), '450', '300');
      } else {
        $this->groupArr[$i]['disabled'] = '';
        $this->groupArr[$i]['grayoutHelp'] = '';
      }

      // show reset option if applicable
      if (UDB_INTEGRATION == 'coppermine' && isset($defaultGroupNames[$row['group_id']])) {
        if ($row['group_name'] != $defaultGroupNames[$row['group_id']] && $defaultGroupNames[$row['group_id']] != '') {
          // we have a group here that doesn't have the default name
          $this->groupArr[$i]['showReset'] = array('title' => sprintf($lang_groupmgr_php['reset_to_default'], $defaultGroupNames[$row['group_id']]), 'onclick' => 'document.groupmanager.group_name_'.$row['group_id'].'.value=\''.$defaultGroupNames[$row['group_id']].'\'');
        }
      }

      /**
      * Check whether we need to show the 'Delete Group button
      */
      if ($row['group_id'] > 4) {
        $this->displayDeleteGroup = 1;
      }
      $i++;
    }
  }
  function processPostData()
  {
    if (isset($_POST['del_sel']) && isset($_POST['delete_group']) && is_array($_POST['delete_group'])) {
        foreach($_POST['delete_group'] as $groupId) {
            $query = "DELETE FROM {$this->config->conf['TABLE_USERGROUPS']} WHERE group_id = '" . (int)$groupId . "' LIMIT 1";

            $this->db->query($query);

            $query = "UPDATE {$this->config->conf['TABLE_USERS']} SET user_group = '2' WHERE user_group = '" . (int)$groupId . "'";

            $this->db->query($query);
        }
    } elseif (isset($_POST['new_group'])) {
        $query = "INSERT INTO {$this->config->conf['TABLE_USERGROUPS']} SET group_name = '{$_POST['new_group_name']}'";

        $this->db->query($query);
    } elseif (isset($_POST['apply_modifs'])) {

      $fieldList = array('group_name', 'group_quota', 'can_rate_pictures', 'can_send_ecards', 'can_post_comments', 'can_upload_pictures', 'pub_upl_need_approval', 'can_create_albums', 'priv_upl_need_approval', 'upload_form_config', 'custom_user_upload', 'num_file_upload', 'num_URI_upload');

      $groupIdArray = $_POST['group_id'];

      foreach ($groupIdArray as $key => $groupId) {
          $setStatment = '';
          foreach ($fieldList as $field) {
              //if (!isset($_POST[$field . '_' . $groupId])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'] . " ({$field}_{$groupId})", __FILE__, __LINE__);
              //set the 'upload_form_config' entry
              // case File upload boxes=1 and URI upload boxes=0 => single uploads (0)
              if ($_POST['num_file_upload_' . $groupId] == 1 && $_POST['num_URI_upload_' . $groupId] == 0) {
                  $_POST['upload_form_config_' . $groupId] = 0;
              }
              // case File upload boxes>1 and URI upload boxes=0 => multi file uploads (1)
              if ($_POST['num_file_upload_' . $groupId] > 1 && $_POST['num_URI_upload_' . $groupId] == 0) {
                  $_POST['upload_form_config_' . $groupId] = 1;
              }
              // case File upload boxes=0 and URI upload boxes>0 => multi uri uploads (2)
              if ($_POST['num_file_upload_' . $groupId] == 0 && $_POST['num_URI_upload_' . $groupId] > 0) {
                  $_POST['upload_form_config_' . $groupId] = 2;
              }
              // case File upload boxes>0 and URI upload boxes>0 => File and URI uploads (3)
              if ($_POST['num_file_upload_' . $groupId] > 0 && $_POST['num_URI_upload_' . $groupId] > 0) {
                  $_POST['upload_form_config_' . $groupId] = 3;
              }
              // case File upload boxes=0 and URI upload boxes=0 => input error, default to single uploads (0)
              if ($_POST['num_file_upload_' . $groupId] == 0 && $_POST['num_URI_upload_' . $groupId] == 0) {
                  $_POST['upload_form_config_' . $groupId] = 0;
              }
              if ($field == 'group_name') {
                  $setStatment .= $field . "='" . addslashes($_POST[$field . '_' . $groupId]) . "',";
              } else {
                  $setStatment .= $field . "='" . (int)$_POST[$field . '_' . $groupId] . "',";
              }
          }
          $setStatment = substr($setStatment, 0, -1);

          $query = "UPDATE {$this->config->conf['TABLE_USERGROUPS']} SET $setStatment WHERE group_id = '$groupId' LIMIT 1";

          $this->db->query($query);
      }
    }
  }
}
?>