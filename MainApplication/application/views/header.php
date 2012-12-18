<?php $user = get_authen(); ?>
<header id="header">
	<div id="logo" class="pull-left">
		<img src="<?php echo base_url()?>static/img/template/ATS_Logo_2.png" alt="ระบบทรานสคริปกิจกรรม คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง">
	</div>
	<div id="login_stat" class="pull-right">
		Login as  <?php echo $user->full_name(); ?> (<?php echo $user->username; ?>)<br>
		<a href="<?php echo base_url()?>logout" class="btn btn-mini btn-primary">Logout</a>
	</div>
</header>