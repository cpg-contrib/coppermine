<?php

/*
        Title/thumbnail Utility for Coppermine photo album 1.1         (http://www.chezgreg.net/coppermine/)

        version 1.3 (16/7/2003)

        - Updates titles from filename
        - Deletes titles
        - Rebuilds thumbnails and resized photos
        - Deletes original sized photos replacing them with the sized version

        This script has been tested on my own Coppermine 1.1 gallery with no errors, but I recommend backing up
        the database and album files before using it for the first time...

        Usage:
        1) Upload util.php to the root dir of Coppermine
        2) Login to Coppermine
        3) Open http://www.yourdomain.com/coppermine/util.php
        4) Follow onscreen instructions

         If you want a link to the script from the admin menu do the following:
         1) Open /themes/yourtheme/theme.php
         2) Add:     <td class="admin_menu"><a href="util.php" title="">Util.mod</a></td>
             After:   <td class="admin_menu"><a href="profile.php?op=edit_profile" title="">{MY_PROF_LNK}</a></td>

        If you know regular expressions scroll down to ADD YOUR OWN PARSEMODES HERE to modify the included parsemodes.

        Created by David Holm (wormie@alberg.dk)
        Updated by gaugau
*/
//USER CONFIGURATION

//Default number of pictures to process at a time when rebuilding thumbs or normals:
$defpicnum=45;

//END USER CONFIGURATION


define('IN_COPPERMINE', true);

require("include/config.inc.php");
require('include/init.inc.php');
require('include/picmgmt.inc.php');

pageheader($lang_search_php[0]);

starttable();

print '<tr><td>';
print '<center><h1>Util.mod</h1></center>';

if (!GALLERY_ADMIN_MODE) die('Access denied');

global $albumtbl, $picturetbl,$categorytbl,$usertbl;
$albumtbl = $CONFIG['TABLE_PREFIX'].'albums';
$picturetbl = $CONFIG['TABLE_PREFIX'].'pictures';
$categorytbl = $CONFIG['TABLE_PREFIX'].'categories';
$usertbl = $CONFIG['TABLE_PREFIX'].'users';

$action="";
$action=$_POST['action'];


MYSQL_CONNECT($CONFIG['dbserver'],$CONFIG['dbuser'],$CONFIG['dbpass']) or die("can't connect to mysql server");
MYSQL_SELECT_DB($CONFIG['dbname']);

function my_flush() {
        print str_repeat(" ", 4096);        // force a flush
}


function filenametotitle($delete) {
        $albumid=$_POST['albumid'];
        $parsemode=$_POST['parsemode'];
        global $picturetbl;

        $query = "SELECT * FROM $picturetbl WHERE aid = '$albumid'";
        $result = MYSQL_QUERY($query);
        $num=mysql_numrows($result);

        $i=0;
        while ($i < $num) {
              $filename=mysql_result($result,$i,"filename");
              $pid=mysql_result($result,$i,"pid");

               ////////////////////////////////////////////
              //ADD YOUR OWN PARSEMODES HERE //
              ///////////////////////////////////////////
              $pattern = "/(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.)(\d+)(.+)/";

              if ($delete == '0') {
                if ($parsemode==0) {
                   //REMOVE .JPG AND REPLACE _ WITH [ ]
                   $filename = substr($filename, 0, -4);
                     $newtitle = str_replace("_", " ", $filename);

                } else if ($parsemode==1)  {
                   //CHANGE 2003_11_23_13_20_20.jpg TO 23/11/2003 13:20
                     $newtitle = str_replace("%20", " ", $filename);
                   $replacement = "$5/$3/$1 $7:$9";
                   $newtitle = preg_replace($pattern, $replacement, $filename);

                } else if ($parsemode==2) {
                   //CHANGE 2003_11_23_13_20_20.jpg TO 11/23/2003 13:20
                     $newtitle = str_replace("%20", " ", $filename);
                   $replacement = "$3/$5/$1 $7:$9";
                   $newtitle = preg_replace($pattern, $replacement, $filename);

                } else if ($parsemode==3) {
                   //CHANGE 2003_11_23_13_20_20.jpg TO 13:20
                     $newtitle = str_replace("%20", " ", $filename);
                   $replacement = "$7:$9";
                   $newtitle = preg_replace($pattern, $replacement, $filename);
                }
              } else {
                $newtitle = '';
              }

              print "File: $filename title set to: $newtitle<br />";
              my_flush();

              $query = "UPDATE $picturetbl SET title='$newtitle' WHERE pid='$pid' ";
              MYSQL_QUERY($query);

              ++$i;
        }
}

function filloptions() {
      global $albumtbl, $picturetbl,$categorytbl,$usertbl;

      $query = "SELECT aid, category, IF(user_name IS NOT NULL, CONCAT('(', user_name, ') ',title), CONCAT(' - ', title)) AS title "."FROM $albumtbl AS a "."LEFT JOIN $usertbl AS u ON category = (".FIRST_USER_CAT." + user_id) "."ORDER BY category, title";
      $result = db_query($query);
      //$num=mysql_numrows($result);

      echo '<select size="1" name="albumid">';


     while ($row = mysql_fetch_array($result))
     {
         $sql = "SELECT name FROM $categorytbl WHERE cid = ".$row["category"];
         $result2 = db_query($sql);
         $row2 = mysql_fetch_array($result2);

          echo "<option value=\"" . $row["aid"] . "\">" . $row2["name"] . $row["title"] . "</option>\n";

       }

        echo '</select>';
        echo " <input type=\"submit\" value=\"go\" class=\"submit\" /></form>";

}

function updatethumbs() {
        global $picturetbl, $CONFIG;
        $phpself = $_SERVER['PHP_SELF'];
        $albumid=$_POST['albumid'];
        $updatetype=$_POST['updatetype'];
        $numpics=$_POST['numpics'];
        $startpic=0;
        $startpic=$_POST['startpic'];

        $query = "SELECT * FROM $picturetbl WHERE aid = '$albumid'";
        $result = MYSQL_QUERY($query);
        $totalpics=mysql_numrows($result);

        if ( $startpic == 0 ) {
        // 0 - numpics
        $num = $totalpics;

                // Over picture limit
        if ( $totalpics > $numpics ) $num = $startpic + $numpics;
        } else {
        // startpic - numpics
                $num = $startpic + $numpics;
                if ( $num > $totalpics ) $num = $totalpics;
        }

        $i=$startpic;
        while ($i < $num) {
             $image=$CONFIG['fullpath'].mysql_result($result,$i,"filepath").mysql_result($result,$i,"filename");

              if ( $updatetype == 0 || $updatetype == 2) {
                       $thumb = $CONFIG['fullpath'].mysql_result($result,$i,"filepath").$CONFIG['thumb_pfx'].mysql_result($result,$i,"filename");

                       if( resize_image($image, $thumb, $CONFIG['thumb_width'], $CONFIG['thumb_method']) ) {
                              print  "$thumb updated succesfully!<br />";
                              my_flush();
                       } else {
                              print "ERROR creating:$thumb<br />";
                              my_flush();
                       }
               }

               if ( $updatetype == 1 || $updatetype == 2) {
                      $normal= $CONFIG['fullpath'].mysql_result($result,$i,"filepath").$CONFIG['normal_pfx'].mysql_result($result,$i,"filename");

                      $imagesize = getimagesize($image);
                       if ( max($imagesize[0],$imagesize[1]) > $CONFIG['picture_width'] && $CONFIG['make_intermediate'] ) {

                           if ( resize_image($image, $normal, $CONFIG['picture_width'], $CONFIG['thumb_method']) ) {
                                      print  "$normal updated succesfully!<br />";
                                      my_flush();
                            } else {
                                      print "ERROR creating:$thumb<br />";
                                      my_flush();
                            }
                       }
               }

        ++$i;
        }
        $startpic=$i;

        if ( $startpic < $totalpics ) {
                    ?>
            <form action=<?php echo $phpself; ?> method="post">
                    <input type="hidden" name="action" value="continuethumbs" />
                    <input type="hidden" name="numpics" value="<?php echo $numpics?>" />
                    <input type="hidden" name="startpic" value="<?php echo $startpic?>" />
                    <input type="hidden" name="updatetype" value="<?php echo $updatetype?>" />
            <input type="hidden" name="albumid" value="<?php echo $albumid?>" />
            <input type="submit" value="Process more images" class="submit" /></form>
                    <?php
        }
}

function deleteorig() {
        global $picturetbl, $CONFIG;
        $albumid=$_POST['albumid'];

        $query = "SELECT * FROM $picturetbl WHERE aid = '$albumid'";
        $result = MYSQL_QUERY($query);
        $num=mysql_numrows($result);

        $i=0;
        while ($i < $num) {
               $pid=mysql_result($result,$i,"pid");
               $image=$CONFIG['fullpath'].mysql_result($result,$i,"filepath").mysql_result($result,$i,"filename");
               $normal= $CONFIG['fullpath'].mysql_result($result,$i,"filepath").$CONFIG['normal_pfx'].mysql_result($result,$i,"filename");
               $thumb = $CONFIG['fullpath'].mysql_result($result,$i,"filepath").$CONFIG['thumb_pfx'].mysql_result($result,$i,"filename");

        if ( file_exists($normal) ) {
                    $test = rename ($normal, $image);
            if ( $test == true ) {
                        $imagesize = getimagesize($image);
                        $image_filesize = filesize($image);
                        $total_filesize = $image_filesize + filesize($thumb);

                        $query = "UPDATE $picturetbl SET filesize='$image_filesize' WHERE pid='$pid' ";
                        MYSQL_QUERY($query);

                        $query = "UPDATE $picturetbl SET total_filesize='$total_filesize' WHERE pid='$pid' ";
                        MYSQL_QUERY($query);

                        $query = "UPDATE $picturetbl SET pwidth='{$imagesize[0]}' WHERE pid='$pid' ";
                        MYSQL_QUERY($query);

                        $query = "UPDATE $picturetbl SET pheight='{$imagesize[1]}' WHERE pid='$pid' ";
                        MYSQL_QUERY($query);
                        print 'The file: '.$normal.' was successfully used as main picture!<br>';
            } else {
                print 'Error renaming: '.$normal.'<br>to: '.$thumb;
            }

               } else {
            print 'The file: '.$normal.' was not found!<br>';
               }

               ++$i;
        }


}

$phpself = $_SERVER['PHP_SELF'];

//start output
print<<<EOT
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
          "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Thumbs and Title utility</title>
</head>
<style type="text/css">
.labelradio { cursor : hand;}
/*.accesskey {text-decoration:underline}*/
</style>
<body>
EOT;

if ( $action=='thumbs' ) {
        global $picturetbl, $CONFIG;

        print "<a href=$phpself>back to main</a><br />";
        print "<h2>Updating thumbnails and/or resized images, please wait...</h2>";

        updatethumbs();

        echo "<br /><a href=$phpself>back to menu</a>";

} else if ( $action=='continuethumbs' ) {
        print "<a href=$phpself>back to menu</a><br />";
        print "<h2>Continuing to update thumbnails and/or resized images...</h2>";

        updatethumbs();

        echo "<br /><a href=$phpself>back to menu</a>";

} else if ( $action=='title' ) {
        print "<a href=$phpself>back to menu</a><br />";
        print "<h2>Updating titles, please wait...</h2>";

        filenametotitle(0);

        echo "<br /><a href=$phpself >back to menu</a>";

} else if ( $action=='deltit' ) {
        print "<a href=$phpself>back to menu</a><br />";
        print "<h2>Deleting titles, please wait...</h2>";

        filenametotitle(1);

        echo "<br /><a href=$phpself >back to menu</a>";

} else if ( $action=='delnorm') {
        print "<a href=$phpself>back to menu</a><br />";
        print "<h2>Deleting originals and replasing them with sized images, please wait...</h2>";

        deleteorig();

        echo "<br /><a href=$phpself >back to menu</a>";

} else {
        ?>
        <table align=center border=0><td>
        Quick instructions:<br />
        1) Select action<br />
        2) Set parameters<br />
        3) Select album<br />
        4) Press GO<br /></td>
        </table>
        <table border=1 align=center>
        <tr><td>
        <form action=<?php echo $phpself; ?> method="post">
        <h2><input type="radio" name="action" checked="checked" value="thumbs" id="thumbs" class="nobg" />Update <label for="thumbs" accesskey="t" class="labelradio"><span class="accesskey">T</span>humbs and/or resized photos</label></h2>
        What should be updated:<br />
        <input type="radio" name="updatetype" value="0" id="thumb" class="nobg" /><label for="thumb" accesskey="t" class="labelradio">Only <span class="accesskey">t</span>humbnails</label><br />
        <input type="radio" name="updatetype" value="1" id="resized" class="nobg" /><label for="resized" accesskey="r" class="labelradio">Only <span class="accesskey">r</span>esized pictures </label><br />
        <input type="radio" name="updatetype" value="2" checked="checked" id="all" class="nobg" /><label for="all" accesskey="a" class="labelradio">Both thumbnails <span class="accesskey">a</span>nd resized pictures</label><br />
        Number of processed images pr. click
        <input type="text" name="numpics" value="<?php echo $defpicnum;?>" size="5" /><br />
        (Try setting this option lower if you experience timeout problems)<br /><br />
        </td></tr>

        <tr><td>
        <h2><input type="radio" name="action" value="title" id="title" class="nobg" /><label for="title" accesskey="F" class="labelradio"><span class="accesskey">F</span>ilename -> Picture title</label></h2>
        How should the filename be parsed:<br />
        <input type="radio" name="parsemode" checked="checked" value="0" id="remove" class="nobg" /><label for="remove" accesskey="s" class="labelradio">Remove the .jpg ending and replaces _ with spaces</label><br />
        <input type="radio" name="parsemode" value="1" id="euro" class="nobg" /><label for="euro" accesskey="e" class="labelradio">Parse 2003_11_23_13_20_20.jpg to 23/11/2003 13:20</label><br />
        <input type="radio" name="parsemode" value="2" id="us" class="nobg" /><label for="us" accesskey="u" class="labelradio">Parse 2003_11_23_13_20_20.jpg to 11/23/2003 13:20</label><br />
        <input type="radio" name="parsemode" value="3" id="hour" class="nobg" /><label for="hour" accesskey="h" class="labelradio">Parse 2003_11_23_13_20_20.jpg to 13:20</label><br /><br />
        </td></tr>

        <tr><td>
        <h2><input type="radio" name="action" value="deltit" id="deltit" class="nobg" /><label for="deltit" accesskey="D" class="labelradio"><span class="accesskey">D</span>elete picture titles</label><br /></h2><br />
        </td></tr>

        <tr><td>
        <h2><input type="radio" name="action" value="delnorm" id="delnorm" class="nobg" />D<label for="delnorm" accesskey="e" class="labelradio"><span class="accesskey">e</span>lete original size photos</label><br /></h2>
        <tab>Deletes the original images replacing them with the sized versions<br />
        </td></tr>

        <tr><td>
        <h2>Select album</h2>
        <?php filloptions(); ?>
        </td></tr>
        </table>
<?php
}
print '</td></tr>';
endtable();
echo 'Util.mod 1.3 - Created by David Alberg Holm';
pagefooter();
ob_end_flush();
?>
