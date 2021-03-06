<div id="wrapper">
<?php echo get_header(); ?>
  <div class="row-fluid">
    <aside  id="sidebar" class="span3">
    	<?php echo get_sidebarmenu('add_activity'); ?>
    </aside>
    <div id="content" class="span9">
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
        	<label class="control-label"><?php echo $form['labels_text']['start_time']; ?></label>
        	<div class="controls">
            	<?php echo $form['renders']['start_time']; ?>
              <br><span class="help-inline"><?php echo $form['msgs']['start_time']; ?></span>
        	</div>
        </div>
        <div  class="control-group">
          <label class="control-label"><?php echo $form['labels_text']['end_time']; ?></label>
          <div class="controls">
              <?php echo $form['renders']['end_time']; ?>
              <br><span class="help-inline"><?php echo $form['msgs']['end_time']; ?></span>
          </div>
        </div>
        <div  class="control-group">
        	<label class="control-label"><?php echo $form['labels_text']['organized_by']; ?></label>
          <div class="controls">
              <?php echo $form['renders']['organized_by']; ?>
              <br><a href="#" onClick="$('#organized_by').val('คณะเทคโนโลยีสารสนเทศ');"> + คณะเทคโนโลยีสารสนเทศ </a>
              <br><a href="#" onClick="$('#organized_by').val('สถาบันเทคโนโลยีพระจอเกล้าเฯลาดกระบัง');"> + สถาบันเทคโนโลยีพระจอเกล้าฯลาดกระบัง </a>
              <br><a href="#" onClick="$('#organized_by').val('สโมสรนักศึกษาคณะเทคโนโลยีสารสนเทศ');"> + สโมสรนักศึกษาคณะเทคโนโลยีสารสนเทศ </a>    
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