<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //

/*
$Id$
*/

class imageObject{

         // image resource
         var $imgRes;
         // px
         var $height=0;
         var $width=0;
         // for img height/width tags
         var $string;
         // output report or error message
         var $message;
         // file + dir
         var $directory;
         var $filename;
         // output quality, 0 - 100
         var $quality;

         //constructor
         function imageObject($directory,$filename,$previous=null)
        {
        $this->directory = $directory;
        $this->filename = $filename;
        $this->previous = $previous;
        $this->truecolor = true;

        if (file_exists($directory.$filename)){
                        $this->filesize = round(filesize($directory.$filename)/1000);
                        if($this->filesize>0){
                                $size = @GetImageSize($directory.$filename);
                                // For IM we don't need an Image Resource (work directly on file :)
                                if ($size && !$this->imgRes) {
                                        $this->imgRes = true;
                                }

                                $this->width = $size[0];
                                $this->height = $size[1];
                                $this->string = $size[3];
                                }
                        }// if
        }// constructor

         function cropImage(&$clipval)
         {
             $cliparray = split(",",$clipval);
             $clip_top = $cliparray[0];
             $clip_right = $cliparray[1];
             $clip_bottom = $cliparray[2];
             $clip_left = $cliparray[3];

             $new_w = $clip_right - $clip_left;
             $new_h = $clip_bottom - $clip_top;


             $imgFile = escapeshellarg("$this->directory$this->filename");


             $output = array();
             $cmd = "{$CONFIG['impath']}convert -quality {$this->quality} {$CONFIG['im_options']} -crop '{$new_w}x{$new_h} +{$clip_left} +{$clip_top}' $imgFile $imgFile";
             exec ($cmd, $output, $retval);

             //To Do check for errors in execution etc

                 // Call the constructor again to repopulate the dimensions etc
             $this->imageObject($this->directory,$this->filename);

             return $this;

         }

         function rotateImage(&$angle){

             $imgFile = escapeshellarg("$this->directory$this->filename");

             $output = array();
             $cmd = "{$CONFIG['impath']}convert -quality {$this->quality} {$CONFIG['im_options']} -rotate '$angle' $imgFile $imgFile";
             exec ($cmd, $output, $retval);

             //To Do check for errors in execution etc

             // Call the constructor again to repopulate the dimensions etc
             $this->imageObject($this->directory,$this->filename);
             return $this;

         }


         function resizeImage($new_w=0,$new_h=0){

             $imgFile = escapeshellarg("$this->directory$this->filename");

             $output = array();
             $cmd = "{$CONFIG['impath']}convert -quality {$this->quality} {$CONFIG['im_options']} -geometry '{$new_w}x{$new_h}' $imgFile $imgFile";
             exec ($cmd, $output, $retval);

             //To Do check for errors in execution etc

             // Call the constructor again to repopulate the dimensions etc
             $this->imageObject($this->directory,$this->filename);
             return $this;

         }


   }
 ?>