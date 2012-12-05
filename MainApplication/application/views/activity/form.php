<?php get_header(); ?>
<div class="row-fluid">
  <div class="span3" id="leftpanel">
  	<?php get_sidebarmenu('add_activity'); ?>
  </div>
  <div class="span9" id="rightpanel">
  	<h3>เพิ่มกิจกรรมใหม่</h3>
   	<hr/>   
    <form class="form-horizontal">
      <div  class="control-group">
      	<label class="control-label">ชื่อกิจกรรม</label>
      	<div class="controls">
          	<input type="text"></input>
      	</div>
      </div>
      <div  class="control-group">
      	<label class="control-label">สถานที่จัด</label>
      	<div class="controls">
          	<input type="text"></input>
      	</div>
      </div>
      <div  class="control-group">
      	<label class="control-label">วันเริ่มกิจกรรม</label>
      	<div class="controls">
          	<input type="date"></input>
      	</div>
      </div>
      <div  class="control-group">
      	<label class="control-label">วันสิ้นสุดกิจกรรม</label>
      	<div class="controls">
          	<input type="date"></input>
      	</div>
      </div>
      <div  class="control-group">
      	<label class="control-label">จัดโดย</label>
      	<div class="controls">
          	<input type="text" id="createby_input"><br>
              <a href="#" onClick="$('#createby_input').val('สโมสรนักศึกษา');"> + สโมสรนักศึกษา </a>   <br>
              <a href="#" onClick="$('#createby_input').val('คณะเทคโนโลยีสารสนเทศ');"> + คณะเทคโนโลยีสารสนเทศ </a>                        	
      	</div>
      </div>
      <div  class="control-group">
      	<label class="control-label">รายระเอียดกิจกรรมเพิ่มเติม</label>
      	<div class="controls">
          	<textarea style="height:100px;width:300px;"></textarea>              	
     	    </div>
      </div>
      <hr/>
      <div  class="control-group">                      	
      	<div class="controls">                           	
         		<button type="submit" class="btn btn-primary">Save</button>  <button type="submit" class="btn">Clear</button>
         	</div>
      </div>                            
    </form>
  </div>
</div>