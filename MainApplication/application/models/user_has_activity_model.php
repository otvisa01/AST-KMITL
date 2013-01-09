
<?php

class User_has_activity extends DataMapper {
	
	var $table = "user_has_activity";
	var $has_one = array(
		'user_model',
		'activity_model',
		'whoadd' => array(
            	'class' => 'user_model',
            	'other_field' => 'whoadd'
        	)
        );

	 public function get_activities()
    {
        return $this->user_has_activity->get();
    }
}

/* End of file user_has_activity_model.php */
/* Location: ./application/model/user_has_activity_model.php */