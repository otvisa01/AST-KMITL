
        <div id="container">
            <div id="loginbox">
                <div id="logo"><img src="<?php echo base_url()?>static/img/home/ATS_Logo.png" /></div>
                <form action="" method="post" accept-charset="utf-8"> 
                    <div id="login_form">                       
                        <div id="form_input">
                            <?php echo $form['renders']['username']; ?>
                            <?php echo $form['msgs']['username']; ?> 
                            <?php echo $form['renders']['password']; ?> 
                            <?php echo $form['msgs']['password']; ?>             
                        </div>   
                        <div id="submit_bt">
                            <button class="btn btn-primary">Sign in</button>
                        </div>                                
                    </div>
                </form>
            </div>            
        </div>