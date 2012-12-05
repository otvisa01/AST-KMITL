<?php
	
	// Check title define
	if ( ! isset($title) || is_null($title) || $title == '' )
	{
		$title = 'IT Transcript System';	
	}
	else
	{
		$title = 'IT Transcript System : ' . $title;	
	}
	
	// Check body define
	if ( ! isset($body))
	{
		$body = '';
	}
	
	// Check head define
	if ( ! isset($head))
	{
		$head = '';
	}
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title;?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="IT Transcript System">
        <meta name="author" content="IT Transcript Developer Team">
		<?php echo get_style()."\r\n"; ?>
		<?php echo get_js()."\r\n"; ?>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript">
			var PATH = '<?php echo base_url();?>';
		</script>
		<?php echo $head."\r\n";?>
	</head>
	<body>
<?php echo $body; ?>
	</body>
</html>