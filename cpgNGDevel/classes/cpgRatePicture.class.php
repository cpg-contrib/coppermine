<?php
/**
 * cpgRatePicture.class.php
 *
 * class for making and removing, My Favorite
 *
 * @package cpgNG
 * @author Himlal Pun <himlal@sanisoft.com>
 * @version $Id$
 */
class cpgRatePicture {
    var $db;
    var $config;
    var $auth;
    var $pic;
    var $rate;

    /**
     * cpgRatePicture::cpgRatePicture()
     *
     * @param $pid
     * @param $rate
     * @return
     */
    function cpgRatePicture($pid, $rate)
    {
        $this->db = cpgDB::getInstance();
        $this->auth = cpgAuth::getInstance();
        $this->config = cpgConfig::getInstance();
        $this->pic = $pid;
        $this->rate = $rate;
    }

    /**
     * cpgRatePicture::ratePicture()
     */
    function ratePicture()
    {
        global $lang_errors, $lang_rate_pic_php;

        // If user does not accept script's cookies, we don't accept the vote
        if (!isset($_COOKIE[$this->config->conf['cookie_name'] . '_data'])) {
            header('Location: displayimage.php?pid=' . $this->pic);
            exit;
        }
       // If referer is not displayimage.php we don't accept the vote
       if (!eregi("displayimage",$_SERVER["HTTP_REFERER"])){
           header('Location: displayimage.php?pid=' .$this->pic);
           exit;
       }

        // Retrieve picture/album information & check if user can rate picture
        $sql = "SELECT a.votes as votes_allowed, p.votes as votes, pic_rating, owner_id " . "FROM {$this->config->conf['TABLE_PICTURES']} AS p, {$this->config->conf['TABLE_ALBUMS']} AS a " . "WHERE p.aid = a.aid AND pid = ".$this->pic." LIMIT 1";
        $result = $this->db->query($sql);
        if (!$this->db->nf()) {
            cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        }
        $row = $this->db->fetchRow($result);
        $this->db->free($result);
        if (!$this->auth->isDefined('USER_CAN_RATE_PICTURES') || $row['votes_allowed'] == 'NO') {
            cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied']);
        }

        // Clean votes older votes
        $curr_time = time();
        $clean_before = $curr_time - $this->config->conf['keep_votes_time'] * 86400;
        $sql = "DELETE " . "FROM {$this->config->conf['TABLE_VOTES']} " . "WHERE vote_time < $clean_before";
        $result = $this->db->query($sql);

        // Check if user already rated this picture
        $user_md5_id = $this->auth->isDefined('USER_ID') ? md5($this->auth->isDefined('USER_ID')) : $this->auth->user['ID'];
        $sql = "SELECT * " . "FROM {$this->config->conf['TABLE_VOTES']} " . "WHERE pic_id = '".$this->pic."' AND user_md5_id = '$user_md5_id'";

        $this->db->query($sql);
        if ($this->db->nf() >= 1) {
            cpgUtils::cpgDie(ERROR, $lang_rate_pic_php['already_rated']);
        }

        //display error if user try to Rating self uploaded picture
        $userId = $this->auth->isDefined('USER_ID');
        $owner = $row['owner_id'];
        $admin = $this->auth->isDefined('USER_IS_ADMIN');
        if (!empty($userId) && $userId==$owner && !$admin) {
            cpgUtils::cpgDie(ERROR, $lang_rate_pic_php['forbidden']);
        }

         // Update picture rating
         $new_rating = round(($row['votes'] * $row['pic_rating'] + $this->rate * 2000) / ($row['votes'] + 1));
         $sql = "UPDATE {$this->config->conf['TABLE_PICTURES']} " . "SET pic_rating = '$new_rating', votes = votes + 1 " . "WHERE pid = '".$this->pic."' LIMIT 1";
         $result = $this->db->query($sql);

         // Update the votes table
         $sql = "INSERT INTO {$this->config->conf['TABLE_VOTES']} " . "VALUES ('".$this->pic."', '$user_md5_id', '$curr_time')";
         $result = $this->db->query($sql);

         /**
          * Code to record the details of hits for the picture if the option is set in CONFIG
          */
         if ($this->config->conf['vote_details']) {
            // Get the details of user browser, IP, OS, etc
            $os = "Unknown";
            if (eregi("Linux",$_SERVER["HTTP_USER_AGENT"])) {
               $os = "Linux";
            } else if (eregi("Windows NT 5.0",$_SERVER["HTTP_USER_AGENT"])) {
                $os = "Windows 2000";
            } else if(eregi("win98|Windows 98",$_SERVER["HTTP_USER_AGENT"])) {
                $os = "Windows 98";
            }

            $browser = 'Unknown';
            if (eregi("MSIE",$browser)) {
                if (eregi("MSIE 5.5",$browser)) {
                    $browser = "Microsoft Internet Explorer 5.5";
                } else if (eregi("MSIE 6.0",$browser)) {
                     $browser = "Microsoft Internet Explorer 6.0";
                }
            } else if (eregi("Mozilla Firebird",$browser)) {
                $browser = "Mozilla Firebird";
            } else if (eregi("netscape",$browser)) {
                 $browser = "Netscape";
            }
            $time = time();

            $referer = urlencode(addslashes($_SERVER['HTTP_REFERER']));

            // Insert the record in database
            $query = "INSERT INTO {$this->config->conf['TABLE_VOTE_STATS']}
                      SET
                         pid     = '$this->pic',
                         rating  = '$this->rate',
                         Ip      = '$raw_ip',
                         sdate   = '$time',
                         referer = '$referer',
                         browser = '$browser',
                         os      = '$os'";

            $this->db->query($query);
       }
    }
}

?>