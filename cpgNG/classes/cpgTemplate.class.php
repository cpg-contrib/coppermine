<?php
define ("SMARTY_DIR", "libs/smarty/");
include(SMARTY_DIR . 'Smarty.class.php');
class cpgTemplate extends Smarty {
  var $template_dir = "templates/";
  var $compile_check = true;
  var $debugging = false;
  var $force_compile = true;

  function getThumbnailHTML($thumbList)
  {
    global $CONFIG;

    $this->assign("thumbcols", $CONFIG["thumbcols"]);
    $this->assign("thumbrows", $CONFIG["thumbrows"]);
    $this->assign("colWidth", 100/$CONFIG["thumbcols"]);
    $this->assign("thumbList", $thumbList);

    return $this->fetch($CONFIG["theme"]."/common/thumbnail.html");
  }

  function getBreadcrumbHTML($breadcrumb)
  {
    global $lang_list_categories,$CONFIG;
    $this->assign("breadcrumb", $breadcrumb);
    $this->assign("lang_list_categories", $lang_list_categories);

    return $this->fetch($CONFIG["theme"]."/common/breadcrumb.html");
  }

  function getDisplayImageHTML($picData, $picCount, $pos, $page, $displayPicInfo, $votes, $comments, $commentBox, $picInfo, $filmStrip, $slideshowTgt)
  {
    global $CONFIG, $CURRENT_ALBUM_DATA, $lang_img_nav_bar, $lang_rate_pic, $lang_display_comments, $lang_picinfo, $lang_display_image_php;

    $this->assign("picData", $picData);
    $this->assign("picCount", $picCount);
    $this->assign("comments", $comments);
    $this->assign("picInfo", $picInfo);
    $this->assign("commentBox", $commentBox);
    $this->assign("page", $page);
    $this->assign("pos", $pos);
    $this->assign("filmStrip", $filmStrip);
    $this->assign("displayPicInfo", $displayPicInfo);
    $this->assign("votes", $votes);
    $this->assign("slideshowTgt", $slideshowTgt);
    $this->assign("lang_img_nav_bar", $lang_img_nav_bar);
    $this->assign("lang_display_comments", $lang_display_comments);
    $this->assign("lang_rate_pic", $lang_rate_pic);
    $this->assign("lang_display_image_php", $lang_display_image_php);
    $this->assign("lang_picinfo", $lang_picinfo);

    return $this->fetch($CONFIG["theme"]."/common/displayimage.html");
  }

  function getIndexHTML($indexData)
  {
    global $CONFIG;
    $this->assign("indexData", $indexData);

    return $this->fetch($CONFIG["theme"]."/common/index.html");
  }
}
?>