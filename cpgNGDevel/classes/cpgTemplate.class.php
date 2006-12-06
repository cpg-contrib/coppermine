<?php
/**
 * cpgTemplate.class.php
 *
 * Templating class
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

define ('SMARTY_DIR' , 'libs/smarty/');
include(SMARTY_DIR . 'Smarty.class.php');
class cpgTemplate extends Smarty {
    var $template_dir = 'templates/';
    var $compile_dir = 'templates_c/';
    var $compile_check = true;
    var $debugging = false;
    var $force_compile = false;
    var $config;

    /**
     * cpgTemplate::cpgTemplate()
     *
     * @return
     */
    function cpgTemplate()
    {
        $this->config = cpgConfig::getInstance();
    }

    /**
     * cpgTemplate::getInstance()
     * 
     * @return 
     */
    function &getInstance()
    {
        static $instance;

        if (!isset($instance)) {
            $instance = new cpgTemplate;
        } 

        return ($instance);
    }     

    /**
     * cpgTemplate::getThumbnailHTML()
     *
     * @param  $thumbList
     * @param boolean $meta
     * @param boolean $indexPage
     * @return
     */
    function getThumbnailHTML($thumbList, $meta = false, $indexPage = false)
    {
        global $lang_errors, $lang_thumb_view;

        $this->assign('thumbcols', $this->config->conf['thumbcols']);
        $this->assign('thumbrows', $this->config->conf['thumbrows']);
        $this->assign('colWidth', 100 / $this->config->conf['thumbcols']);
        $this->assign('thumbList', $thumbList);
        $this->assign('lang_errors', $lang_errors);
        $this->assign('lang_thumb_view', $lang_thumb_view);
        $this->assign('DOMAIN_URL', $this->config->conf['ecards_more_pic_target']);
        $this->assign('short_url', $this->config->conf['short_url']);
        $this->assign('theme', $this->config->conf['theme']);
        $this->assign('indexPage', $indexPage);

        /**
         * If the album is meta album, fetch the metaThumbnail.html file.
         */
        if ($meta) {
            return $this->fetchHTML('common/metaThumbnail.html');
        } else {
            return $this->fetchHTML('common/thumbnail.html');
        }
    }

    /**
     * cpgTemplate::getBreadcrumbHTML()
     *
     * @param  $breadcrumb
     * @return
     */
    function getBreadcrumbHTML($breadcrumb)
    {
        global $lang_list_categories;
        $this->assign('breadcrumb', $breadcrumb);
        $this->assign('lang_list_categories', $lang_list_categories);
        $this->assign('DOMAIN_URL', $this->config->conf['ecards_more_pic_target']);

        return $this->fetchHTML('common/breadcrumb.html');
    }

    /**
     * cpgTemplate::getDisplayImageHTML()
     *
     * @param  $picData
     * @param  $picCount
     * @param  $pos
     * @param  $votes
     * @param  $comments
     * @param  $picInfo
     * @param  $filmStrip
     * @return
     */
    function getDisplayImageHTML($picData, $picCount, $pos, $votes, $comments, $picInfo, $filmStrip, $miscArr)
    {
        global $lang_img_nav_bar, $lang_rate_pic, $lang_display_comments, $lang_picinfo, $lang_display_image_php;

        $this->assign('picData', $picData);
        $this->assign('picCount', $picCount);
        $this->assign('comments', $comments);
        $this->assign('picInfo', $picInfo);
        $this->assign('pos', $pos);
        $this->assign('filmStrip', $filmStrip);
        $this->assign('miscArr', $miscArr);
        $this->assign('votes', $votes);
        $this->assign('lang_img_nav_bar', $lang_img_nav_bar);
        $this->assign('lang_display_comments', $lang_display_comments);
        $this->assign('lang_rate_pic', $lang_rate_pic);
        $this->assign('lang_display_image_php', $lang_display_image_php);
        $this->assign('lang_picinfo', $lang_picinfo);
        $this->assign('DOMAIN_URL', $this->config->conf['ecards_more_pic_target']);
        $this->assign('short_url', $this->config->conf['short_url']);
		
        $this->assign('commentsHTML', $this->fetchHTML('common/comments.html'));

        return $this->fetchHTML('common/displayimage.html');
    }

    /**
     * cpgTemplate::getIndexHTML()
     *
     * @param  $indexData
     * @return
     */
    function getIndexHTML($indexData)
    {
        $this->assign('indexData', $indexData);

        return $this->fetchHTML('common/index.html');
    }

    /**
     * cpgTemplate::display()
     *
     * @param  $fileName
     * @return
     */
    function display($fileName)
    {
        global $cpg_time_start, $query_stats, $queries, $lang_cpg_debug_output, $lang_main_menu, $lang_gallery_admin_menu, $lang_user_admin_menu, $cpgdebugger, $REFERER, $cat;
        $db = cpgDB::getInstance();
        $auth = cpgAuth::getInstance();
        $totalQueryTime = array_sum($db->query_stats) + array_sum($query_stats);
        //$REFERER = urlencode($_SERVER['PHP_SELF'] . (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : ''));

        /**
         * If debug is ON, assign the debug data to smarty
         */
        if (isset($this->config->conf['debug_mode']) && (($this->config->conf['debug_mode'] == 1) || ($this->config->conf['debug_mode'] == 2))) {
            $this->assign('showDebug', 1);
            $this->assign('queries', array_merge($queries, $db->queries));
            $this->assign('totalQueryTime', $totalQueryTime);
            $this->assign('USER', $auth->user);
            $this->assign('USER_DATA', $auth->userData);
            $this->assign('lang_cpg_debug_output', $lang_cpg_debug_output);
            $this->assign('report', $cpgdebugger->stop());
        } else {
            $this->assign('showDebug', 0);
        }
       
        $this->assign('cat', $cat);
        $this->assign('DOMAIN_URL', $this->config->conf['ecards_more_pic_target']);
        $this->assign('short_url', $this->config->conf['short_url']);
        $this->assign('PAGE_TITLE', $this->config->conf['gallery_name'] . ' - ');
        $this->assign('GALLERY_NAME', $this->config->conf['gallery_name']);
        $this->assign('GALLERY_DESCRIPTION', $this->config->conf['gallery_description']);
        $this->assign('REFERER', $REFERER);
        $this->assign('allowRegistration', $this->config->conf['allow_user_registration'] == 1 ? 1 : 0);
        $this->assign('theme', $this->config->conf['theme']);
        $this->assign('charset', $this->config->conf['charset']);
        
        /**
         * Assign user related data
         */
        if (!$auth->isDefined("USER_ID")) {
            $this->assign('login', 1);
        }
		
		/**
         * If registration by invitation is set then show the link
		 */
		if ($auth->isDefined("GALLERY_ADMIN_MODE")) {
		    if ($this->config->conf['allow_user_registration'] == 2) {
				$this->assign('showInvitationLink', 1);
		    }
		}


        /**
         * *#@+
         * Assign user related data to smarty
         */
        $this->assign('GALLERY_ADMIN_MODE', $auth->isDefined("GALLERY_ADMIN_MODE"));
        $this->assign('USER_ADMIN_MODE', $auth->isDefined("USER_ADMIN_MODE"));
        $this->assign('USER_CAN_CREATE_ALBUMS', $auth->isDefined("USER_CAN_CREATE_ALBUMS"));
        $this->assign('USER_IS_ADMIN', $auth->isDefined("USER_IS_ADMIN"));
        $this->assign('USER_CAN_UPLOAD_PICTURES', $auth->isDefined("USER_CAN_UPLOAD_PICTURES"));
        $this->assign('REFERER', $REFERER);
        $this->assign('cat', $cat);
        $this->assign('USER_NAME', $auth->isDefined("USER_NAME"));
        $this->assign('my_cat_id', FIRST_USER_CAT + $auth->isDefined("USER_ID"));
        /**
         * *#@-
         */

        /**
         * *#@+
         * Assign lang arrays to smarty
         */
        $this->assign('lang_main_menu', $lang_main_menu);
        $this->assign('lang_gallery_admin_menu', $lang_gallery_admin_menu);
        $this->assign('lang_user_admin_menu', $lang_user_admin_menu);
		$this->assign('LANGUAGE_SELECT_LIST',cpgUtils::languageSelect('list'));
		$this->assign('LANGUAGE_SELECT_FLAG',cpgUtils::languageSelect('flags'));
        $this->assign('THEME_SELECT_LIST',cpgUtils::themeSelect());
        
        /**
         * *#@+
         * Assign custom link name & url to smarty.
         */
        if (trim($this->config->conf['custom_lnk_name']) != '') {
             $this->assign('custom_lnk_name',$this->config->conf['custom_lnk_name']);
             $this->assign('custom_lnk_url',$this->config->conf['custom_lnk_url']);
        }
        
        /**
         * *#@+
         * Assign custom header & footer to smarty.
         */
     
        $this->assign('CUSTOM_HEADER',cpgUtils::cpg_get_custom_include($this->config->conf['custom_header_path']));                                    
        $this->assign('CUSTOM_FOOTER',cpgUtils::cpg_get_custom_include($this->config->conf['custom_footer_path']));               
        
        /**
         * *#@-
         */
        parent::display($this->config->conf['theme'] . '/' . $fileName);
    }


	/**
	 * cpgTemplate::getLanguageSelectHtml()
	 *
	 * @param string $cpgChangeUrl
	 * @param array $lang_array
	 * @return
	 */
	 function getLanguageSelectHtml($lang_array,$cpgChangeUrl)
	{
		global $lang_language_selection;

		$config = cpgConfig::getInstance();

		$this->assign('lang_language_selection',$lang_language_selection);
		$this->assign('lang_array',$lang_array);
		$this->assign('currentLang',$config->conf['lang']);
		$this->assign('cpgChangeUrl',$cpgChangeUrl);

		return $this->fetch('common/languageSelect.html');
	}

	/**
	 * cogTemplate::getFlagSelectHtml()
	 * 
	 * @param string $cpgChangeUrl
	 * @param array $language_arr
	 * @param array $flagData
	 * @return
	 */
	 function getFlagSelectHtml($cpgChangeUrl,$language_arr,$flagData) 
	{
		global $lang_language_selection,$config;

		$this->assign('cpgChangeUrl',$cpgChangeUrl);
		$this->assign('language_arr',$language_arr);
		$this->assign('flagData',$flagData);
		$this->assign('lang_language_selection',$lang_language_selection);
		$this->assign('choose_lang', $config->conf['language_flags']);
		$this->assign('language_reset', $config->conf['language_reset']);
			
		return $this->fetch('common/flagSelect.html');
		
	}

    /**
     * cpgTemplate::fetchHTML()
     *
     * @param  $fileName
     * @return
     */
    function fetchHTML($fileName)
    {
        $this->assign('DOMAIN_URL', $this->config->conf['ecards_more_pic_target']);
        $this->assign('short_url', $this->config->conf['short_url']);
        $this->assign('theme', $this->config->conf['theme']);
        if (file_exists('templates/' . $this->config->conf['theme'] . '/' . $fileName)) {
            return $this->fetch($this->config->conf['theme'] . '/' . $fileName);
        } else {
            return $this->fetch($fileName);
        }
    }
    
    /**
     * cpgTemplate::getThemeSelectHtml()
     *
     * @param array $theme_array     
     * @param string $cpgCurrentScript
     * @return
     */
    function getThemeSelectHtml($theme_array,$cpgCurrentScript)
    {
        global $lang_theme_selection;
                        
        $config = cpgConfig::getInstance();

        $this->assign('theme_array',$theme_array);
        $this->assign('currentTheme',$config->conf['theme']);
        $this->assign('lang_theme_selection',$lang_theme_selection);
        $this->assign('theme_reset',$config->conf['theme_reset']);
        $this->assign('cpgCurrentScript',$cpgCurrentScript);
                
        return $this->fetch('common/themeSelect.html');
    }
}

?>
