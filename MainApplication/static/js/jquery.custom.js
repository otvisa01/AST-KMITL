
$(document).ready(function() {
	
	//////////////////	
	// Form validations
	//////////////////
	$('span.help-inline:empty').each(function() {
		$(this).hide();
	});
	
	$('span.help-inline:not(:empty)').each(function() {
		$(this).closest('.control-group').addClass('error');
	});

	//////////////////
	// Diable form on submit
	//////////////////	
	$('form').submit(function(){
		$('.hide_on_submit').hide();
		$('form, input, select, textarea')
			.removeAttr('disabled','disabled')
			.attr('readonly','readonly');
		//$('select').combobox('disabled');
		$('input[type="submit"], button[type="submit"]')
			.attr('disabled','disabled')
			.html('Please wait...');
	});
});