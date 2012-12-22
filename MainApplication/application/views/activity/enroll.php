<div id="wrapper">
<?php echo get_header(); ?>
	<div class="row-fluid">
		<aside id="sidebar" class="span3">
		<?php echo get_sidebarmenu('list_activity'); ?>
		</aside>
		<section id="content" class="span9">
			<h3>ลงทะเบียนทำกิจกรรม</h3>
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
			<div class="enroll_list" id="list_student">
				<script type="text/javascript">
					$.get('<?php echo base_url()?>activity/lists_enroll/<?php echo $activity_id?>',
						function(data){
							$('#list_student').html(data);
						}
					);
				</script>
			</div>
		</section>
	</div>
</div>