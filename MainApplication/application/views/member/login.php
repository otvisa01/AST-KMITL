
<div id="wrapper">
    <div id="loginbox">
        <div id="logo"><img src="<?php echo base_url()?>static/img/home/ATS_Logo.png"></div>
        <form action="" method="post" accept-charset="utf-8"> 
            <div id="login_form">
                <div class="alert alert-error hide"><?php echo $notify; ?></div>
                <div class="control-group">
                    <div class="controls">
                        <?php echo $form['renders']['username']; ?>
                        <br><span class="help-inline"><?php echo $form['msgs']['username']; ?></span>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <?php echo $form['renders']['password']; ?> 
                        <br><span class="help-inline"><?php echo $form['msgs']['password']; ?></span>          
                    </div>   
                </div>

                <div class="form-submit">
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>                                
            </div>
        </form>
    </div>            
</div>

<?php echo get_js('member','login'); ?>