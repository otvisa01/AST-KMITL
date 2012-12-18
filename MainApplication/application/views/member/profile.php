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
			<blockquote class="activity-item">
				<p>
					<div class="activity-item-title pull-left">
					กิจกรรม : <?php echo $activity->name; ?>
					</div>
					<div class="activity-item-action pull-right">
						<a href="<?php echo base_url()?>activity/enrol/<?php echo $activity->id; ?>" class="btn btn-primary"><i class="icon-question-sign"></i> Questionnaire</a>
						<a href="<?php echo base_url()?>activity/view/<?php echo $activity->id; ?>" class="btn btn-primary"><i class="icon-tasks"></i> View</a>
					</div>
				</p>
				<br><small>
					จัดเมื่อ : <?php echo $activity->start_time; ?> 
				</small>
				<small>
					เวลาที่ใช้ในกิจกรรม : <?php echo $activity->get_time_to_do() ?>
				</small>
			</blockquote>
			<?php
				}
			?>
			</div>
		</section>
	</div>
</div>