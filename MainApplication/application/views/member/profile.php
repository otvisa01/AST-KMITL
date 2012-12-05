<div id="wrapper">
<?php echo get_header(); ?>
	<div class="row-fluid">
		<div class="span3 well" id="leftpanel">
		<?php get_sidebarmenu('view_profile'); ?>
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