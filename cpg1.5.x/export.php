<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.1
  $URL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

define('IN_COPPERMINE',true);
define('EXPORT_PHP', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

pageheader($lang_export_php['export']);

if($superCage->post->keyExists('exportSubmit'))
{
  ($superCage->post->getAlpha('exportType') == 'html') ? initHTMLExport($superCage->post->getInt('album'),$superCage->post->getEscaped('directory')) : initPhotoCopy($superCage->post->getInt('album'),$superCage->post->getEscaped('directory'));
} else if ($superCage->get->keyExists('album') && $superCage->get->keyExists('path') && $superCage->get->keyExists('page')) {
  exportThumbnailPage($superCage->get->getInt('album'), $superCage->get->getInt('page'), $superCage->get->getEscaped('path'));
} else if ($superCage->get->keyExists('id') && $superCage->get->keyExists('dir')) { 
  copyPhoto($superCage->get->getInt('id'),$superCage->get->getEscaped('dir'));
} else {
  echo '<form action="export.php" method="POST">';
  
  $options = '';
  
  $result = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} ORDER BY `title`");
        
  while($album = mysql_fetch_assoc($result))
    $options .= "<option value=\"{$album['aid']}\">{$album['title']}</option>";

  starttable('-1', cpg_fetch_icon('export', 2) . $lang_export_php['export'].'&nbsp;'.cpg_display_help('f=export.htm&amp;as=export&amp;ae=export_end', '600', '450'), 2);
    
  echo <<< EOT

    <tr>
        <td class="tableb">
            {$lang_export_php['export_type']}
        </td>
        <td class="tableb">
            <input type="radio" name="exportType" id="html" value="html" checked="checked" class="radio" /><label for="html">{$lang_export_php['html']}</label>
            <input type="radio" name="exportType" id="img" value="img" class="radio" /><label for="img">{$lang_export_php['images']}</label>
        </td>
    </tr>
    <tr>
        <td class="tableb tableb_alternate">
            {$lang_common['select_album']}
        </td>
        <td class="tableb tableb_alternate">
            <select name="album" class="listbox">
                $options
            </select>
        </td>
    </tr>
    <tr>
        <td class="tableb">
            {$lang_export_php['export_directory']}
        </td>
        <td class="tableb">
            <input type="text" value="export" name="directory" class="textinput" />
        </td>
    </tr>
    <tr>
        <td class="tablef" colspan="2">
            <input type="submit" name="exportSubmit" value="{$lang_common['go']}" class="button" />
        </td>
    </tr>

EOT;

  endtable();
  echo '</form>';
}

pagefooter();

// Based on code by Rob Williams
//Convert a PHP array to a JavaScript one (rev. 4)
function phpArrayToJS($array, $baseName) {
  
    $return = '';
  
  //Write out the initial array definition
  $return .= ($baseName . " = new Array(); \r\n ");    
  
  //Reset the array loop pointer
  reset ($array);
  
  //Use list() and each() to loop over each key/value
  //pair of the array
  while (list($key, $value) = each($array)) {
    if (is_numeric($key)) {
      //A numeric key, so output as usual
      $outKey = "[" . $key . "]";
    } else {
      //A string key, so output as a string
      $outKey = "['" . $key . "']";
    }
    
    if (is_array($value)) {
      //The value is another array, so simply call
      //another instance of this function to handle it
      $return .= phpArrayToJS($value, $baseName . $outKey);
    } else {
      
      //Output the key declaration
      $return .= ($baseName . $outKey . " = ");      
      
      //Now output the value
      if (is_numeric($value)){
        $return .= ($value . "; \r\n ");
      } else if (is_string($value)) {
        //Output as a string, as we did before       
        $return .= ("'" . $value . "'; \r\n ");
      } else if ($value === false) {
        //Explicitly output false
        $return .= ("false; \r\n ");
      } else if ($value === NULL) {
        //Explicitly output null
        $return .= ("null; \r\n ");
      } else if ($value === true) {
        //Explicitly output true
        $return .= ("true; \r\n ");
      } else {
        //Output the value directly otherwise
        $return .= ($value . "; \r\n ");
      }
    }
  }
  
  return $return;
}

function initHTMLExport($album,$path)
{
  global $CONFIG, $lang_export_php;

  $pictures = cpg_db_query("SELECT pid,title,filename,filepath, url_prefix FROM {$CONFIG['TABLE_PICTURES']} WHERE `aid` = '$album'");
  $picture_r = array();
  // Copy pictures to export directory
  while($picture = mysql_fetch_array($pictures))
  {
    $picture_r[$picture['pid']] = $picture['filepath'].$picture['filename'];
    if(!is_dir("$path/{$CONFIG['fullpath']}{$picture['filepath']}")) {
      recursive_mkdir("$path/{$CONFIG['fullpath']}{$picture['filepath']}");
    }
    copy(get_pic_url($picture, 'fullsize'), $dest = "$path/" . get_pic_url($picture, 'fullsize'));
    chmod($dest, octdec($CONFIG['default_file_mode']));
    copy(get_pic_url($picture, 'normal'), $dest = "$path/" . get_pic_url($picture, 'normal'));
    chmod($dest, octdec($CONFIG['default_file_mode']));
    copy(get_pic_url($picture, 'thumb'), $dest = "$path/" . get_pic_url($picture, 'thumb'));
    chmod($dest, octdec($CONFIG['default_file_mode']));
  }

  $pages = ceil(count($picture_r)/($CONFIG['thumbrows']*$CONFIG['thumbcols'])); // Calculate number of thumnail pages necessary 

  echo "<p align=\"center\">{$lang_export_php['processing']}</p>";
  
  echo<<<EOT
    
    <script type="text/javascript">
      var album = "{$album}";
      var path = "{$path}";
      var pages = "{$pages}";
      getPage(1);
      function getPage(page)
      {
        if(page<=pages) {
            // Create an xmlHttp Object (Tries Activex object then xmlHttp request)
            try {
              ajxobj = new ActiveXObject('Msxml2.XMLHTTP');
            } catch (e) {
              try {
                ajxobj = new ActiveXObject('Microsoft.XMLHTTP');
                  } catch (E) {
                   ajxobj = false;
                }
            }
              if (!ajxobj && typeof XMLHttpRequest!='undefined') {
                ajxobj = new XMLHttpRequest(); //If we were able to get a working active x object, start an XMLHttpRequest
              } 
              ajxobj.onreadystatechange=function() {    //Handle successful xmlHttp transfer
                if(ajxobj.readyState==4) {
                  getPage(page+1);
                }
              };
              
              // Generate and do xmlHttp call
            ajxobj.open('GET',"export.php?album="+album+"&path="+path+"&page="+page, true);
            ajxobj.send(null);
        } else {
          window.location = path;
        }
      }

    </script>
EOT;
}

function exportThumbnailPage($album, $page, $path)
{
    global $CONFIG;
     
    $superCage = Inspekt::makeSuperCage();
     
    $filename = "thumbnails.php";
    ob_clean();
    ob_start();
    include $filename;
    $contents = ob_get_clean();

    $pictures = cpg_db_query("SELECT pid,title,filename,filepath FROM {$CONFIG['TABLE_PICTURES']} WHERE `aid` = '$album'");
    $picture_r = array();
    while($picture = mysql_fetch_array($pictures))
    {
      $picture_r[$picture['pid']] = $picture['filepath'].$picture['filename'];
    }
  
    // Create a DOM Object to parse the html (Removing links to dynamic content/functions that require php)
    $doc = new DomDocument();
    $doc->loadHtml($contents);
    $divs = $doc->getElementsByTagName('div');
    foreach($divs as $div)
    {
      if($div->getAttribute('id') == 'MENUS' || $div->getAttribute('class') == 'admin_menu_wrapper') {
        $div->setAttribute('style','display:none');
      }
    }
    $tds = $doc->getElementsByTagName('td');
    foreach($tds as $td)
    {
      if($td->getAttribute('class') == 'sortorder_options') {
        $td->setAttribute('style','display:none');
      }
    }
    
    $contents = $doc->saveHTML();

    foreach($picture_r as $id => $filename)
    {
      $contents = preg_replace("/displayimage.php\?album=$album&amp;pid=$id/","{$CONFIG['fullpath']}$filename",$contents);    
    }
    $contents = preg_replace("/thumbnails.php\?album=$album&amp;page=([\d]+)/",'thumbnails_$1.html',$contents);

    // Find out the theme currently used and copy over necessary files to replicate this
    $result = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_CONFIG']} WHERE `name` = 'theme'");
    $theme  = mysql_fetch_array($result);

    recursive_copy("themes/{$theme['value']}","$path/themes/{$theme['value']}");

    //file_put_contents("$path/thumbnails_$page.html",$contents);
    
    $fp = fopen("$path/thumbnails_$page.html","w");
    fwrite($fp, $contents);
    fclose($fp);
    
    chmod("$path/thumbnails_$page.html", octdec($CONFIG['default_file_mode']));
    
    if($page==1){
      copy("$path/thumbnails_$page.html","$path/index.html");
      chmod("$path/index.html", octdec($CONFIG['default_file_mode']));
    }
}

function copyPhoto($id,$dir)
{
  global $CONFIG;
  $result = cpg_db_query("SELECT filename,filepath,title FROM {$CONFIG['TABLE_PICTURES']} WHERE `pid` = '$id' LIMIT 1");
  $picture = mysql_fetch_assoc($result);

  $safename  = preg_replace('[\s]','_',$picture['title']);
  $safename  = preg_replace('[\W]','',$safename);
  
  $extension = preg_replace('[^\.]','',$picture['filename']); // Extract file extension
  $filename  = $safename . $extension;
  
  copy($CONFIG['fullpath'].$picture['filepath'].$picture['filename'],$dir.'/'.$filename);
  chmod($dir.'/'.$filename, octdec($CONFIG['default_file_mode']));
}

function initPhotoCopy($album,$directory)
{
  global $CONFIG;
  
  $superCage = Inspekt::makeSuperCage();
  
    if (!is_dir($directory)){
        mkdir($directory);
        chmod($directory, octdec($CONFIG['default_dir_mode']));
    }
    // To-do: perform a check if the export directory has been created succsessfully and die if this has failed
  starttable('100%', 'ID',2);
  
  $pic_array = array();
  $pictures = cpg_db_query("SELECT pid,title,filename,filepath FROM {$CONFIG['TABLE_PICTURES']} WHERE `aid` = '$album'");
  while($picture = mysql_fetch_assoc($pictures))
  {
    echo "<tr><td class='tableb'><span id='id_{$picture['pid']}'>{$picture['pid']}</span></td><td><span id='path_{$picture['pid']}'>{$picture['filepath']}{$picture['filename']}</span></td></tr>\n";
    $pic_array[] = $picture;
  }
  
   endtable();
   
  $js_pictures = phpArrayToJS($pic_array,'pictures');
  
  ?>
    
    <script type="text/javascript">
      var <?php echo $js_pictures ?>;
      processPicture(0);
      
      function processPicture(offset)
      {
        if(offset >= pictures.length) {return 0;};
            // Create an xmlHttp Object (Tries Activex object then xmlHttp request)
          try {
            ajxobj = new ActiveXObject('Msxml2.XMLHTTP');
          } catch (e) {
            try {
              ajxobj = new ActiveXObject('Microsoft.XMLHTTP');
                } catch (E) {
                 ajxobj = false;
              }
          }
            if (!ajxobj && typeof XMLHttpRequest!='undefined') {
              ajxobj = new XMLHttpRequest(); //If we were able to get a working active x object, start an XMLHttpRequest
            } 
            ajxobj.onreadystatechange=function() {  //Handle successful xmlHttp transfer
              if(ajxobj.readyState==4) {
                document.getElementById('path_'+pictures[offset]['pid']).style.textDecoration = 'line-through';
                document.getElementById('id_'+pictures[offset]['pid']).style.textDecoration = 'line-through';
                processPicture(offset+1);
              }
            };
            
            // Generate and do xmlHttp call
          ajxobj.open('GET',"export.php?dir=<?php echo $superCage->post->getEscaped('directory') ?>&id=" + pictures[offset]['pid'], true);
          ajxobj.send(null);
      }



    </script>
    
  <?php
  
 
}
// Does a recursive copy on a directory
function recursive_copy($src,$dest)
{
    // Base case, is file so just copy
    if (is_file($src)) {
        $c = copy($src, $dest);
        return $c;
    }


    if(!is_dir($dest)) {
        recursive_mkdir($dest);
    }
    
        $dir = dir($src);
        while (false !== $entry = $dir->read()) {       
        if($entry== '.' || $entry == '..' || preg_match('/^\./',$entry)) // Skips the index '.' and '..' along with hidden files
            continue;
        if($dest !== "$src/$entry") {
            recursive_copy("$src/$entry","$dest/$entry");
        }
    }
}

// Recursively makes directories as necessary to create a given path:
function recursive_mkdir($folder)
{
    global $CONFIG;
    
    $folder = explode(DIRECTORY_SEPARATOR, $folder);

    $mkfolder = '';

    for ($i=0; isset($folder[$i]); $i++){
        $mkfolder .= $folder[$i];
        if(!is_dir($mkfolder)){
        mkdir($mkfolder);
        chmod($mkfolder, octdec($CONFIG['default_dir_mode']));
      }
        $mkfolder .= DIRECTORY_SEPARATOR;
    }
}
?>