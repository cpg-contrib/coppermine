<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/



if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

define("EXIF_CACHE_FILE","exif.dat");
require("include/exif.php");

function exif_parse_file($filename)
{
        global $CONFIG, $lang_picinfo;

        //String containing all the available exif tags.
        $exif_info = "AFFocusPosition|Adapter|ColorMode|ColorSpace|ComponentsConfiguration|CompressedBitsPerPixel|Contrast|CustomerRender|DateTimeOriginal|DateTimedigitized|DigitalZoom|DigitalZoomRatio|ExifImageHeight|ExifImageWidth|ExifInteroperabilityOffset|ExifOffset|ExifVersion|ExposureBiasValue|ExposureMode|ExposureProgram|ExposureTime|FNumber|FileSource|Flash|FlashPixVersion|FlashSetting|FocalLength|FocusMode|GainControl|IFD1Offset|ISOSelection|ISOSetting|ISOSpeedRatings|ImageAdjustment|ImageDescription|ImageSharpening|LightSource|Make|ManualFocusDistance|MaxApertureValue|MeteringMode|Model|NoiseReduction|Orientation|Quality|ResolutionUnit|Saturation|SceneCaptureMode|SceneType|Sharpness|Software|WhiteBalance|YCbCrPositioning|xResolution|yResolution";

        if (!is_readable($filename)) return false;

        $size = @getimagesize($filename);
        if ($size[2] != 2) return false; // Not a JPEG file

        $exifRawData = explode ("|",$exif_info);
        $exifCurrentData = explode("|",$CONFIG['show_which_exif']);

        //Let's build the string of current exif values to be shown
        $showExifStr = "";
        foreach ($exifRawData as $key => $val) {
          if ($exifCurrentData[$key] == 1) {
            $showExifStr .= "|".$val;
          }
        }

        //Check if we have the data of the said file in the table
        $sql = "SELECT * FROM {$CONFIG['TABLE_EXIF']} ".
                  "WHERE filename='".addslashes($filename)."'";

        $result = cpg_db_query($sql);

        if (mysql_num_rows($result) > 0){
                $row = mysql_fetch_array($result);
                mysql_free_result($result);
                $exifRawData = unserialize($row["exifData"]);
        } else {
          // No data in the table - read it from the image file
          $exifRawData = read_exif_data_raw($filename,0);
          // Insert it into table for future reference
          $sql = "INSERT INTO {$CONFIG['TABLE_EXIF']} ".
                    "VALUES ('".addslashes($filename)."', '".addslashes(serialize($exifRawData))."')";
          $result = cpg_db_query($sql);
        }

        $exif = array();

        if (is_array($exifRawData['IFD0'])) {
          $exif = array_merge ($exif,$exifRawData['IFD0']);
        }
        if (is_array($exifRawData['SubIFD'])) {
          $exif = array_merge ($exif,$exifRawData['SubIFD']);
        }
        if (is_array($exifRawData['SubIFD']['MakerNote'])) {
          $exif = array_merge ($exif,$exifRawData['SubIFD']['MakerNote']);
        }

        $exif['IFD1OffSet'] = $exifRawData['IFD1OffSet'];

        $exifParsed = array();

        foreach ($exif as $key => $val) {
          if (strpos($showExifStr,"|".$key) && isset($val)){
                $exifParsed[$lang_picinfo[$key]] = $val;
                //$exifParsed[$key] = $val;
          }
        }

        ksort($exifParsed);

        return $exifParsed;
}
?>
