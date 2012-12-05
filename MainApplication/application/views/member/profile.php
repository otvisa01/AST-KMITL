<div id="wrapper">
	<div id="header">
  	<div id="logo" class="pull-left">
      	<img src="<?php echo base_url()?>static/img/template/ATS_Logo_2.png" alt="ระบบทรานสคริปกิจกรรม คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง" />
    </div>
    <div id="login_stat" class="pull-right">
    	Login as  <?php echo $user->full_name(); ?> (<?php echo $user->username; ?>)<br>
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
    <div class="span9 well" id="rightpanel">
     	<h3>กิจกรรมที่ทำล่าสุด</h3>
      <div class="activity_table_container" id="student_table_container">
      <?php
        foreach ($user->get_activities() as $list)
        {
          $activity = $list->activity->get();
      ?>
        <blockquote>
          <p>รหัสกิจกรรม : XXXXXX  ชื่อกิจกรรม : <?php echo $activity->name; ?></p>
          <small>จัดเมื่อ : <?php echo $activity->start_time; ?> เวลาทำกิจกรรม(ชม.) : <?php echo $activity->get_time_to_do() ?></small>
        </blockquote>
      <?php
        }
      ?>
      </div>
    </div>
  </div>
</div>