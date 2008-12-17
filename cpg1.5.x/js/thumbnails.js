/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.0
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/js/scripts.js $
  $Revision: 5401 $
  $LastChangedBy: saweyyy $
  $Date: 2008-12-15 10:45:07 +0100 (ma, 15 dec 2008) $
**********************************************/
$(document).ready(function() {
	addSortable();
});

function addSortable(){
	var extra_att = '';
	if(js_vars.not_default_theme != undefined){
		extra_att = ' style="font-size: 100%;"';
	}
	var sortable =	'		<table cellpadding="0" cellspacing="0">';
	sortable +=	'		<tr>';
	sortable +=	'				<td class="sortorder_options"' + extra_att + '>' + js_vars.sort_vars.sort_title + '</td>';
	sortable +=	'				<td class="sortorder_options"' + extra_att + '><span class="statlink">&nbsp;<a href="thumbnails.php?album=' + js_vars.sort_vars.aid
	sortable += '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=ta" title="' + js_vars.sort_vars.sort_ta + '">+</a>&nbsp;</span></td>';
	sortable +=	'				<td class="sortorder_options"' + extra_att + '><span class="statlink">&nbsp;<a href="thumbnails.php?album=' + js_vars.sort_vars.aid
	sortable += '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=td" title="' + js_vars.sort_vars.sort_td + '">-</a>&nbsp;</span></td>';
	sortable +=	(extra_att == '') ? '		</tr><tr>' : '		<td></td>';
	sortable +=	'				<td class="sortorder_options"' + extra_att + '>' + js_vars.sort_vars.sort_name + '</td>';
	sortable +=	'				<td class="sortorder_options"' + extra_att + '><span class="statlink">&nbsp;<a href="thumbnails.php?album=' + js_vars.sort_vars.aid
	sortable += '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=na" title="' + js_vars.sort_vars.sort_na + '">+</a>&nbsp;</span></td>';
	sortable +=	'				<td class="sortorder_options"' + extra_att + '><span class="statlink">&nbsp;<a href="thumbnails.php?album=' + js_vars.sort_vars.aid
	sortable += '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=nd" title="' + js_vars.sort_vars.sort_nd + '">-</a>&nbsp;</span></td>';
	sortable +=	(extra_att == '') ? '		</tr><tr>' : '		<td></td>';
	sortable +=	'				<td class="sortorder_options"' + extra_att + '>' + js_vars.sort_vars.sort_date + '</td>';
	sortable +=	'				<td class="sortorder_options"' + extra_att + '><span class="statlink">&nbsp;<a href="thumbnails.php?album=' + js_vars.sort_vars.aid
	sortable += '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=da" title="' + js_vars.sort_vars.sort_da + '">+</a>&nbsp;</span></td>';
	sortable +=	'				<td class="sortorder_options"' + extra_att + '><span class="statlink">&nbsp;<a href="thumbnails.php?album=' + js_vars.sort_vars.aid
	sortable += '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=dd" title="' + js_vars.sort_vars.sort_dd + '">-</a>&nbsp;</span></td>';
	sortable +=	(extra_att == '') ? '		</tr><tr>' : '		<td></td>';
	sortable +=	'				<td class="sortorder_options"' + extra_att + '>' + js_vars.sort_vars.sort_position + '</td>';
	sortable +=	'				<td class="sortorder_options"' + extra_att + '><span class="statlink">&nbsp;<a href="thumbnails.php?album=' + js_vars.sort_vars.aid
	sortable += '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=pa" title="' + js_vars.sort_vars.sort_pa + '">+</a>&nbsp;</span></td>';
	sortable +=	'				<td class="sortorder_options"' + extra_att + '><span class="statlink">&nbsp;<a href="thumbnails.php?album=' + js_vars.sort_vars.aid
	sortable += '&amp;page=' + js_vars.sort_vars.page + '&amp;sort=pd" title="' + js_vars.sort_vars.sort_pd + '">-</a>&nbsp;</span></td>';
	sortable +=	'		</tr>';
	sortable +=	'		</table>';
	$('#sortorder_cell').append(sortable);	
}
