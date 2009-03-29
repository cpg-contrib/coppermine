<?php
if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

$thisplugin->add_action('page_start','link_target_include_file');

function link_target_include_file() {
	global $JS;
	$JS['includes'][] = 'js/link_target.js';
}
?>