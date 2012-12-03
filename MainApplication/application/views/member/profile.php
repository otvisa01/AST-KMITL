<div id="wrapper">
  <div class="container container-fluid">
  	<div id="header">
      	<div id="logo">
          	<img src="<?php echo base_url()?>static/img/template/ATS_Logo_2.png" width="430" height="92" alt="ระบบทรานสคริปกิจกรรม คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง" />
          </div>
          <div id="login_stat">
          	Login as <?php echo $user->username; ?><br>
              <?php echo $user->full_name(); ?><br>
              <a href="<?php echo base_url()?>member/logout" class="btn btn-mini btn-primary">Logout</a>
          </div>
      </div>
  <div class="row-fluid">
  <div class="span3 well" id="leftpanel">
              <ul class="nav nav-list">
                <li class="nav-header">Sidebar</li>
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="nav-header">Sidebar</li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="nav-header">Sidebar</li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
              </ul>
          </div>
      	<div class="span9" id="rightpanel">
          	<h3>กิจกรรมที่ทำล่าสุด</h3>
  <div class="activity_table_container" id="student_table_container">
  <!--load activity!-->
  <?php echo $activity; ?>
  </div>
      	</div>

    	</div>
  </div>
</div>