<?php

class Graphic {

  function resize($src_file, $dest_info, $dest_file, $imginfo=false)
  {
    global $MAIN_CFG;
    $impath = $MAIN_CFG['imaging']['impath'];

    if (!$imginfo) $imginfo = getimagesize($src_file);
    if (!$imginfo) return -1;
    
    if (!isset($dest_info[2])) { $dest_info[2] = $imginfo[2]; }
    $dest_file = image_file_to_extension($dest_file, $dest_info[2]);
    if (!isset($dest_info['im_options'])) { $dest_info['im_options'] = ''; }
    if (!isset($dest_info['quality']) || intval($dest_info['quality']) < 10) $dest_info['quality'] = 85;
    $output = array();
    if (eregi('win',$_ENV['OS'])) {
        $src_file = '"'.strtr($src_file, '/', '\\').'"'; //"
        $im_dest_file = str_replace('%', '%%', ('"'.strtr($dest_file, '/', '\\').'"')); //"
    } else {
        $src_file = escapeshellarg($src_file);
        $im_dest_file = str_replace('%', '%%', escapeshellarg($dest_file));
    }
    $cmd = $MAIN_CFG['imaging']['impath']."convert -quality {$dest_info['quality']} {$dest_info['im_options']} -geometry {$dest_info[0]}x{$dest_info[1]} $src_file $im_dest_file";
    exec($cmd.' 2>&1', $output, $retval);
    if ($retval) {
        $ERROR = "Error executing ImageMagick - Return value: $retval<br />";
        $ERROR .= 'Cmd line : '.nl2br(htmlprepare($cmd)).'<br />';
        $ERROR .= 'The convert program said: '.nl2br(htmlprepare($output)).'<br />';
        trigger_error($ERROR, E_USER_WARNING);
        unlink($dest_file);
        return -$retval;
    }
    return $dest_file;
  }

  function show($src_file, $dest_info)
  {
    global $MAIN_CFG;
    $imginfo = getimagesize($src_file);
    if (!$imginfo) return -1;
    // impath = `locate --regexp=/convert$ -n 1` , default = /usr/bin/convert
    $src_file = escapeshellarg($src_file);
    if (!isset($dest_info['quality']) || intval($dest_info['quality']) < 10) $dest_info['quality'] = 85;
    $cmd = $MAIN_CFG['imaging']['impath']."convert -quality $dest_info[quality] -antialias -geometry {$dest_info[0]}x{$dest_info[1]} $src_file -";
    header('Content-type: '.image_type_to_mime_type($imginfo[2]));
    passthru($cmd);
  }
}
