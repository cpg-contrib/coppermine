<?php
$current_page = $_SERVER['PHP_SELF'];
$current_parsed_url = parse_url($current_page);
$current_path = $current_parsed_url['path'];
$current_path_parts = pathinfo("$current_path");
$current_file = $current_path_parts['basename'];

$links_global = //(filename, short (link text), long (page title))
				array (
				array('index.php', 'Theme Upgrade Home', 'Converting cpg1.3.x themes to cpg1.4.1'),
				array('edit_style.php', 'style.css', 'Edit style.css'),
				array('edit_template.php', 'template.html', 'Edit template.html'),
				array('edit_theme.php', 'theme.php', 'Edit theme.php'),
				array('validation.php', 'Validation', 'Validation'),
);

$links_count = count($links_global);

$start = 0; //first page, index
$start_tgt = $links_global["$start"][0];
$start_title = $links_global["$start"][1];
$meta_nav .= "<link rel=\"start\" href=\"$start_tgt\" title=\"$start_title\" />
";

$end = $links_count - 1; //last page
$end_tgt = $links_global["$end"][0];
$end_title = $links_global["$end"][1];
$meta_nav .= "<link rel=\"end\" href=\"$end_tgt\" title=\"$end_title\" />
";

$i = 0;
while ($i <= $links_count) {
	if (strstr($links_global[$i][0], $current_file)) {
		$buttons_global .= "<font class=\"globalNavSelect\">&raquo; {$links_global[$i][1]}</font>";
		$prev = $i - 1;
		$prev_tgt = $links_global["$prev"][0];
		$prev_title = $links_global["$prev"][1];
		$meta_nav .= "<link rel=\"prev\" href=\"$prev_tgt\" title=\"$prev_title\" />";
		$next = $i + 1;
		$next_tgt = $links_global["$next"][0];
		$next_title = $links_global["$next"][1];
		$meta_nav .= "<link rel=\"next\" href=\"$next_tgt\" title=\"$next_title\" />";
		$current_title = $links_global["$i"][2];
		if ($i == 0) { //if on first page, "previous" link is not linked
			$prev_next .= "Previous";
		} else {
			$prev_next .= "<a href=\"$prev_tgt\">Previous</a>";
		}
		$prev_next .= "&nbsp;|&nbsp;";
		if ($i == $end) { //if on last page, "next" link is not linked
			$prev_next .= "Next";
		} else {
			$prev_next .= "<a href=\"$next_tgt\">Next</a>";
		}
	} else { //generate clickable links to other files
		$buttons_global .= "<a href=\"{$links_global[$i][0]}\">{$links_global[$i][1]}</a>";
	}
  $i++;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo "$current_title\n"; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <meta name="language" content="en" />
  <meta name="author" content="Coppermine dev team" />
  <meta name="copyright" content="Coppermine dev team" />
  <meta name="description" content="Coppermine Photo Gallery project - Theme Upgrade Documentation" />
	<!-- CVS version info: $Id$ -->
<link rel="stylesheet" 
type="text/css" href="style.css" />
<?php 
echo $meta_nav;
?>

</head>
<body>

	<div class="globalNav">
<?php 
echo "$buttons_global";
echo '</div>';

echo $prev_next; //shows Previous | Next links
?>
	<!-- end nav links -->