
<?php
class User_has_activity extends DataMapper {
	var $table = "user_has_activities";
	var $has_one = array(
		'user',
		'activity',
		'whoadd' => array(
            	'class' => 'user',
            	'other_field' => 'whoadd'
        	)
        );
}

/* End of file User_has_activity.php */
/* Location: ./application/model/User_has_activity.php */