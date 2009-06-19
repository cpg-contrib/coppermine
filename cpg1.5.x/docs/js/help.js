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

$(document).ready(function()
{
	$('#toc').replaceWith('');
	$('#docheader').replaceWith('');
	$('#doc_footer').replaceWith('');
});

$(function() {
    $(".cpg_zebra tr:even").addClass("tableb");
	$(".cpg_zebra tr:odd").addClass("tableb_alternate");
});