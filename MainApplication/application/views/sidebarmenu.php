<ul class="nav nav-list">
	<li class="nav-header">Activity</li>
	<li<?php if ($current == 'add_activity') echo ' class="active"' ?>><a href="<?php echo base_url();?>activities/add">Add activity</a></li>
	<li<?php if ($current == 'list_activity') echo ' class="active"' ?>><a href="<?php echo base_url();?>activities/list">List activity</a></li>
	<li class="nav-header">Profile</li>
	<li<?php if ($current == 'view_profile') echo ' class="active"' ?>><a href="<?php echo base_url();?>profile">View profile</a></li>
	<li<?php if ($current == 'view_transcript') echo ' class="active"' ?>><a href="#">View transcript</a></li>
</ul>