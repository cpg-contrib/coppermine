/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.2
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/
$(document).ready(function() {
    addSortOptions();
});

function addSortOptions(){
	var extra_att = '';
	var sortable = '';
	// Change the separator to '<br />' for vertical stacking
	var separator = '&nbsp;&bull;&nbsp;';
	sortable += '<span class="sortorder_options">';
	sortable += js_vars.sort_vars.sort_title;
	sortable += '</span>';
	sortable += '&nbsp;';
	sortable += '<span class="statlink">';
	sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=ta" title="' + js_vars.sort_vars.sort_ta + '">+</a>';
	sortable += '</span>';
	sortable += '&nbsp;';
	sortable += '<span class="statlink">';
	sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=td" title="' + js_vars.sort_vars.sort_td + '">-</a>';
	sortable += '</span>';
	sortable += separator;
	
    sortable += '<span class="sortorder_options">';
    sortable += js_vars.sort_vars.sort_name;
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=na" title="' + js_vars.sort_vars.sort_na + '">+</a>';
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=nd" title="' + js_vars.sort_vars.sort_nd + '">-</a>';
    sortable += '</span>';
    sortable += separator;
    
    sortable += '<span class="sortorder_options">';
    sortable += js_vars.sort_vars.sort_date;
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=da" title="' + js_vars.sort_vars.sort_da + '">+</a>';
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=dd" title="' + js_vars.sort_vars.sort_dd + '">-</a>';
    sortable += '</span>';
    sortable += separator;
    
    sortable += '<span class="sortorder_options">';
    sortable += js_vars.sort_vars.sort_position;
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=pa" title="' + js_vars.sort_vars.sort_pa + '">+</a>';
    sortable += '</span>';
    sortable += '&nbsp;';
    sortable += '<span class="statlink">';
    sortable += '<a href="thumbnails.php?album=' + js_vars.sort_vars.aid + '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=pd" title="' + js_vars.sort_vars.sort_pd + '">-</a>';
    sortable += '</span>';
    
    $('#sortorder_cell').append(sortable); 
}