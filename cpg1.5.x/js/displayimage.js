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
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

/**
 * This file contains displayimage.php specific javascript
 */
// When the document is ready
        
$(document).ready(function() {

    var nextPosition    = parseInt(js_vars.position); 
    var NumberOfPics    = parseInt(js_vars.count);
    var album           = js_vars.album; 
    var maxItems        = parseInt(js_vars.max_item);
    var width           = js_vars.thumb_width;
    var cat             = parseInt(js_vars.cat);
    // Display the stars        
    displayStars();
    // Display the slideshow buttons
    printSlideshowButton();
    // Display the pic info button
    printPicInfoButton();

    /** The code below this is filmstrip specific **/
   // We need not execute the filmstrip js if there are not enough pictures in the album        
    if(maxItems%2==0){
        maxItems    = maxItems +1;
    }
    /**stop, if we don't have enugh images than maxItem*/
    if(NumberOfPics <= maxItems){               
        return false;
    }
    
    //variables to handle the next - prev button
    var picQueue        = (maxItems+1)/2;
    var $go_next        = parseInt(maxItems/2);
    //cache the images RULs 
    //create a objects to keep an array
    var url_cache       = new Array(NumberOfPics);
    var link_cache      = new Array(NumberOfPics);
    var img             = new Image();
    //checking position is zero and assign $go_next to zero
    if(nextPosition < picQueue) {
        var cacheIndex      = 0;

    } else if(nextPosition > (NumberOfPics-picQueue)) {
        var cacheIndex = NumberOfPics - maxItems;
        url_cache[0] = "";
    } else {
        var cacheIndex = (nextPosition-$go_next);
        url_cache[0] = "";
    }
    
    // checking position is last thumb image
    for(var i=0; i<maxItems; i++) { 
        url_cache[cacheIndex+i] = $("img.strip_image").eq(i).attr("src");
        link_cache[cacheIndex+i]= $("a.thumbLink").eq(i).attr("href");
    }

    var prev_link = nextPosition > (picQueue-1) ? "<a id=\"filmstrip_prev\" rel=\"nofollow\" style=\"cursor: pointer;\"><img src=\"./images/icons/left.png\" border=\"0\" /></a>" : "<a id=\"filmstrip_prev\" rel=\"nofollow\" style=\"cursor: pointer;display:none\"><img src=\"./images/icons/left.png\" border=\"0\" /></a>";            
    var next_link = nextPosition < (NumberOfPics - picQueue) ? "<a id=\"filmstrip_next\" rel=\"nofollow\" style=\"cursor: pointer;\"><img src=\"./images/icons/right.png\" border=\"0\" /></a>" : "<a id=\"filmstrip_next\" rel=\"nofollow\" style=\"cursor: pointer;display:none\"><img src=\"./images/icons/right.png\" border=\"0\" /></a>";

    $('td.prev_strip').html(prev_link);
    $('td.next_strip').html(next_link);

    //set position if it is not zero 
    if(nextPosition < $go_next) {
        nextPosition    = $go_next;
    }
    
    //set postion if it is at end 
    if(nextPosition > (NumberOfPics-picQueue)) {
        nextPosition    = (NumberOfPics-picQueue);
    }
    
    // Bind a onclick event on element with id filmstrip_next
    $('#filmstrip_next').click(function() {
        // Get the url for next set of thumbnails. This will be the href of 'next' link; 
        nextPosition = nextPosition +1;
        
        if(((NumberOfPics-1)-(picQueue-1)) <= nextPosition ) {
            $('#filmstrip_next').hide();
        }
        //assign a variable to check initial position to next 
        if(nextPosition < (picQueue-1)) {
        // nextPosition = picQueue-1;
        }

        if(nextPosition > (picQueue-1)) {
            $('#filmstrip_prev').show();            
        }
            
        if (!url_cache[nextPosition + $go_next]) {
            if (!isNaN(cat)) {
                addCat = '&cat=' + cat;
            } else {
                addCat = "";
            }
            
            var next_url = "displayimage.php?film_strip=1&album=" + album + "&ajax_call=2&pos=" + nextPosition+addCat;
            // Send the ajax request for getting next set of filmstrip thumbnails
            $.getJSON(next_url, function(data) {

                url_cache[nextPosition+$go_next]  = data['url'];
                link_cache[nextPosition+$go_next] = data['target'];
                
                var itemLength = $(".tape tr > .thumb").length;
                var itemsToRemove = maxItems+1;
                if (itemLength == itemsToRemove) {
                    $('.remove').remove();
                }
                $('.tape').css("marginLeft", '0px');
                var thumb = '<td align="center" class="thumb" ><a style="width: '+width+'px; float: left" href="' + data['target'] + '#top_display_media"><img border="0"  class="strip_image" src="' + data['url'] + '"/></a></td>';
                $('.tape tr').append(thumb);
                tempWidth = parseInt(width) +3;
                $('.tape').animate({
                    marginLeft: "-"+tempWidth+"px"
                });
                
                $('.thumb').eq(0).addClass("remove");
            });
        } else {
            var itemLength = $(".tape tr > .thumb").length;
            if (itemLength == (maxItems+1)) {
                $('.remove').remove();
            }
            $('.tape').css("marginLeft", '0px');
            var thumb = '<td align="center"  class="thumb" ><a style="width: '+width+'px; float: left" href="' + link_cache[nextPosition + $go_next] + '#top_display_media"><img border="0"  class="strip_image" src="' + url_cache[nextPosition + $go_next] + '"/></a></td>';
            $('.tape tr').append(thumb);
            tempWidth = parseInt(width) +3;
            $('.tape').animate({
                marginLeft: "-"+tempWidth+"px"
            });
            
            $('.thumb').eq(0).addClass("remove");
        }
    });


    // Bind a onclick event on element with id filmstrip_prev
    $('#filmstrip_prev').click(function() {
        // Get the url for previous set of thumbnails. This will be the href of 'previous' link
        nextPosition = nextPosition -1;
    
        if(nextPosition >= ((NumberOfPics-1)-(picQueue-1))) {
            var nextPosition_to = (NumberOfPics-1)-(picQueue-1);
        } else {
            var nextPosition_to = nextPosition; 
        }
        
        if(nextPosition_to <= (NumberOfPics-(picQueue))) {
            $('#filmstrip_next').show();
        }
        
        if(nextPosition_to < (picQueue)) {
            $('#filmstrip_prev').hide();            
        }
                    
        if(!url_cache[nextPosition-$go_next]) {
    
            if (!isNaN(cat)) {
                addCat = '&cat=' + cat;
            } else {
                addCat = "";
            }
                
            var prev_url = "displayimage.php?film_strip=1&album="+album+"&ajax_call=1&pos="+nextPosition+addCat;  
            $.getJSON(prev_url, function(data) {
                url_cache[nextPosition-$go_next]  = data['url'];
                link_cache[nextPosition-$go_next] = data['target'];
            
                var itemLength = $(".tape tr> .thumb").length;
                if (itemLength == (maxItems+1)) {
                    $('.remove').remove();
                }
                
                $('.tape').css("marginLeft", '-'+width+'px');
                var thumb_prev = '<td align="center" class="thumb" ><a style="width: '+width+'px; float: left" href="'+data['target']+'#top_display_media"><img border="0" class="strip_image" src="'+data['url']+'"/></a></td>';
                $('.tape tr').prepend(thumb_prev);
    
                $('.tape').animate({
                    marginLeft: "0px"
                });
    
                $('.thumb').eq((maxItems)).addClass("remove");
            });
        } else {
            var itemLength = $(".tape tr > .thumb").length;
            if (itemLength == (maxItems+1)) {
                $('.remove').remove();
            }
    
            $('.tape').css("marginLeft", '-'+width+'px');
            var thumb_prev = '<td align="center" class="thumb" ><a style="width: '+width+'px; float: left" href="'+link_cache[nextPosition-$go_next]+'#top_display_media"><img border="0"  class="strip_image" src="'+url_cache[nextPosition-$go_next]+'"/></a></td>';
            $('.tape tr').prepend(thumb_prev);
            
            $('.tape').animate({
                marginLeft: "0px"
            });

            $('.thumb').eq(maxItems).addClass("remove");
        }
        
    });
});


/**
* This part is the rating part of displayimage.php
*/
function rate(obj){
    $.get('ratepic.php?rate=' + obj.title + '&pic=' + js_vars.picture_id + '&form_token=' + js_vars.form_token, function(data){
        //create a JSON object of the returned data
        var json_data = eval('(' + data + ')');
        //check the data and respond upon it
        js_vars.lang_rate_pic = json_data.msg;
        if(json_data.status == 'success'){
            //vote casted, update rating and show user
            js_vars.rating = json_data.new_rating;
            js_vars.can_vote = "false";
            $('#voting_title').html( json_data.new_rating_text );   
        }
        displayStars();

    });

}

function changeover(obj){
    var id = obj.title;
    for(i=0; i<id; i++) {
        $('#' + js_vars.picture_id + '_' + (i+1)).attr('src', js_vars.theme_dir + 'images/rate_new.gif');          
    }
}

function changeout(obj){
    var id = obj.title; 
    for(i=0; i<id; i++) {
        var img = js_vars.theme_dir + 'images/rate_full.gif';
        if(js_vars.rating <= i) {
            img = js_vars.theme_dir + 'images/rate_empty.gif';
        }
        $('#' + js_vars.picture_id + '_' + (i+1)).attr('src', img);     
    }
}

function displayStars(){
    if(js_vars.stars_amount != 'fallback'){
        $('#star_rating').empty();
        var center = document.createElement('center');
        center.id = 'rs_center';
        if(js_vars.can_vote){
            center.innerHTML = js_vars.lang_rate_pic + '<br />';
        }
        center.innerHTML += buildRating();
        $('#star_rating').append(center);
    }
}

function buildRating(){
    var rating_stars = '';
    
    if(!isNumber(js_vars.stars_amount)){
        //default to 5 stars
        js_vars.stars_amount = 5;
    }
    for(i=0; i < js_vars.stars_amount; i++ ){
        var star11 = 'rate_full';
        var star12 = 'rate_new';
        if(i > js_vars.rating - 1) {
            star11 = star12 = 'rate_empty';
        }
        if(js_vars.can_vote == 'true'){
            rating_stars += '<img style="cursor:pointer" src="' + js_vars.theme_dir + 'images/' + star11 + '.gif" id="' + js_vars.picture_id + '_'+(i+1)+'"'
            rating_stars += ' title="' + (i+1) + '" onmouseout="changeout(this)" onmouseover="changeover(this)" onclick="rate(this)" />';
        }else{
            rating_stars += '<img src="' + js_vars.theme_dir + 'images/' + star11 + '.gif" alt="' + js_vars.rating + '" title="' + js_vars.rating + '"/>';
        }               
    }
    return rating_stars;
}

function isNumber(val){
    return /^-?((\d+\.?\d?)|(\.\d+))$/.test(val);
}

function printSlideshowButton(){
    var btn = '<a href="' + js_vars.buttons.slideshow_tgt + '" class="navmenu_pic" title="' + js_vars.buttons.slideshow_title + '" rel="nofollow"><img src="' + js_vars.buttons.loc;
    btn += 'images/navbar/slideshow.png" border="0" align="middle" alt="' + js_vars.buttons.slideshow_title + '" /></a>';
    $('#slideshow_button').append(btn);
}

function printPicInfoButton(){
    var btn = '<a href="javascript:;" class="navmenu_pic" onclick="blocking(\'picinfo\',\'yes\', \'block\'); return false;" title="' + js_vars.buttons.pic_info_title;
    btn += '" rel="nofollow"><img src="' + js_vars.buttons.loc + 'images/navbar/info.png" border="0" align="middle" alt="' + js_vars.buttons.pic_info_title + '" /></a>';
    $('#pic_info_button').append(btn);
}