<?php
define ("SMARTY_DIR" , "libs/smarty/");
include(SMARTY_DIR . 'Smarty.class.php');
class cpgTemplate extends Smarty{
  var $template_dir = "templates/";
  var $compile_dir = "templates_c/";
  var $compile_check = true;
  var $debugging = false;
  var $force_compile = true;

  //function getThumbnailHTML($thumbList, $nbThumb, $album_name, $aid, $cat, $page, $total_pages, $sort_options, $display_tabs, $mode = 'thumb')
  function getThumbnailHTML($thumbList)
  {
    global $CONFIG, $lang_errors;

    $this->assign("thumbcols", $CONFIG["thumbcols"]);
    $this->assign("thumbrows", $CONFIG["thumbrows"]);
    $this->assign("colWidth", 100/$CONFIG["thumbcols"]);
    $this->assign("thumbList", $thumbList);
    $this->assign("lang_errors", $lang_errors);

    return $this->fetchHTML("common/thumbnail.html");
  }

  function getBreadcrumbHTML($breadcrumb)
  {
    global $lang_list_categories,$CONFIG;
    $this->assign("breadcrumb", $breadcrumb);
    $this->assign("lang_list_categories", $lang_list_categories);

    return $this->fetchHTML("common/breadcrumb.html");
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

    return $this->fetchHTML("common/displayimage.html");
  }

  function getIndexHTML($indexData)
  {
    global $CONFIG;
    $this->assign("indexData", $indexData);

    return $this->fetchHTML("common/index.html");
  }

  function display($fileName)
  {
    global $USER, $USER_DATA, $ALBUM_SET, $CONFIG, $cpg_time_start, $query_stats, $queries, $lang_cpg_debug_output, $cpgdebugger;
    /**
     * If debug is ON, assign the debug data to smarty
     */
    if (isset($CONFIG['debug_mode']) && (($CONFIG['debug_mode']==1) || ($CONFIG['debug_mode']==2) )) {
      $this->assign("showDebug", 1);
      $this->assign("queries", $queries);
      $this->assign("USER", $USER);
      $this->assign("USER_DATA", $USER_DATA);
      $this->assign("lang_cpg_debug_output", $lang_cpg_debug_output);
      $this->assign("report", $cpgdebugger->stop());
    } else {
      $this->assign("showDebug", 0);
    }
    parent::display($CONFIG["theme"]."/".$fileName);
  }

  function fetchHTML($fileName)
  {
    global $CONFIG;
    if (file_exists($CONFIG["theme"]."/".$fileName)) {
      return $this->fetch($CONFIG["theme"]."/".$fileName);
    } else {
      return $this->fetch($fileName);
    }
  }
}
?>
