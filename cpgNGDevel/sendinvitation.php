<?php

/**
 * sendinvitation.php
 *
 * Script to send invitation for registration to new user
 *
 * @package cpgNG
 * @author Himlal Pun <himlal@sanisoft.com>
 * @version $Id: sendinvitation.php 49 2006-06-19 07:45:14Z shruti $
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('SENDINVITATION_PHP', true);
define('REGISTER_PHP', true);

include('include/init.inc.php');
include('include/smilies.inc.php');
/**
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgProcessUsers.class.php');

if (!GALLERY_ADMIN_MODE) {
        cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}
/**
 * Perform the task after submission of
 */

//$text = array();
if(isset($_POST['send'])) {
        $userEmail = $_POST['email_addr'];
        foreach ($userEmail as $email) {
                if ($email != '' && !eregi("^[_\.0-9a-z\-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,6}$", $email)) {
                    cpgUtils::cpgDie(ERROR,$lang_register_php['err_invalid_email'],__FILE__,__LINE__);
                } elseif ($email) {
                  $emailCount++;
                }
        }

        if (!$emailCount) {
          cpgUtils::cpgDie(ERROR,$lang_sendinvitation_php['empty_email_err'],__FILE__,__LINE__);
        }

        $invitationBody = $_POST['invitation_body'];
        if(strpos($invitationBody, '[LINK]') === false) {
                cpgUtils::cpgDie(ERROR,$lang_sendinvitation_php['invalid_mail_body'],__FILE__,__LINE__);
        } else {
                foreach($userEmail as $email) {
                        if ($email != '') {
                                $invitationCode = md5(uniqid(time()));
                                $link = '<a href="'.$config->conf['ecards_more_pic_target']."register.php?invite=".$invitationCode.'">'.$config->conf['ecards_more_pic_target'].'register.php?invite='.$invitationCode.'</a>';
                                $body = nl2br(str_replace('[LINK]', $link, $invitationBody));
                $body = sprintf($body, $config->conf['gallery_name']);
                                $query = "INSERT INTO
                                                        {$config->conf['TABLE_INVITATIONS']}
                                                  SET
                                                        email = '$email',
                                                        invitationCode = '$invitationCode',
                                                        invitationDate = '".date('Y-m-d H:i:s')."'";
                                $db->query($query);
                                //Function for sending emails
                                $subject = sprintf($lang_sendinvitation_php['mail_subject'], $config->conf['gallery_name']);
                                cpgUtils::cpgMail($email, $subject, $body);
                        }
                }
                cpgUtils::msgBox($lang_sendinvitation_php['page_title'], $lang_sendinvitation_php['invite_success'], $lang_continue, 'index.php', $width = "50%", true);
        }
}

//Create smarty object
$t = cpgTemplate::getInstance();

/**
 * Assign all the data to smarty
 */
$t->assign('lang_sendinvitation_php', $lang_sendinvitation_php);
$t->assign('TEXT', $userEmail);
$t->assign('CONTENT', $t->fetchHTML('common/sendinvitation.html'));
$t->display('main.html');


?>