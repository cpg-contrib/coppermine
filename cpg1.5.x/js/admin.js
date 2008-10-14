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
  $HeadURL$
  $Revision: 4224 $
  $LastChangedBy: gaugau $
  $Date: 2008-01-26 12:42:00 +0100 (Sa, 26 Jan 2008) $
**********************************************/

function resetToDefault(theFieldId, fieldType, numberOfItems) 
{
    //var foo = theFieldId + fieldType + numberOfItems;
    //alert(numberOfItems);
    //alert(fieldType);
    if(fieldType == 'textfield' || fieldType == 'password') {
        document.getElementById(theFieldId).value = document.getElementById('reset_default_' + theFieldId).value;
        document.getElementById('reset_default_' + theFieldId).style.display = 'none';
        document.getElementById('reset_default_' + theFieldId).checked = true;
        return;
    }
    if(fieldType == 'checkbox') {
        if (document.getElementById('reset_default_' + theFieldId).value == 1) {
            document.getElementById(theFieldId).checked = true;
        } else {
            document.getElementById(theFieldId).checked = false;
        }
        document.getElementById('reset_default_' + theFieldId).style.display = 'none';
        document.getElementById('reset_default_' + theFieldId).checked = true;
        return;
    }
    if(fieldType == 'radio') {
        document.getElementById(theFieldId + document.getElementById('reset_default_' + theFieldId).value).checked = true;
        document.getElementById('reset_default_' + theFieldId).style.display = 'none';
        document.getElementById('reset_default_' + theFieldId).checked = true;
        return;
    }
    if(fieldType == 'select') {
        for (var i = 0; i < numberOfItems; i++) {
            //alert(document.getElementById(theFieldId).options[i].value);
            if (document.getElementById(theFieldId).options[i].value == document.getElementById('reset_default_' + theFieldId).value) {
                document.getElementById(theFieldId).options[i].selected = true;
                document.getElementById('reset_default_' + theFieldId).style.display = 'none';
                document.getElementById('reset_default_' + theFieldId).checked = true;
                return; 
            }
        }
    }
}

function checkDefaultBox(theFieldId, fieldType, numberOfItems, warning) 
{
    // Each time a config field is being changed (onblur/onchange), this JS is being run to enable/disable the default checkbox
    if(warning != '') {
        alert(warning + ' ' + lang_warning_dont_submit);
    }
    if(fieldType == 'textfield' || fieldType == 'password') {
        if (document.getElementById(theFieldId).value != document.getElementById('reset_default_' + theFieldId).value) {
            document.getElementById('reset_default_' + theFieldId).style.display = 'inline';
            document.getElementById('reset_default_' + theFieldId).checked = false;
            document.getElementById('reset_default_' + theFieldId).title = lang_reset_to_default;
        } else {
            document.getElementById('reset_default_' + theFieldId).style.display = 'none';
            document.getElementById('reset_default_' + theFieldId).checked = true;
            document.getElementById('reset_default_' + theFieldId).title = lang_reset_to_default + ': '+  lang_no_change_needed + ' (' + document.getElementById('reset_default_' + theFieldId).value + ')';
        }
        return;
    }
    if(fieldType == 'checkbox') {
        var checkboxNeedsChangeToChecked = 0;
        if (document.getElementById(theFieldId).checked == true && document.getElementById('reset_default_' + theFieldId).value == 1) {
            checkboxNeedsChangeToChecked = 1;
        }
        if (document.getElementById(theFieldId).checked == false && document.getElementById('reset_default_' + theFieldId).value == 0) {
            checkboxNeedsChangeToChecked = 1;
        }
        if (checkboxNeedsChangeToChecked == 0) {
            document.getElementById('reset_default_' + theFieldId).style.display = 'inline';
            document.getElementById('reset_default_' + theFieldId).checked = false;
            document.getElementById('reset_default_' + theFieldId).title = lang_reset_to_default;
        } else {
            document.getElementById('reset_default_' + theFieldId).style.display = 'none';
            document.getElementById('reset_default_' + theFieldId).checked = true;
            document.getElementById('reset_default_' + theFieldId).title = lang_reset_to_default + ': ' + lang_no_change_needed + ' (' + document.getElementById('reset_default_' + theFieldId).value + ')';
        }
        return;
    }
    if(fieldType == 'radio') {
        // theFieldId has got a number appended to it - let's strip it
        theLoopCounterIndex = theFieldId.slice((theFieldId.length - 1),theFieldId.length); 
        theFieldId = theFieldId.slice(0,(theFieldId.length - 1));
        if (theLoopCounterIndex != document.getElementById('reset_default_' + theFieldId).value) {
            document.getElementById('reset_default_' + theFieldId).style.display = 'inline';
            document.getElementById('reset_default_' + theFieldId).checked = false;
            document.getElementById('reset_default_' + theFieldId).title = lang_reset_to_default;
        } else {
            document.getElementById('reset_default_' + theFieldId).style.display = 'none';
            document.getElementById('reset_default_' + theFieldId).checked = true;
            document.getElementById('reset_default_' + theFieldId).title = lang_reset_to_default + ': ' + lang_no_change_needed + ' (' + document.getElementById('reset_default_' + theFieldId).value + ')';
        }
        return;
    }
    if(fieldType == 'select') {
        for (var i = 0; i < numberOfItems; i++) {
            if (document.getElementById(theFieldId).options[i].selected == true) {
                if (document.getElementById(theFieldId).options[i].value == document.getElementById('reset_default_' + theFieldId).value) {
                    document.getElementById('reset_default_' + theFieldId).style.display = 'none';
                    document.getElementById('reset_default_' + theFieldId).checked = true;
                    document.getElementById('reset_default_' + theFieldId).title = lang_reset_to_default + ': ' + lang_no_change_needed + ' (' + document.getElementById('reset_default_' + theFieldId).value + ')';
                    return;
                } else {
                    document.getElementById('reset_default_' + theFieldId).style.display = 'inline';
                    document.getElementById('reset_default_' + theFieldId).checked = false;
                    document.getElementById('reset_default_' + theFieldId).title = lang_reset_to_default;
                    return;
                }
            }
        }
    }
}

function deleteUnneededFields() 
{
    $('.deleteOnSubmit').remove();
    return true;
}