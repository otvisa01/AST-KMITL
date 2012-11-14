<?php
	
	// Check title define
	if ( ! isset($title))
	{
		$tiitle = 'MyService';	
	}
	else
	{
		$title = 'MyService : ' . $title;	
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
	<link href="<?php echo PATH;?>/static/css/style.php" rel="stylesheet">
	<script src="<?php echo PATH;?>/static/js/javascript.php"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
		var PATH = '<?php echo PATH;?>';
	</script>
	<?php echo $head;?>
	</head>
	<body>
        <div class="navbar navbar-fixed-top">
        	<div class="navbar-inner">
       			<div class="container">
        			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
        			</a>
       				<a class="brand" href="#">MyService</a>
        			<div class="nav-collapse collapse">
        				<ul class="nav">
        					<li id="menu-home"><a href="<?php echo PATH;?>/home">Home</a></li>
        					<li id="menu-animelist" class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Anime list <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                               		<li class="nav-header">Anime</li>
                                    <li><a href="<?php echo PATH;?>/animelist">View and manage</a></li>
                                    <li><a href="<?php echo PATH;?>/animelist/add">Add</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Storage</li>
                                    <li><a href="<?php echo PATH;?>/animelist/storages">View and manage</a></li>
                                    <li><a href="<?php echo PATH;?>/animelist/storage/add">Add</a></li>
                                </ul>
        					</li>
       						<li id="menu-moneybook"><a href="<?php echo PATH;?>/moneybook">Money book</a></li>
        				</ul>
        			</div><!--/.nav-collapse -->
        		</div>
        	</div>
        </div>
    	
		<?php echo $body;?>
        
        </body>
</html>