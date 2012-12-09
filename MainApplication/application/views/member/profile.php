<div id="wrapper">
<?php echo get_header(); ?>
	<div class="row-fluid">
		<aside id="sidebar" class="span3">
		<?php echo get_sidebarmenu('view_profile'); ?>
		</aside>
		<section id="content" class="span9">
			<h3>กิจกรรมที่ทำล่าสุด</h3>
			<hr>
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
		</section>
	</div>
</div>