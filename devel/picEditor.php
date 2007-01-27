<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

// embedded images
function cornerleft()
  {
    header("Content-type: image/gif");
    header("Content-length: 290");
    echo base64_decode(
'R0lGODlhGQAZAMQAAP///+zu8d3h5tXb4dbW1s/V3czU2sXN1c'.
'PK0cPExMHCw7y+wLW1tbC2va6yuKurrJmZmf///wAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BA'.
'UUABEALAAAAAAZABkAAAWfICCOZGmeaHoqysI8CZG4sEzHSZ6I'.
'CeJEEULg8AsOi0IgULRACgoNIOEZDQoGyoiIAUwECkUvuBvAZk'.
'UPI1F6ZBuyS0Ds6RxbzXCR0C4Ol+FKPAdVQmtGb4BxTVJ0jHiJ'.
'W2R8f4mBAGmFSAGIlXFzdlOPnXpffqKjcoNunYBMTqeskRFesL'.
'GXh6yVPKG5ugBCtb08vbYJxKjGx5ByyokhADs='.
'');
}
function cornerright()
  {
    header("Content-type: image/gif");
    header("Content-length: 292");
    echo base64_decode(
'R0lGODlhGQAZAMQAAP///+zv8t3h5tXc5NbW1s/V3dHS08XN1c'.
'PK0cLDw8HCw7y+wLW1ta+0u66yuKurrJmZmf///wAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BA'.
'UUABEALAAAAAAZABkAAAWhYCSOZGlGCQCc7JmubSy+skzX5xAY'.
'Km4OAsLNJyrsIo8eMaJTiBhKH9AgciyiNSM10jgMZc2qFtuaih'.
'qF4JelPR+OSVg54Iw4jIknuWTmprdWeyNtXG9bXWsjYXZ4YjuC'.
'fWgCh2lCe4RdR4VwZIt3AXmMoHpyTAOUk2d/Z1elAQRVb7B2sm'.
'cILwm5CQYJDwwLu72/wb7ALyrIycrLzM3OyyEAOw=='.
'');
}

// image calls
if (isset($_GET['img'])) {
  if ($_GET['img']=="left") {cornerleft();exit;}
}
if (isset($_GET['img'])) {
  if ($_GET['img']=="right") {cornerright();exit;}
}


define('IN_COPPERMINE', true);
define('EDITPICS_PHP', true);

require('include/init.inc.php');
require('include/picmgmt.inc.php');

define('IMG_DIR', $CONFIG['fullpath'].'edit/');

if (isset($_GET['id'])) {
        $pid = (int)$_GET['id'];
} elseif (isset($_POST['id'])) {
        $pid = (int)$_POST['id'];
} else {
        $pid = -1;
}
if ($pid > 0){

        $result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_PICTURES']} WHERE pid = '$pid'");
        $CURRENT_PIC = mysql_fetch_array($result);
                if (!(GALLERY_ADMIN_MODE || ($CONFIG['users_can_edit_pics'] && $CURRENT_PIC['owner_id'] == USER_ID)) || !USER_ID) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
        mysql_free_result($result);
        $pic_url = get_pic_url($CURRENT_PIC,'fullsize');
}

//Garbage collection run at an probability of 25% and delete all files older than one hour
if (rand(1,100) < 25){
        $d = opendir(IMG_DIR);
        while ($file = readdir($d)){
                if (is_file(IMG_DIR.$file) && ((time() - filemtime(IMG_DIR.$file))/60) > 60 && $file !="index.html" && $file !="no_FTP-uploads_into_this_folder!"){
                        @unlink(IMG_DIR.$file);
                }

        }
}

//Include the proper class for image Object
if ($CONFIG['thumb_method']=="gd2"){
           require("include/imageObjectGD.class.php");
}elseif ($CONFIG['thumb_method']=="im"){
        require("include/imageObjectIM.class.php");
}else{
        die ($lang_editpics_php['error_editor_class']);
}

//////////////////////////////////Main script//////////////////////////////////////
// PREVENTING CACHING
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                                                     // always modified
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");                          // HTTP/1.0

// PAGE INIT
if (!$img_dir) $img_dir = IMG_DIR;


if ($_GET['id']){
   //Copy the Image file to the editing directory
   if (copy($CONFIG['fullpath'].$CURRENT_PIC['filepath'].$CURRENT_PIC['filename'],$img_dir.$CURRENT_PIC['filename']))
   $newimage = $CURRENT_PIC['filename'];
}else if(!isset($newimage)){
   $newimage = $_POST['newimage'];
}

   if ($newimage){
      $imgObj = new imageObject($img_dir,$newimage);
      if ($_POST['quality']){
                      $imgObj->quality = $_POST['quality'];
        }

      if ($imgObj->imgRes){
          if ($_POST['clipval'] && $_POST['cropping']==true){
                  $imgObj = $imgObj->cropImage($_POST['clipval']);
          }

          if ($_POST['angle']<>0){
                  $imgObj = $imgObj->rotateImage($_POST['angle']);
          }


      }
      $newimage = $imgObj->filename;
   }//   newimage

   if(isset($_POST["save"])) {

                $width=$imgObj->width;
        $height=$imgObj->height;
                $normal = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CONFIG['normal_pfx'] . $CURRENT_PIC['filename'];
                $thumbnail = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CONFIG['thumb_pfx'] . $CURRENT_PIC['filename'];
                $filesize = @filesize($img_dir.$newimage);

          //Full image replace
          copy($img_dir.$newimage,$CONFIG['fullpath'].$CURRENT_PIC['filepath'].$CURRENT_PIC['filename'])   ;

          // Normal image resized and replace, use the CPG resize method instead of the object resizeImage
          // as using the object resizeImage will make the final display of image to be a thumbnail in the editor

          if (max($width, $height) > $CONFIG['picture_width'] && $CONFIG['make_intermediate']) {
                resize_image($img_dir.$newimage, $normal, $CONFIG['picture_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use']);
          } else {
                @unlink($normal);
          }

          //thumbnail resized and replace
               resize_image($img_dir.$newimage, $thumbnail, $CONFIG['thumb_width'], $CONFIG['thumb_method'], $CONFIG['thumb_use']);
                       $total_filesize = $filesize + (file_exists($normal) ? filesize($normal) : 0) + filesize($thumbnail);

          //Update the image size in the DB
          cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']}
                          SET pheight = $height,
                            pwidth = $width,
                                                        filesize = $filesize,
                                                        total_filesize = $total_filesize
                          WHERE pid = '$pid'");

          $message = sprintf($lang_editpics_php['success_picture'], '<a href="#" onclick="self.close();">', '</a>');

   }

   if(isset($_POST["save_thumb"])) {

        $width=$imgObj->width;
        $height=$imgObj->height;
                $normal = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CONFIG['normal_pfx'] . $CURRENT_PIC['filename'];
                $thumbnail = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CONFIG['thumb_pfx'] . $CURRENT_PIC['filename'];
                $currentPic = $CONFIG['fullpath'] . $CURRENT_PIC['filepath'] . $CURRENT_PIC['filename'];

        //Calculate the thumbnail dimensions
        if ($CONFIG['thumb_use'] == 'ht') {
                $ratio = $height / $CONFIG['thumb_width'] ;
        } elseif ($CONFIG['thumb_use'] == 'wd') {
                $ratio = $width / $CONFIG['thumb_width'] ;
        } else {
                $ratio = max($width, $height) / $CONFIG['thumb_width'] ;
        }
        $ratio = max($ratio, 1.0);
        $dstWidth = (int)($width / $ratio);
        $dstHeight = (int)($height / $ratio);
        $imgObj->quality = (int)($_POST['quality']);
        $imgObj = $imgObj->resizeImage($dstWidth,$dstHeight);
        $newimage = $imgObj->filename;

        copy($img_dir.$newimage,$CONFIG['fullpath'].$CURRENT_PIC['filepath'].$CONFIG['thumb_pfx'].$CURRENT_PIC['filename'])   ;

        $total_filesize = filesize($currentPic) + (file_exists($normal) ? filesize($normal) : 0) + filesize($thumbnail);

          //Update the image size in the DB
          cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET total_filesize = $total_filesize WHERE pid = '$pid'");


        $message = sprintf($lang_editpics_php['success_thumb'], '<a href="#" onclick="self.close();">', '</a>');

   }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
  <meta http-equiv="imagetoolbar" content="no" />
  <meta http-equiv="content-type" content="text/html; charset=<?php echo $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'] ?>" />
    <title><?php echo $lang_editpics_php['crop_title'] ?></title>
    <?php if($imgObj){?>
    <script type="text/javascript">
    /****************************************************************************
    DHTML library from DHTMLCentral.com
    *   Copyright (C) 2001 Thomas Brattli 2001
    *   This script was released at DHTMLCentral.com
    *   Visit for more great scripts!
    *   This may be used and changed freely as long as this msg is intact!
    *   We will also appreciate any links you could give us.
    *
    *   Made by Thomas Brattli 2001
    ***************************************************************************/
    //Browsercheck (needed) ***************
    function lib_bwcheck(){
      this.ver=navigator.appVersion
      this.agent=navigator.userAgent
      this.dom=document.getElementById?1:0
      this.opera5=this.agent.indexOf("Opera 5")>-1
      this.ie5=(this.ver.indexOf("MSIE 5")>-1 && this.dom && !this.opera5)?1:0;
      this.ie6=(this.ver.indexOf("MSIE 6")>-1 && this.dom && !this.opera5)?1:0;
      this.ie4=(document.all && !this.dom && !this.opera5)?1:0;
      this.ie=this.ie4||this.ie5||this.ie6
      this.mac=this.agent.indexOf("Mac")>-1
      this.ns6=(this.dom && parseInt(this.ver) >= 5) ?1:0;
      this.ns4=(document.layers && !this.dom)?1:0;
      this.bw=(this.ie6||this.ie5||this.ie4||this.ns4||this.ns6||this.opera5)
      return this
    }
    bw=new lib_bwcheck() //Browsercheck object

    //Debug function ******************
    function lib_message(txt){alert(txt); return false}

    //Lib objects  ********************
    function lib_obj(obj,nest){
      if(!bw.bw) return lib_message('Old browser')
      nest=(!nest) ? "":'document.'+nest+'.'
      this.evnt=bw.dom? document.getElementById(obj):
        bw.ie4?document.all[obj]:bw.ns4?eval(nest+"document.layers." +obj):0;
      if(!this.evnt) return lib_message('The layer does not exist ('+obj+')'
        +'- \nIf your using Netscape please check the nesting of your tags!')
      this.css=bw.dom||bw.ie4?this.evnt.style:this.evnt;
      this.ref=bw.dom||bw.ie4?document:this.css.document;
      this.x=parseInt(this.css.left)||this.css.pixelLeft||this.evnt.offsetLeft||0;
      this.y=parseInt(this.css.top)||this.css.pixelTop||this.evnt.offsetTop||0
      this.w=this.evnt.offsetWidth||this.css.clip.width||
        this.ref.width||this.css.pixelWidth||0;
      this.h=this.evnt.offsetHeight||this.css.clip.height||
        this.ref.height||this.css.pixelHeight||0
      this.c=0 //Clip values
      if((bw.dom || bw.ie4) && this.css.clip) {
      this.c=this.css.clip; this.c=this.c.slice(5,this.c.length-1);
      this.c=this.c.split(' ');
      for(var i=0;i<4;i++){this.c[i]=parseInt(this.c[i])}
      }
      this.ct=this.css.clip.top||this.c[0]||0;
      this.cr=this.css.clip.right||this.c[1]||this.w||0
      this.cb=this.css.clip.bottom||this.c[2]||this.h||0;
      this.cl=this.css.clip.left||this.c[3]||0
      this.obj = obj + "Object"; eval(this.obj + "=this")
      return this
    }

    //Moving object to **************
    lib_obj.prototype.moveIt = function(x,y){
      this.x=x;this.y=y; this.css.left=x+"px";this.css.top=y+"px";
    }

    //Moving object by ***************
    lib_obj.prototype.moveBy = function(x,y){
      this.css.left=this.x+=x; this.css.top=this.y+=y
    }

    //Showing object ************
    lib_obj.prototype.showIt = function(){this.css.visibility="visible"}

    //Hiding object **********
    lib_obj.prototype.hideIt = function(){this.css.visibility="hidden"}

    //Changing backgroundcolor ***************
    lib_obj.prototype.bg = function(color){
        if(bw.opera) this.css.background=color
        else if(bw.dom || bw.ie4) this.css.backgroundColor=color
        else if(bw.ns4) this.css.bgColor=color
    }

    //Writing content to object ***
    lib_obj.prototype.writeIt = function(text,startHTML,endHTML){
        if(bw.ns4){
        if(!startHTML){startHTML=""; endHTML=""}
          this.ref.open("text/html");
        this.ref.write(startHTML+text+endHTML);
        this.ref.close()
        }else this.evnt.innerHTML=text
    }

    //Clipping object to ******
    lib_obj.prototype.clipTo = function(t,r,b,l,setwidth){
      this.ct=t; this.cr=r; this.cb=b; this.cl=l
      if(bw.ns4){
        this.css.clip.top=t;this.css.clip.right=r
        this.css.clip.bottom=b;this.css.clip.left=l
      }else{
        if(t<0)t=0;if(r<0)r=0;if(b<0)b=0;if(b<0)b=0
        this.css.clip="rect("+t+"px"+","+r+"px"+","+b+"px"+","+l+"px"+")";
        if(setwidth){this.css.pixelWidth=this.css.width=r+"px";
        this.css.pixelHeight=this.css.height=b+"px"}
      }
    }

    //Clipping object by ******
    lib_obj.prototype.clipBy = function(t,r,b,l,setwidth){
      this.clipTo(this.ct+t,this.cr+r,this.cb+b,this.cl+l,setwidth)
    }

    //Clip animation ************
    lib_obj.prototype.clipIt = function(t,r,b,l,step,fn,wh){
      tstep=Math.max(Math.max(Math.abs((t-this.ct)/step),Math.abs((r-this.cr)/step)),
        Math.max(Math.abs((b-this.cb)/step),Math.abs((l-this.cl)/step)))
      if(!this.clipactive){
        this.clipactive=true; if(!wh) wh=0; if(!fn) fn=0
        this.clip(t,r,b,l,(t-this.ct)/tstep,(r-this.cr)/tstep,
          (b-this.cb)/tstep,(l-this.cl)/tstep,tstep,0, fn,wh)
      }
    }
    lib_obj.prototype.clip = function(t,r,b,l,ts,rs,bs,ls,tstep,astep,fn,wh){
      if(astep<tstep){
        if(wh) eval(wh);
        astep++
        this.clipBy(ts,rs,bs,ls,1);
        setTimeout(this.obj+".clip("+t+","+r+","+b+","+l+","+ts+","+rs+","
          +bs+","+ls+","+tstep+","+astep+",'"+fn+"','"+wh+"')",50)
      }else{
        this.clipactive=false; this.clipTo(t,r,b,l,1);
        if(fn) eval(fn)
      }
    }

    //Slide animation ***********
    lib_obj.prototype.slideIt = function(endx,endy,inc,speed,fn,wh){
      if(!this.slideactive){
        var distx = endx - this.x;
        var disty = endy - this.y
        var num = Math.sqrt(Math.pow(distx,2)+Math.pow(disty,2))/inc
        var dx = distx/num; var dy = disty/num
        this.slideactive = 1;
        if(!wh) wh=0; if(!fn) fn=0
        this.slide(dx,dy,endx,endy,speed,fn,wh)
        }
    }
    lib_obj.prototype.slide = function(dx,dy,endx,endy,speed,fn,wh) {
      if(this.slideactive&&
      (Math.floor(Math.abs(dx))<Math.floor(Math.abs(endx-this.x))||
        Math.floor(Math.abs(dy))<Math.floor(Math.abs(endy-this.y)))){
        this.moveBy(dx,dy);
        if(wh) eval(wh)
        setTimeout(this.obj+".slide("+dx+","+dy+","+endx+","+endy+","+speed+",'"
        +fn+"','"+wh+"')",speed)
      }else{
        this.slideactive = 0;
        this.moveIt(endx,endy);
        if(fn) eval(fn)
      }
    }

    //Circle animation ****************
    lib_obj.prototype.circleIt = function(rad,ainc,a,enda,xc,yc,speed,fn) {
      if((Math.abs(ainc)<Math.abs(enda-a))) {
        a += ainc
        var x = xc + rad*Math.cos(a*Math.PI/180)
        var y = yc - rad*Math.sin(a*Math.PI/180)
        this.moveIt(x,y)
        setTimeout(this.obj+".circleIt("+rad+","+ainc+","+a+","+enda+","
          +xc+","+yc+","+speed+",'"+fn+"')",speed)
      }else if(fn&&fn!="undefined") eval(fn)
    }

    //Document size object ********
    function lib_doc_size(){
      this.x=0;this.x2=bw.ie && document.body.offsetWidth-20||innerWidth||0;
      this.y=0;this.y2=bw.ie && document.body.offsetHeight-5||innerHeight||0;
      if(!this.x2||!this.y2) return message('<?php print $lang_editpics_php['error_document_size']; ?>')
      this.x50=this.x2/2;this.y50=this.y2/2;
      return this;
    }

    //Drag drop functions start *******************
    dd_is_active=0; dd_obj=0; dd_mobj=0
    function lib_dd(){
      dd_is_active=1
      if(bw.ns4){
        document.captureEvents(Event.MOUSEMOVE|Event.MOUSEDOWN|Event.MOUSEUP)
      }
      document.onmousemove=lib_dd_move;
      document.onmousedown=lib_dd_down
      document.onmouseup=lib_dd_up
    }
    lib_obj.prototype.dragdrop = function(obj){
      if(!dd_is_active) lib_dd()
      this.evnt.onmouseover=new Function("lib_dd_over("+this.obj+")")
      this.evnt.onmouseout=new Function("dd_mobj=0")
      if(obj) this.ddobj=obj
    }
    lib_obj.prototype.nodragdrop = function(){
      this.evnt.onmouseover=""; this.evnt.onmouseout=""
      dd_obj=0; dd_mobj=0
    }
    //Drag drop event functions
    function lib_dd_over(obj){dd_mobj=obj}
    function lib_dd_up(e){dd_obj=0}

    var MouseX = 0;
    var MouseY = 0;

    function lib_dd_down(e){ //Mousedown

    if(dd_mobj){
        x=(bw.ns4 || bw.ns6)?e.pageX:event.x||event.clientX
        y=(bw.ns4 || bw.ns6)?e.pageY:event.y||event.clientY
        dd_obj=dd_mobj
        dd_obj.clX=x-dd_obj.x
        dd_obj.clY=y-dd_obj.y
        }

    }
    function lib_dd_move(e,y,rresize){ //Mousemove
      x=(bw.ns4 || bw.ns6)?e.pageX:event.x||event.clientX
      y=(bw.ns4 || bw.ns6)?e.pageY:event.y||event.clientY
      if(dd_obj){
        nx=x-dd_obj.clX; ny=y-dd_obj.clY
        if(dd_obj.ddobj) dd_obj.ddobj.moveIt(nx,ny)
        else dd_obj.moveIt(nx,ny)
      }
      if(!bw.ns4) return false
    }
    //Drag drop functions end *************

    // page functions
    function resetClip(){
      newleft = (screen.width - <?php echo $imgObj->width?>)/2;
      if (newleft<0)newleft = 0;
      objimg.moveIt(newleft,100);
      objimg.clipTo(0,<?php echo $imgObj->width?>,<?php echo $imgObj->height?>,0,1);
      objlefttop.moveIt(newleft-2,97);
      objrightbottom.moveIt(newleft+<?php echo $imgObj->width?>-23,100+<?php echo $imgObj->height?>-23);
      document.mainform.clipval.value = "";
      }
    function libinit(){
      page=new lib_doc_size();

      objlefttop=new lib_obj('lefttopdiv');
      objlefttop.dragdrop();

      objrightbottom=new lib_obj('rightbottomdiv');
      objrightbottom.dragdrop();

      objimg=new lib_obj('imgdiv');

      resetClip();
      }

    function showPreview(){
    if (objlefttop.y < objimg.y+2 ){
            objlefttop.y = objimg.y+2 ;
        objlefttop.moveIt(objlefttop.x, objimg.y);
    }
    if (objlefttop.x < objimg.x ){
            objlefttop.x = objimg.x ;
        objlefttop.moveIt(objimg.x, objlefttop.y );
    }

    objimg.clipTo(objlefttop.y-objimg.y+2, objrightbottom.x-objimg.x+23 , objrightbottom.y-objimg.y+23, objlefttop.x-objimg.x+2,1);
    document.mainform.clipval.value = objimg.ct + ',' + objimg.cr + ',' + objimg.cb + ',' + objimg.cl;
    }

    function showCorners(check){
    if (check.checked){
        objlefttop.showIt();
        objrightbottom.showIt();
       }else{
        objlefttop.hideIt();
        objrightbottom.hideIt();
        resetClip();
       }
    }
    </script>
<?php }?>
    <style type="text/css">
    #lefttopdiv{
    position:absolute;
    background-image:url(<?php echo $_SERVER['PHP_SELF']?>?img=left);
    left:0px;
    top:100px;
    height:25px;
    width:25px;
    z-index:8;
    cursor:move;
    visibility:hidden;
    }
    #rightbottomdiv{
    position:absolute;
    background-image:url(<?php echo $_SERVER['PHP_SELF']?>?img=right);
    left:0px;
    top:225px;
    height:25px;
    width:25px;
    z-index:9;
    cursor:move;
    visibility:hidden;
    }
    #imgdiv{
    position:absolute;
    top:100px;
    width:<?php echo $imgObj->width?>px;
    height:<?php echo $imgObj->height?>px;
    text-align:center;
    margin-left:auto;
    margin-right:auto;
    z-index:0;
    <?php if (!$imgObj->imgRes) print "visibility:hidden;\n";?>
    }
    </style>
    <link rel="stylesheet" type="text/css" href="themes/<?php echo $CONFIG['theme'];?>/style.css" />
</head>

<body>
<?php if ($imgObj) print "<script type=\"text/javascript\">addonload('libinit()');</script>";?>

<form name="mainform" id="cpgform" method="post" enctype="multipart/form-data" action="picEditor.php">

<input type="hidden" name="clipval" value="" />
<input type="hidden" name="newimage" value="<?php print $newimage ; ?>" />
<input type="hidden" name="img_dir" value="<?php print $img_dir ; ?>" />
<input type="hidden" name="id" value="<?php print (isset($_GET['id']))?$_GET['id']:$_POST['id']; ?>" />

<? starttable("100%", $lang_editpics_php['crop_title'], 3); ?>
<tr>
<td>
<table border="0" cellspacing="2" cellpadding="2" class="maintableb" width="100%" >
  <tr>
<?php if ($CONFIG['thumb_method']='im' ||($CONFIG['thumb_method']='gd2' && function_exists("imagerotate"))){ ?>


   <td>
      <select name="angle" class="listbox">
        <option value="0" selected="selected"><?php print $lang_editpics_php['rotate']; ?></option>
        <option value="90">-90&#176;</option>
        <option value="180">180&#176;</option>
        <option value="270">+90&#176;</option>
      </select>
   </td>
<?php } ?>
   <!--
   <td >
    <input valign="bottom" type="checkbox" class="checkbox" name="mirror" id="mirror" value="true" />
    <label for="mirror" class="clickable_option">
      <?php print $lang_editpics_php['mirror']; ?>
    </label>
    </td>




   <td>
       <select name="rescale" class="listbox">
         <option value=""><?php print $lang_editpics_php['scale']; ?></option>
<?php
for ($i=0.1;$i<=2.01;$i=$i+0.01) {
print '         <option value="'.$i.'">';
print $i*100;
print '%</option>';
print "\n";
}
?>
       </select>
   </td>
   <td>
     <?php print $lang_editpics_php['or'];  ?>
   </td>
   <td>
       <select name="widthheight" class="listbox" >
           <option value="width"><?php print $lang_editpics_php['new_width'];  ?></option>
           <option value="height"><?php print $lang_editpics_php['new_height'];  ?></option>
       </select>
   </td>
   <td>
       <input type="text" size="3" name="newsize" id="newsize" class="textinput" /> px
   </td>
   -->
   <td>
     <input type="checkbox" class="checkbox" name="cropping" id="cropping" value="true" onclick="showCorners(this)" />
     <label for="cropping" class="clickable_option">
       <?php print $lang_editpics_php['enable_clipping'];  ?>
     </label>
   </td>
   <td title="Less quality creates a smaller file, default is 80%" >
        <select id="quality" name="quality" class="listbox" >
        <option value="80" selected="selected"><?php print $lang_editpics_php['jpeg_quality'];  ?></option>
        <?php
        for ( $counter = 10; $counter <= 100; $counter += 5) {
            $selected = ($imgObj->quality == $counter) ? 'selected="selected" ' : '';
            echo "<option value=\"$counter\" $selected>$counter</option>";
        }
        ?>
        </select>
   </td>
   <td><input type="submit" name="submit" class="button" value=" <?php echo $lang_editpics_php['preview'] ?> " /></td>
   <td><input type="submit" name="save" class="button" value=" <?php echo $lang_editpics_php['save'] ?> " /></td>
   <td><input type="submit" name="save_thumb" class="button" value=" <?php echo $lang_editpics_php['save_thumb'] ?> " /></td>
 </tr>
</table>
</td>
</tr>
<?php endtable(); ?>

<div id="lefttopdiv" onclick="showPreview(); return false;">
</div>

<div id="rightbottomdiv" onclick="showPreview(); return false;">
</div>

<?php if ($message){ ?>
<h1 align=center><?php echo $message?></h1>
<?php } ?>

<div id="imgdiv">
<?php if ($imgObj){ ?>
<img src="<?php echo $imgObj->directory.$imgObj->filename?>?<?php echo rand(); ?>" <?php echo $imgObj->string; ?> style="vertical-align: middle;" alt="" />
<?php } ?>
</div>
</form>
</body>
</html>