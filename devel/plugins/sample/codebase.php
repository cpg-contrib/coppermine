<?php
// Add a filter for the gallery header
cpg_add_filter('gallery_header','sample_header');

// Sample function to modify gallery header html
function sample_header($html) {
    global $thisplugin;
    return '<p style="color:red;"><b>This is sample data returned from plugin "'.$thisplugin->name.'".</b></p>'.$html;
}
?>
