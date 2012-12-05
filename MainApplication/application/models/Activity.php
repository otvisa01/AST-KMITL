
<?php

class Activity extends DataMapper {

    var $table = "activities";
    var $has_many=array('user_has_activity','permission_enroll');
      
 public function get_time_to_do()
    {
    	$this->load->helper('time');
    	$this->load->helper('date');
        return timespan(to_timestamp($this->start_time),to_timestamp($this->end_time));
}



}

/* End of file Activity.php */
/* Location: ./application/models/Activity.php */