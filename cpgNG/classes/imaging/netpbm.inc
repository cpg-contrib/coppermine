<?php

class Graphic {

  function _process($src_file, &$dest_info, &$imginfo)
  {
    if (!$imginfo) $imginfo = getimagesize($src_file);
    if (!$imginfo) return false;
    global $MAIN_CFG;
    $pbmpath = $MAIN_CFG['imaging']['pbmpath'];
    if (eregi('win',$_ENV['OS'])) {
        $src_file = strtr($src_file, '/', '\\'); //'
    }
    $src_file = escapeshellarg($src_file);
    $commands = array();
    switch ($imginfo[2]){
        case IMAGETYPE_GIF:  $op_in = 'giftopnm';  break;
        case IMAGETYPE_JPEG: $op_in = 'jpegtopnm'; break;
        case IMAGETYPE_PNG:  $op_in = 'pngtopnm';  break;
    }
    $commands[] = $pbmpath.$op_in." $src_file";
    $commands[] = $pbmpath."pnmscale -xsize={$dest_info[0]} -ysize={$dest_info[1]}";
    if (!isset($dest_info[2])) { $dest_info[2] = $imginfo[2]; }
    switch ($dest_info[2]){
        case IMAGETYPE_GIF:
            $commands[] = $pbmpath."ppmquant 255";
            $commands[] = $pbmpath."ppmtogif";
            break;

        case IMAGETYPE_JPEG:
            $commands[] = $pbmpath."pnmtojpeg -quality={$dest_info['quality']}";
//            $commands[] = $pbmpath."ppmtojpeg -quality={$dest_info['quality']}";
            break;

        case IMAGETYPE_PNG:
            $commands[] = $pbmpath."pnmtopng";
            break;
    }
    return implode('|', $commands);
  }

  function resize($src_file, $dest_info, $dest_file, $imginfo=false)
  {
    $cmd = Graphic::_process($src_file, $dest_info, $imginfo);
    if (!$imginfo) return -1;
    $dest_file = image_file_to_extension($dest_file, $dest_info[2]);
    if (eregi('win',$_ENV['OS'])) {
        $im_dest_file = str_replace('%', '%%', ('"'.strtr($dest_file, '/', '\\').'"')); //"
    } else {
        $im_dest_file = str_replace('%', '%%', escapeshellarg($dest_file));
    }
    exec($cmd." > $im_dest_file", $output, $retval);
    if ($retval) {
        cpg_error($cmd."<br />retval: $retval<br />".print_r($output, true));
    }
    return $dest_file;
  }

  function show($src_file, $dest_info)
  {
    $cmd = Graphic::_process($src_file, $dest_info, $imginfo);
    if (!$imginfo) return -1;
    header('Content-type: '.image_type_to_mime_type($dest_info[2]));
    passthru($cmd.' 2>&1', $retval);
    if ($retval) {
        echo "<br /><br />".$cmd."<br />retval: $retval<br />";
    }
    exit;
  }
}
