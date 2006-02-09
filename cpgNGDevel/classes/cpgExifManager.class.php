<?php

/**
 * cpgExifManager
 *
 * This class is used to handle which exif data to be displayed
 *
 * @package cpgNG
 * @author amit
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgExifManager {
  var $db;
  var $config;
  var $exifData;
  var $exifInfo;

  /**
   * cpgExifManager()
   *
   * Constructor of class
   *
   * @param
   * @return
   */
  function cpgExifManager() {
    $this->exifData = array();
    $this->db = cpgDb::getInstance();
    $this->config = cpgConfig::getInstance();
    $this->exifInfo = 'AFFocusPosition|Adapter|ColorMode|ColorSpace|ComponentsConfiguration|CompressedBitsPerPixel|Contrast|CustomerRender|DateTimeOriginal|DateTimedigitized|DigitalZoom|DigitalZoomRatio|ExifImageHeight|ExifImageWidth|ExifInteroperabilityOffset|ExifOffset|ExifVersion|ExposureBiasValue|ExposureMode|ExposureProgram|ExposureTime|FNumber|FileSource|Flash|FlashPixVersion|FlashSetting|FocalLength|FocusMode|GainControl|IFD1Offset|ISOSelection|ISOSetting|ISOSpeedRatings|ImageAdjustment|ImageDescription|ImageSharpening|LightSource|Make|ManualFocusDistance|MaxApertureValue|MeteringMode|Model|NoiseReduction|Orientation|Quality|ResolutionUnit|Saturation|SceneCaptureMode|SceneType|Sharpness|Software|WhiteBalance|YCbCrPositioning|xResolution|yResolution';
  } // End of method 'cpgExifManager'

  /**
   * buildExifData()
   *
   * Method to build exif data
   *
   * @param
   * @return
   */
  function buildExifData() {
    global $lang_picinfo;

    $exifRawData = explode ('|', $this->exifInfo);
    $exifCurrentData = explode ('|', $this->config->conf['show_which_exif']);

    reset($exifRawData);

    foreach ($exifRawData as $dataKey => $exifParameter) {
      $this->exifData[] = array(
                                'exifParameter' => $exifParameter,
                                'exifParameterTitle' => $lang_picinfo[$exifParameter],
                                'exifParameterValue' => (int)$exifCurrentData[$dataKey]
                                );
    }
  } // End of method 'buildExifData'

  /**
   * updateExifData()
   *
   * Method to update exif data
   *
   * @param
   * @return
   */
  function updateExifData() {
    global $lang_picinfo, $lang_continue;

    $exifRawData = explode ('|', $this->exifInfo);

    reset($exifRawData);

    $str = '';

    foreach ($exifRawData as $exifParameter) {
      if (in_array($exifParameter, $_POST['exif_tags'])) {
        $str .= '1|';
      } else {
        $str .= '0|';
      }
    }

    $str = substr($str, 0, -1);

    /**
     * Query to update exif data
     */
    $sql = 'UPDATE '.$this->config->conf['TABLE_CONFIG']." SET value = '$str' WHERE name = 'show_which_exif'";
    $this->db->query($sql);

    cpgUtils::msgBox($lang_picinfo['ManageExifDisplay'], $lang_picinfo['success'], $lang_continue, 'admin.php');
    exit;
  } // End of method 'updateExifData'
} // End of class 'cpgExifManager'

?>
