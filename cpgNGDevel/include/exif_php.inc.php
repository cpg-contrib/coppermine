<?php

/**
 * Used to parse exif information for a particular image
 *
 * @package cpgNG
 * @author amit
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */

define('EXIF_CACHE_FILE', 'exif.dat');
require('libs/exif/exif.php');

function exif_parse_file($filename) {
  global $lang_picinfo;

  $db = cpgDb::getInstance();
  $config = cpgConfig::getInstance();

  // String containing all the available exif tags.
  $exifInfo = 'AFFocusPosition|Adapter|ColorMode|ColorSpace|ComponentsConfiguration|CompressedBitsPerPixel|Contrast|CustomerRender|DateTimeOriginal|DateTimedigitized|DigitalZoom|DigitalZoomRatio|ExifImageHeight|ExifImageWidth|ExifInteroperabilityOffset|ExifOffset|ExifVersion|ExposureBiasValue|ExposureMode|ExposureProgram|ExposureTime|FNumber|FileSource|Flash|FlashPixVersion|FlashSetting|FocalLength|FocusMode|GainControl|IFD1Offset|ISOSelection|ISOSetting|ISOSpeedRatings|ImageAdjustment|ImageDescription|ImageSharpening|LightSource|Make|ManualFocusDistance|MaxApertureValue|MeteringMode|Model|NoiseReduction|Orientation|Quality|ResolutionUnit|Saturation|SceneCaptureMode|SceneType|Sharpness|Software|WhiteBalance|YCbCrPositioning|xResolution|yResolution';

  if (!is_readable($filename)) return false;

  $size = @getimagesize($filename);
  if ($size[2] != 2) return false; // Not a JPEG file

  $exifRawData = explode ('|', $exifInfo);
  $exifCurrentData = explode('|', $config->conf['show_which_exif']);

  // Let's build the string of current exif values to be shown
  $showExifStr = '';

  foreach ($exifRawData as $key => $val) {
    if ($exifCurrentData[$key] == 1) {
      $showExifStr .= '|'.$val;
    }
  }

  // Check if we have the data of the said file in the table
  $sql = "SELECT * FROM {$config->conf['TABLE_EXIF']} ".
            "WHERE filename = \"$filename\"";

  $db->query($sql);

  if ($db->nf() > 0){
    $row = $db->fetchRow();
    $exifRawData = unserialize($row['exifData']);
  } else {
    // No data in the table - read it from the image file
    $exifRawData = read_exif_data_raw($filename, 0);

    // Insert it into table for future reference
    $sql = "INSERT INTO {$config->conf['TABLE_EXIF']} ".
              "VALUES ('$filename', '".addslashes(serialize($exifRawData))."')";

    $db->query($sql);
  }

  $exif = array();

  if (is_array($exifRawData['IFD0'])) {
    $exif = array_merge($exif, $exifRawData['IFD0']);
  }

  if (is_array($exifRawData['SubIFD'])) {
    $exif = array_merge($exif, $exifRawData['SubIFD']);
  }

  if (is_array($exifRawData['SubIFD']['MakerNote'])) {
    $exif = array_merge($exif, $exifRawData['SubIFD']['MakerNote']);
  }

  $exif['IFD1OffSet'] = $exifRawData['IFD1OffSet'];

  $exifParsed = array();

  foreach ($exif as $key => $val) {
    if (strpos($showExifStr, '|'.$key) && isset($val)){
      $exifParsed[$lang_picinfo[$key]] = $val;
    }
  }

  ksort($exifParsed);

  return $exifParsed;
}

?>
