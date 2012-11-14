<!DOCTYPE html> 
<html>
	<head>
    	<meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/home.css" />
        <script type="text/javascript" src="js/jquery-1.8.2.min.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>        
	</head>
    <body>     
        <div id="container">
        	<div id="loginbox">
            	<div id="logo"><img src="<?php echo base_url()?>img/home/ATS_Logo.png" /></div>
                <?php echo form_open('login'); ?>
              	<div id="login_form">              	
                    <div id="form_input">
                      	<input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" placeholder="Username" />
                      	<input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>"  placeholder="Password" />              
                    </div>   
                    <div id="submit_bt">
        				<?php echo validation_errors(); ?>
                        <button class="btn btn-primary">Sign in</button>
                    </div>                                
                </div>
                <?php echo form_close(); ?>
            </div>            
        </div>
	</body>
</html>