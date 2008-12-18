function check(state){
	jQuery.each($("input[name='eid[]']"), function(){
		$(this).attr('checked', state);					  
	});
}

function agreesubmit(){
	$("input[type='submit'][name='delete']").attr('disabled', ($('#agreecheck').attr('checked')) ? false : true);
}

function defaultagree(){
	if ($('#agreecheck').attr('checked'))
		return true;
	else{
		alert(js_vars.ecards_delete_confirm);
		return false;
	}
}