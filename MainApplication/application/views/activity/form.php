<div id="wrapper">
<?php echo get_header(); ?>
  <div class="row-fluid">
    <div class="span3 well" id="leftpanel">
    	<?php get_sidebarmenu('add_activity'); ?>
    </div>
    <div class="span9 well" id="rightpanel">
    	<h3>เพิ่มกิจกรรมใหม่</h3>
     	<hr/>   
      <form action="" method="post" accept-charset="utf-8" class="form-horizontal">
        <div  class="control-group">
        	<label class="control-label"><?php echo $form['labels_text']['name']; ?></label>
        	<div class="controls">
            <?php echo $form['renders']['name']; ?>
            <br><span class="help-inline"><?php echo $form['msgs']['name']; ?></span>
          </div>
        </div>
        <div  class="control-group">
        	<label class="control-label"><?php echo $form['labels_text']['location']; ?></label>
        	<div class="controls">
            <?php echo $form['renders']['location']; ?>
            <br><span class="help-inline"><?php echo $form['msgs']['location']; ?></span>
          </div>
        </div>
        <div  class="control-group">
        	<label class="control-label"><?php echo $form['labels_text']['time_start']; ?></label>
        	<div class="controls">
            	<?php echo $form['renders']['time_start']; ?>
              <br><span class="help-inline"><?php echo $form['msgs']['time_start']; ?></span>
        	</div>
        </div>
        <div  class="control-group">
          <label class="control-label"><?php echo $form['labels_text']['time_end']; ?></label>
          <div class="controls">
              <?php echo $form['renders']['time_end']; ?>
              <br><span class="help-inline"><?php echo $form['msgs']['time_end']; ?></span>
          </div>
        </div>
        <div  class="control-group">
        	<label class="control-label"><?php echo $form['labels_text']['organized_by']; ?></label>
          <div class="controls">
              <?php echo $form['renders']['organized_by']; ?>
              <br><a href="#" onClick="$('#organized_by').val('สโมสรนักศึกษา');"> + สโมสรนักศึกษา </a>
              <br><a href="#" onClick="$('#organized_by').val('คณะเทคโนโลยีสารสนเทศ');"> + คณะเทคโนโลยีสารสนเทศ </a>   
              <br><span class="help-inline"><?php echo $form['msgs']['organized_by']; ?></span>
          </div>
        </div>
        <div  class="control-group">
          <label class="control-label"><?php echo $form['labels_text']['description']; ?></label>
          <div class="controls">
              <?php echo $form['renders']['description']; ?>
              <br><span class="help-inline"><?php echo $form['msgs']['description']; ?></span>
          </div>
        </div>
        <hr/>
        <div  class="control-group">                      	
        	<div class="controls">                           	
           		<button type="submit" class="btn btn-primary">Save</button>
           	</div>
        </div>                            
      </form>
    </div>
  </div>
</div>