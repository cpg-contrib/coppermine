<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('DISPLAYIMAGE_PHP', true);
require('include/init.inc.php');
require('include/picmgmt.inc.php');

if (!GALLERY_ADMIN_MODE) die('Access denied');
pageheader($lang_picinfo['ManageExifDisplay']);

//String containing all the available exif tags.
$exif_info = "AFFocusPosition|Adapter|ColorMode|ColorSpace|ComponentsConfiguration|CompressedBitsPerPixel|Contrast|CustomerRender|DateTimeOriginal|DateTimedigitized|DigitalZoom|DigitalZoomRatio|ExifImageHeight|ExifImageWidth|ExifInteroperabilityOffset|ExifOffset|ExifVersion|ExposureBiasValue|ExposureMode|ExposureProgram|ExposureTime|FNumber|FileSource|Flash|FlashPixVersion|FlashSetting|FocalLength|FocusMode|GainControl|IFD1Offset|ISOSelection|ISOSetting|ISOSpeedRatings|ImageAdjustment|ImageDescription|ImageSharpening|LightSource|Make|ManualFocusDistance|MaxApertureValue|MeteringMode|Model|NoiseReduction|Orientation|Quality|ResolutionUnit|Saturation|SceneCaptureMode|SceneType|Sharpness|Software|WhiteBalance|YCbCrPositioning|xResolution|yResolution";

$exifRawData = explode ("|",$exif_info);
$exifCurrentData = explode ("|",$CONFIG['show_which_exif']);

//If the form is submitted to save the data
if (isset($_POST['save'])) {
  $str = "";
  foreach ($exifRawData as $val) {
    if (in_array($val, $_POST['exif_tags'])) {
      $str .= "1|";
    } else {
      $str .= "0|";
    }
  }

  //Remove the last pipe from the string.
  $selectedExifTags = substr ($str,0,strlen($str)-1);
  $selectedExifTags = $str;
  $sql = "UPDATE ".$CONFIG['TABLE_CONFIG']." SET value = '".$selectedExifTags."' WHERE name = 'show_which_exif'";
  cpg_db_query($sql);
  msg_box($lang_picinfo['ManageExifDisplay'], $lang_picinfo['success'], $lang_continue, "config.php");
} else {
  echo <<< EOT
    <form method="POST" action="">
    <input type="hidden" name="save" value="save" />
EOT;
  starttable('-1',$lang_picinfo['ManageExifDisplay'], 2);
  foreach ($exifRawData as $key => $val) {
    $checked = $exifCurrentData[$key] == 1 ? 'checked' : '';
    echo "<tr><td class='tableb'>".$lang_picinfo[$val]."</td><td class='tableb'><input type='checkbox' name='exif_tags[]' value='$val' " . $checked . " /></td></tr>";
  }
  echo "<tr>
  <td class='tablef' colspan='2' align='center'><input type='submit' class='button' name='submit' value='".$lang_picinfo['submit']."' />";
  endtable();
  echo <<< EOT
    </form>
EOT;
}
ob_end_flush();
pagefooter();
?>