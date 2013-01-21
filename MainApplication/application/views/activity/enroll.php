<div id="wrapper">
<?php echo get_header(); ?>
	<div class="row-fluid">
		<aside id="sidebar" class="span3">
		<?php echo get_sidebarmenu('list_activity'); ?>
		</aside>
		<section id="content" class="span9">
			<h3>ลงทะเบียนทำกิจกรรม : <?php echo $activity->name;?></h3>
			<hr>
			<div class="enroll_dtudent" id="student_enroll">
				<form action="" method="post" accept-charset="utf-8" class="form-horizontal">
        		<div  class="control-group">
        			<label class="control-label"><?php echo $form['labels_text']['enroll']; ?></label>
        			<div class="controls">
            			<?php echo $form['renders']['enroll']; ?>
            			<br><span class="help-inline"><?php echo $form['msgs']['enroll']; ?></span>
          			</div>
        		</div>
			</div>
			<hr>
			<h4>นักศึกษาที่ลงทะเบียนเสร็จสมบูรณ์</h4>
			<div class="enroll_list" id="list_student">
			<?php
				foreach ($users as $user)
				{
			?>
				<blockquote class="activity-item">
					<p>
						<div class="activity-item-title pull-left">
							<?php echo $user->first_name .' '.$user->last_name; ?>
						</div>
					</p>
					<br><small>
					
					</small>
				</blockquote>
			<?php
				}
			?>
			</div>
		</section>
	</div>
</div>