<?php

header("Content-type: text/css; charset=TIS-620"); 
header("Cache-Control: must-revalidate");
$offset = 60 * 60 * 24 * 3; // กำหนด expire date ในอีก 3 วัน ดูจาก * 3
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
header($ExpStr);

function compress($buffer) {
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
	$buffer = preg_replace('/\/\/(.*)/','',$buffer);
	$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
	return $buffer;
} 



if ( ! isset($_GET['app']))
{
	// Static Import
	//echo file_get_contents("normalize.css");
	echo file_get_contents("bootstrap.css");
	echo file_get_contents("bootstrap-responsive.css");
	echo file_get_contents("bootstrap.custom.css");
	echo file_get_contents("custom.css");
}
else
{
	// Dynamic import
	if ( ! isset($_GET['page']))
	{
		echo @file_get_contents('app/' . $_GET['app'] . '.css');
	}
	else
	{
		echo @file_get_contents('app/' . $_GET['app'] . '.' . $_GET['page'] . '.css');
	}
}
?>