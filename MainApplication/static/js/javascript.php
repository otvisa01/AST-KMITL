<?php

header("Content-type: application/javascript; charset=UTF-8"); 
header("Cache-Control: must-revalidate");
$offset = 60 * 60 * 24 * 3;
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
header($ExpStr);

function compress($buffer) {
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
	$buffer = preg_replace('/\/\/(.*)/','',$buffer);
	$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
	return $buffer;
} 

if ( ! isset($_GET['app']) || ( isset($_GET['main']) && $_GET['main'] == TRUE ))
{
	// Static Import
	echo file_get_contents('jquery.1.8.3.js');
	echo file_get_contents('jquery-ui.1.9.2.js');
	echo file_get_contents('jquery-ui.datetimepicker.js');
	echo file_get_contents('jquery.bootstrap.js');
	echo file_get_contents('underscore.js');
	echo file_get_contents('jquery.custom.js');
}
else
{
	// Dynamic import
	if ( ! isset($_GET['page']))
	{
		echo @file_get_contents('app/' . $_GET['app'] . '.js');
	}
	else
	{
		echo @file_get_contents('app/' . $_GET['app'] . '.' . $_GET['page'] . '.js');
	}
}

?>