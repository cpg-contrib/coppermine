/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.1
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/js/banning.js $
  $Revision: 5258 $
  $LastChangedBy: gaugau $
  $Date: 2008-11-17 21:43:14 +0100 (Mo, 17 Nov 2008) $
**********************************************/

function validateContactFormFields() {
	if (js_vars.contact.check.one) {
		if(document.contactForm.sender_name.value == '') {
			$('#name_remark').css('display', 'block');
			document.contactForm.sender_name.focus();
			return false;
		}else{
			$('#name_remark').css('display', 'none');
		}
	}
	
	if (js_vars.contact.check.two) {
		if(document.contactForm.sender_name.value == js_vars.contact.your_name) {
			 alert(js_vars.contact.name_field_invalid);
			 document.contactForm.sender_name.value = '';
			 $('#name_remark').css('display', 'block');
			 document.contactForm.sender_name.focus();
			 return false;
		}else{
			$('#name_remark').css('display', 'none');
		}
	}
	
	if (js_vars.contact.check.three) {
		if(document.contactForm.sender_email.value == '') {
			$('#email_remark').css('display', 'block');
			document.contactForm.sender_email.focus();
			return false;
		}else{
			$('#email_remark').css('display', 'none');
		}

		string=document.contactForm.sender_email.value;
		if (string.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1) {
			$('#email_remark').css('display', 'block');
			alert(js_vars.contact.email_field_invalid);
			document.contactForm.sender_email.focus();
			return false;
		}else{
			$('#email_remark').css('display', 'none');
		}
	}
	
	if (js_vars.contact.check.four) {
		if(document.contactForm.subject.value == '') {
			 $('#subject_remark').css('display', 'block');
			 document.contactForm.subject.focus();
			 return false;
		}else{
			$('#subject_remark').css('display', 'none');
		}
	}
	
	if(document.contactForm.message.value == '') {
		 $('#message_remark').css('display', 'block');
		 document.contactForm.message.focus();
		 return false;
	}else{
		$('#message_remark').css('display', 'none');
	}
}