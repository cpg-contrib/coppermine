<?php
include("header.php");
?>
  <h1>Converting cpg1.3.x themes to cpg1.4.1</h1>

  <p>To make your custom made theme from cpg1.3.x work with cpg1.4.1, you will need to make some changes. 
	Remember to back up your original files, so you can go back to a working version in case something goes wrong with the modifications.
	</p>
	<p>The files to be edited would be in the particular folder of the theme in the themes folder.
	For example, the files for the "classic" theme could be found in themes/classic
	</p>
	<div id="toc" style="margin: 20px 10px 5px 20px">
	<ul>
<?php
$i = 1;
while ($i < $links_count) {
		$toc_link .= "<li><a href=\"{$links_global[$i][0]}\">{$links_global[$i][2]}</a></li>";
		$i++;
}

echo "$toc_link"; //generate table of content links from array in header.php
?>
</ul>
</div>
</body>
</html>