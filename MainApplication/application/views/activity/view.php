<div id="wrapper">
<?php echo get_header(); ?>
	<div class="row-fluid">
		<aside id="sidebar" class="span3">
		<?php echo get_sidebarmenu('list_activity'); ?>
		</aside>
		<section id="content" class="span9">
			<h3>รายละเอียดกิจกรรม</h3>
			<hr>
			<div class="activity_detail_container" id="student_detail_container">
			<?php
				foreach ($activities as $activity)
				{
					if($activity->id == $activity_id)
					{
			?>
						<div class="detail_container">
							<div class="left_label">
								ชื่อกิจกรรม : 
							</div>
							<div class="right_label">
								<?php echo $activity->name; ?>
							</div>
						</div>
						<div class="detail_container">
							<div class="left_label">
								คำอธิบายกิจกรรม :
							</div> 
							<div class="right_label">
								<?php echo $activity->description; ?>
							</div>
						</div>
						<div class="detail_container">
							<div class="left_label">
								ระยะเวลา :
							</div> 
							<div class="right_label">
								<?php echo $activity->start_time; ?>
							</div>
						</div>

			<?php
					}
				}
			?>	
			</div>
			<div id="button_zone">
				<a href="<?php echo base_url(); ?>activities/list" class="btn btn-primary">Back</a>
			</div>
		</section>
	</div>
</div>