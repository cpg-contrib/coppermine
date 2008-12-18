function init_utils(){
	jQuery.each($("span[id$='_wrapper']"), function(){
		$(this).css('display', 'none');					  
	});
	jQuery.each($("input[type='radio'][name='action']"), function(){
		$(this).change(function(){
			jQuery.each($("input[type='radio'][name='action']"), function(){
				$('#' + $(this).attr('id') + '_wrapper').css('display', ($(this).attr('checked')) ? 'block' : 'none');					  
			});
		});				  
	});
}

addonload('init_utils()');