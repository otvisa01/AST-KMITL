
$(document).ready(function() {
	
	var pathModule = ['home', 'animelist'];
	var pathArray = window.location.pathname.split( '/' );
	$('#menu-'+pathArray[2]).addClass('active');
	
});