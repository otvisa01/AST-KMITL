
<?php

class Activity_model extends DataMapper {

    var $table = "activity";
    var $has_many=array('user_has_activity_model','permission_enroll_model');
      
 public function get_time_to_do()
    {
    	$this->load->helper('time');
    	$this->load->helper('date');
        return timespan(to_timestamp($this->start_time),to_timestamp($this->end_time));
}



}

/* End of file activity_model.php */
/* Location: ./application/models/activity_model.php */