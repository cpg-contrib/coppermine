<?php
/**
 * cpgAddFavorite.class.php
 *
 * class for making and removing, My Favorite
 *
 * @package cpgNG
 * @author Himlal Pun <himlal@sanisoft.com>
 * @version $Id$
 */
class cpgAddFavorite {
    var $db;
    var $config;
    var $auth;
    var $pic;

    /**
     * cpgAddFavorite::cpgAddFavorite()
     *
     * @return
     */
    function cpgAddFavorite($pid)
    {
        $this->db = cpgDB::getInstance();
        $this->auth = cpgAuth::getInstance();
        $this->config = cpgConfig::getInstance();
        $this->pic = $pid;
    }

    /**
     * cpgAddFavorite::addFavoritePicture()
     *
     * @param  $pic
     */
    function addFavoritePicture()
    {
        $FAVPICS = $this->auth->favPics;
        if (!in_array($this->pic, $FAVPICS)) {
            $FAVPICS[] = $this->pic;
        } else {
            $key = array_search($this->pic, $FAVPICS);
            unset ($FAVPICS[$key]);
        }

        $data = base64_encode(serialize($FAVPICS));
        setcookie($this->config->conf['cookie_name'] . '_fav', $data, time() + 86400 * 15, $this->config->conf['cookie_path']);

        $userId = $this->auth->isDefined('USER_ID');
        if ($userId > 0) {
            $sql = "UPDATE {$this->config->conf['TABLE_FAVPICS']} SET user_favpics = '$data' WHERE user_id = " . $userId;
            $this->db->query($sql);
            if ($this->db->affectedRows() < 1) {
                $sql = "INSERT INTO {$this->config->conf['TABLE_FAVPICS']} (user_id, user_favpics) VALUES (" . $userId . ", '$data')";
                $this->db->query($sql);
            }
        }
    }
}

?>
