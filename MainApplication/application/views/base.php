<?php
	
	// Check title define
	if ( ! isset($title))
	{
		$tiitle = 'IT Transcript System';	
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
	<link href="<?php echo base_url()?>static/css/style.php?app=home&main=true" rel="stylesheet">
	<script src="<?php echo base_url()?>static/js/javascript.php"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
		var PATH = '<?php echo base_url();?>';
	</script>
	<?php echo $head;?>
	</head>
	<body>
		<?php echo $body;?>
    </body>
</html>