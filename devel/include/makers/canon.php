<?
//================================================================================================
//================================================================================================
//================================================================================================
/*
	Exifer
	Extracts EXIF information from digital photos.
	
	Copyright � 2003 Jake Olefsky
	http://www.offsky.com/software/exif/index.php
	jake@olefsky.com
	
	Please see exif.php for the complete information about this software.
	
	------------
	
	This program is free software; you can redistribute it and/or modify it under the terms of 
	the GNU General Public License as published by the Free Software Foundation; either version 2 
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
	without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
	See the GNU General Public License for more details. http://www.gnu.org/copyleft/gpl.html
*/
//================================================================================================
//================================================================================================
//================================================================================================


//=================
// Looks up the name of the tag for the MakerNote (Depends on Manufacturer)
//====================================================================
function lookup_Canon_tag($tag) {
	
	switch($tag) {
		case "0001": $tag = "Settings 1";break;
		case "0004": $tag = "Settings 4";break;
		case "0006": $tag = "ImageType";break;
		case "0007": $tag = "FirmwareVersion";break;
		case "0008": $tag = "ImageNumber";break;
		case "0009": $tag = "OwnerName";break;
		case "000c": $tag = "CameraSerialNumber";break;	
		case "000f": $tag = "CustomFunctions";break;	
		
		default: $tag = "unknown:".$tag;break;
	}
	
	return $tag;
}

//=================
// Formats Data for the data type
//====================================================================
function formatCanonData($type,$tag,$intel,$data,&$result) {
	$place = 0;
	
	
	if($type=="ASCII") {
		$result = $data;		
	} else if($type=="URATIONAL" || $type=="SRATIONAL") {
		$data = bin2hex($data);
		if($intel==1) $data = intel2Moto($data);
		$top = hexdec(substr($data,8,8));
		$bottom = hexdec(substr($data,0,8));
		if($bottom!=0) $data=$top/$bottom;
		else if($top==0) $data = 0;
		else $data=$top."/".$bottom;
	
		if($tag=="0204") { //DigitalZoom
			$data=$data."x";
		} 
		
	} else if($type=="USHORT" || $type=="SSHORT" || $type=="ULONG" || $type=="SLONG" || $type=="FLOAT" || $type=="DOUBLE") {
		
		$data = bin2hex($data);
		$result['RAWDATA'] = $data;
	
		if($tag=="0001") { //first chunk
			$result['Bytes']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//0
			$result['Macro']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//1
				if($result['Macro']==1) $result['Macro'] = "Macro";
				if($result['Macro']==2) $result['Macro'] = "Normal";
			$result['SelfTimer']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//2
				if($result['SelfTimer']==0) $result['SelfTimer'] = "Off";
			$result['Quality']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//3
				if($result['Quality']==2) $result['Quality'] = "Normal";
				if($result['Quality']==3) $result['Quality'] = "Fine";
				if($result['Quality']==5) $result['Quality'] = "Superfine";
			$result['Flash']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//4
				if($result['Flash']==0) $result['Flash'] = "Off";
			$result['DriveMode']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//5
				if($result['DriveMode']==0) $result['DriveMode'] = "Single/Timer";
				if($result['DriveMode']==1) $result['DriveMode'] = "Continuoue";
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//6
			$result['FocusMode']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//7
				if($result['FocusMode']==1) $result['FocusMode'] = "Single";
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//8
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//9
			$result['ImageSize']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//10
				if($result['ImageSize']==0) $result['ImageSize'] = "Large";
				if($result['ImageSize']==1) $result['ImageSize'] = "Medium";
				if($result['ImageSize']==2) $result['ImageSize'] = "Small";
			$result['EasyShooting']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//11
				if($result['EasyShooting']==0) $result['EasyShooting'] = "Full Auto";
				if($result['EasyShooting']==1) $result['EasyShooting'] = "Manual";
				if($result['EasyShooting']==2) $result['EasyShooting'] = "Landscape";
				if($result['EasyShooting']==3) $result['EasyShooting'] = "Fast Shutter";
				if($result['EasyShooting']==4) $result['EasyShooting'] = "Slow Shutter";
				if($result['EasyShooting']==5) $result['EasyShooting'] = "Night";
				if($result['EasyShooting']==6) $result['EasyShooting'] = "Black & White";
				if($result['EasyShooting']==7) $result['EasyShooting'] = "Sepia";
				if($result['EasyShooting']==8) $result['EasyShooting'] = "Portrait";
				if($result['EasyShooting']==9) $result['EasyShooting'] = "Sport";
				if($result['EasyShooting']==10) $result['EasyShooting'] = "Macro/Close-Up";
				if($result['EasyShooting']==11) $result['EasyShooting'] = "Pan Focus";
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//12
			$result['Contrast']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//13
				if($result['Contrast']==0) $result['Contrast'] = "Normal";
			$result['Saturation']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//14
				if($result['Saturation']==0) $result['Saturation'] = "Normal";
			$result['Sharpness']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//15
				if($result['Sharpness']==0) $result['Sharpness'] = "Normal";
			$result['ISO']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//16
				if($result['ISO']==15) $result['ISO'] = "Auto";
				if($result['ISO']==16) $result['ISO'] = "50";
				if($result['ISO']==17) $result['ISO'] = "100";
				if($result['ISO']==18) $result['ISO'] = "200";
				if($result['ISO']==19) $result['ISO'] = "400";
			$result['MeteringMode']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//17
				if($result['MeteringMode']==3) $result['MeteringMode'] = "Evaluative";
				if($result['MeteringMode']==4) $result['MeteringMode'] = "Partial";
				if($result['MeteringMode']==5) $result['MeteringMode'] = "Center-weighted";
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//18
			$result['AFPointSelected']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//19
			$result['ExposureMode']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//20
				if($result['ExposureMode']==0) $result['ExposureMode'] = "EasyShoot";
				if($result['ExposureMode']==1) $result['ExposureMode'] = "Program";
				if($result['ExposureMode']==2) $result['ExposureMode'] = "Tv";
				if($result['ExposureMode']==3) $result['ExposureMode'] = "Av";
				if($result['ExposureMode']==4) $result['ExposureMode'] = "Manual";
				if($result['ExposureMode']==5) $result['ExposureMode'] = "Auto-DEP";
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//21
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//22
			$result['LongFocalLength']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//23
			$result['ShortFocalLength']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//24
			$result['FocalUnits']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//25
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//26
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//27
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//28
			$result['FlashDetails']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//29
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//30
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//31
			$result['FocusMode']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//32
			
		} else if($tag=="0004") { //second chunk
			$result['Bytes']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//0
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//1
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//2
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//3
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//4
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//5
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//6
			$result['WhiteBalance']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//7
				if($result['WhiteBalance']==0) $result['WhiteBalance'] = "Auto";
				if($result['WhiteBalance']==1) $result['WhiteBalance'] = "Sunny";
				if($result['WhiteBalance']==2) $result['WhiteBalance'] = "Cloudy";
				if($result['WhiteBalance']==3) $result['WhiteBalance'] = "Tungsten";
				if($result['WhiteBalance']==4) $result['WhiteBalance'] = "Flourescent";
				if($result['WhiteBalance']==5) $result['WhiteBalance'] = "Flash";
				if($result['WhiteBalance']==6) $result['WhiteBalance'] = "Custom";
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//8
			$result['SequenceNumber']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//9
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//10
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//11
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//12
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//13
			$result['AFPointUsed']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//14
			$result['FlashBias']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//15
				$result['FlashBias'].="EV";//15
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//16
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//17
			$result['Unknown']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//18
			$result['SubjectDistance']=hexdec(intel2Moto(substr($data,$place,4)));$place+=4;//19
			
		} else if($tag=="0008") { //image number
			if($intel==1) $data = intel2Moto($data);
			$data=hexdec($data);
			$result = round($data/1000)."-".$data%1000;
		
		} else if($tag=="000c") { //camera serial number
			if($intel==1) $data = intel2Moto($data);
			$data=hexdec($data);
			$result = "#".bin2hex(substr($data,0,16)).substr($data,16,16);
		}
		
	} else if($type=="UNDEFINED") {
		
	
		
	} else {
		$data = bin2hex($data);
		if($intel==1) $data = intel2Moto($data);
	}
	
	return $data;
}



//=================
// Cannon Special data section
// Useful:  http://www.burren.cx/david/canon.html
//====================================================================
function parseCanon($block,&$result,$seek, $globalOffset) {	
	$place = 0; //current place
		
	if($result['Endien']=="Intel") $intel=1;
	else $intel=0;
	
	$model = $result['IFD0']['Model'];
	
		//Get number of tags (2 bytes)
	$num = bin2hex(substr($block,$place,2));$place+=2;
	if($intel==1) $num = intel2Moto($num);
	$result['SubIFD']['MakerNote']['MakerNoteNumTags'] = hexdec($num);
	
	//loop thru all tags  Each field is 12 bytes
	for($i=0;$i<hexdec($num);$i++) {
		
			//2 byte tag
		$tag = bin2hex(substr($block,$place,2));$place+=2;
		if($intel==1) $tag = intel2Moto($tag);
		$tag_name = lookup_Canon_tag($tag);
		
			//2 byte type
		$type = bin2hex(substr($block,$place,2));$place+=2;
		if($intel==1) $type = intel2Moto($type);
		lookup_type($type,$size);
		
			//4 byte count of number of data units
		$count = bin2hex(substr($block,$place,4));$place+=4;
		if($intel==1) $count = intel2Moto($count);
		$bytesofdata = $size*hexdec($count);
	
		if($bytesofdata<=0) {
			return; //if this value is 0 or less then we have read all the tags we can
		}
		
			//4 byte value of data or pointer to data
		$value = substr($block,$place,4);$place+=4;
		
		if($bytesofdata<=4) {
			$data = $value;
		} else {
			$value = bin2hex($value);
			if($intel==1) $value = intel2Moto($value);
			$v = fseek($seek,$globalOffset+hexdec($value));  //offsets are from TIFF header which is 12 bytes from the start of the file
			if($v==0) {
				$data = fread($seek, $bytesofdata);
			} else if($v==-1) {
				$result['Errors'] = $result['Errors']++;
			}
		}
		$formated_data = formatCanonData($type,$tag,$intel,$data,$result['SubIFD']['MakerNote'][$tag_name]);
		
		if($result['VerboseOutput']==1) {
			//$result['SubIFD']['MakerNote'][$tag_name] = $formated_data;
			if($type=="URATIONAL" || $type=="SRATIONAL" || $type=="USHORT" || $type=="SSHORT" || $type=="ULONG" || $type=="SLONG" || $type=="FLOAT" || $type=="DOUBLE") {
				$data = bin2hex($data);
				if($intel==1) $data = intel2Moto($data);
			}
			$result['SubIFD']['MakerNote'][$tag_name."_Verbose"]['RawData'] = $data;
			$result['SubIFD']['MakerNote'][$tag_name."_Verbose"]['Type'] = $type;
			$result['SubIFD']['MakerNote'][$tag_name."_Verbose"]['Bytes'] = $bytesofdata;
		} else {
			//$result['SubIFD']['MakerNote'][$tag_name] = $formated_data;
		}
	}
}


?>