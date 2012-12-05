
$(document).ready(function() {
	
	//////////////////	
	// Form validations
	//////////////////
	$('.alert:empty').hide();
	
	$('.alert:not(:empty)').show();

	$('#username').focus();
	$('#loginbox').css('margin-top', ($(window).height()/2 - $('#loginbox').outerHeight()/2) - 35 );

});

$(window).resize(function(){
	$('#loginbox').css('margin-top', ($(window).height()/2 - $('#loginbox').outerHeight()/2) - 35 );
});