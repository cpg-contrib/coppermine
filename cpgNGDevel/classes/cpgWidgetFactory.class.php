<?php

/**
 * cpgWidgetFactory
 *
 * This class is used to create widgets
 *
 * @package cpgNG
 * @author amit
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgWidgetFactory {
  var $config;
  var $content;
  var $currentGroup;

  /**
   * cpgWidgetFactory::cpgWidgetFactory()
   *
   * Constructor of class.
   *
   * @param
   * @return
   */
  function cpgWidgetFactory() {
    $this->content = array();
    $this->currentGroup = '';
    $this->config = cpgConfig::getInstance();
  } // End of function 'cpgWidgetFactory'

  /**
   * cpgWidgetFactory::createWidget()
   *
   * Method to create HTML widgets.
   *
   * @param  $element
   * @return
   */
  function createWidget($element) {
    global $lang_admin_php, $lang_config_options, $lang_no, $lang_yes, $optionsToDisable;

    /**
     * If help URL is not set then set it blank
     */
    $element[3] = (isset($element[3])) ? $element[3] : '';

    /**
     * Code to change element's type to 4 if element is in array $optionsToDisable and cpg is bridged with other application
     */
    if (UDB_INTEGRATION != 'coppermine' && in_array($element[1], $optionsToDisable) && $this->config->conf['bridge_enable']) {
      $element[2] = 4;
    }

    /**
     * Code for short notices
     */
    $sn1 = max($sn1, (strpos($element[0], '<a href="#notice1"')));
    $sn2 = max($sn2, (strpos($element[0], '<a href="#notice2"')));
    $sn3 = max($sn3, (strpos($element[0], '<a href="#notice3"')));

    switch ($element[2]) {
      /**
       * For textboxes
       */
      case 0:
        $this->content[$this->currentGroup][] = array(
                                                      'text' => $element[0],
                                                      'widget' => '<input type="text" class="textinput" maxlength="255" style="width: 100%" name="'.$element[1].'" value="'.$this->config->conf[$element[1]].'" />',
                                                      'help' => cpgUtils::cpgDisplayHelp($element[3]),
                                                      'sn1' => $sn1,
                                                      'sn2' => $sn2,
                                                      'sn3' => $sn3
                                                      );
        break;

      /**
       * For radio buttons
       */
      case 1:
        $widget = '';

        $this->config->conf[$element[1]] = (int)$this->config->conf[$element[1]];

        if (is_array($lang_config_options[$element[1]]) && !(count($lang_config_options[$element[1]]) == 1 && is_array($lang_config_options[$element[1]]['extra_link']))) {
          $firstIteration = true;
          reset($lang_config_options[$element[1]]);

          /**
           * For special radio buttons
           */
          foreach ($lang_config_options[$element[1]] as $elementLabel => $elementValue) {
            if ($elementLabel == 'extra_link') continue;

            if (!$firstIteration) {
              $widget .= '&nbsp;&nbsp;';
            }

            $widget .= '<input type="radio" id="'.$element[1].$elementValue.'" name="'.$element[1].'" value="'.$elementValue.'"'.($this->config->conf[$element[1]] == $elementValue ? ' CHECKED' : '').' /><label for="'.$element[1].$elementValue.'" class="clickable_option">'.$elementLabel.'</label>';

            $firstIteration = false;
          }
        } else {
          /**
           * For normal 'Yes'/'No' radio buttons
           */
          $widget .= '<input type="radio" id="'.$element[1].'1" name="'.$element[1].'" value="1"'.($this->config->conf[$element[1]] == 1 ? ' CHECKED' : '').' /><label for="'.$element[1].'1" class="clickable_option">'.$lang_yes.'</label>&nbsp;&nbsp;<input type="radio" id="'.$element[1].'0" name="'.$element[1].'" value="0"'.($this->config->conf[$element[1]] == 0 ? ' CHECKED' : '').' /><label for="'.$element[1].'0" class="clickable_option">'.$lang_no.'</label>';
        }

        /**
         * Code to create extra link near last radio element
         */
        if (is_array($lang_config_options[$element[1]]['extra_link'])) {
          $linkArr = array();
          reset($lang_config_options[$element[1]]['extra_link']);
          $linkArr = each($lang_config_options[$element[1]]['extra_link']);

          $widget .= '&nbsp;&nbsp;( <a href="'.$linkArr['value'].'">'.$linkArr['key'].'</a> )';
        }

        $this->content[$this->currentGroup][] = array(
                                                      'text' => $element[0],
                                                      'widget' => $widget,
                                                      'help' => cpgUtils::cpgDisplayHelp($element[3]),
                                                      'sn1' => $sn1,
                                                      'sn2' => $sn2,
                                                      'sn3' => $sn3
                                                      );
        break;

      /**
       * For select elements
       */
      case 2:
        $widget = '<select name="'.$element[1].'" class="listbox">';

        /**
         * Code to build lang array
         */
        if ($element[1] == 'lang') {
          $langDir = 'lang/';
          $dir = opendir($langDir);
          $lang_config_options[$element[1]] = array();

          while ($file = readdir($dir)) {
            if (is_file($langDir.$file) && strtolower(substr($file, -4)) == '.php') {
              $lang_config_options[$element[1]][strtolower(substr($file, 0 , -4))] = strtolower(substr($file, 0 , -4));
            }
          }

          closedir($dir);

          ksort($lang_config_options[$element[1]]);
        /**
         * Code to build theme array
         */
        } else if ($element[1] == 'theme') {
          $db = cpgDB::getInstance();

          $query = "SELECT value FROM ".$this->config->conf['TABLE_CONFIG']." WHERE name = 'theme'";
          $db->query($query);

          if ($db->nf() > 0) {
            $row = $db->fetchRow();

            $theme = $row['value'];
          } else {
            $theme = '';
          }

          $themeDir = 'templates/';
          $dir = opendir($themeDir);
          $lang_config_options[$element[1]] = array();

          while ($file = readdir($dir)) {
            if (is_dir($themeDir.$file) && $file != '.' && $file != '..' && strtoupper($file) != 'CVS' && strtolower($file) != 'common') {
              $lang_config_options[$element[1]][$file] = $file;
            }
          }

          closedir($dir);

          ksort($lang_config_options[$element[1]]);
        /**
         * Code to build maximum tabs array
         */
        } else if ($element[1] == 'max_tabs') {
          $lang_config_options[$element[1]] = array();

          for ($i = 5; $i <= 25; $i++) {
            $lang_config_options[$element[1]][$i] = $i;
          }
        }

        reset($lang_config_options[$element[1]]);

        /**
         * Code to create options for select element
         */
        foreach ($lang_config_options[$element[1]] as $elementLabel => $elementValue) {
          if ($element[1] == 'lang') {
            $widget .= '<option value="'.$elementValue.'"'.($this->config->conf[$element[1]] == $elementValue ? ' SELECTED' : '').'>'.ucfirst($elementLabel).'</option>';
          } else if ($element[1] == 'theme') {
            $widget .= '<option value="'.$elementValue.'"'.($theme == $elementValue ? ' SELECTED' : '').'>'.strtr(ucfirst($elementLabel), '_', ' ').'</option>';
          } else if ($element[1] == 'charset') {
            $widget .= '<option value="'.$elementValue.'"'.($this->config->conf[$element[1]] == $elementValue ? ' SELECTED' : '').'>'.$elementLabel.' ('.$elementValue.')</option>';
          } else {
            $widget .= '<option value="'.$elementValue.'"'.($this->config->conf[$element[1]] == $elementValue ? ' SELECTED' : '').'>'.$elementLabel.'</option>';
          }
        }

        $widget .= '</select>';

        $this->content[$this->currentGroup][] = array(
                                                      'text' => $element[0],
                                                      'widget' => $widget,
                                                      'help' => cpgUtils::cpgDisplayHelp($element[3]),
                                                      'sn1' => $sn1,
                                                      'sn2' => $sn2,
                                                      'sn3' => $sn3
                                                      );
        break;

      /**
       * For group labels
       */
      case 3:
        $sn1 = $sn2 = $sn3 = 0;
        $this->currentGroup = $element[0];
        break;

      /**
       * For disabled elements
       */
      case 4:
        $this->content[$this->currentGroup][] = array(
                                                      'text' => $element[0],
                                                      'widget' => $lang_admin_php['bbs_disabled'],
                                                      'help' => cpgUtils::cpgDisplayHelp($element[3]),
                                                      'sn1' => $sn1,
                                                      'sn2' => $sn2,
                                                      'sn3' => $sn3
                                                      );
        break;

      default;
        break;
    } // End of switch for element type
  } // End of function 'createWidget'
} // End of class 'cpgWidgetFactory'

?>
