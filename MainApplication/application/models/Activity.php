
<?php
class Activity extends DataMapper {
	/*
    var $has_many = array(
        'user' => array(          
            'class' => 'user',         
            'other_field' => 'activity',   
            'join_self_as' => 'activity',     
            'join_other_as' => 'user',     
            'join_table' => 'user_has_activity'),
         'permission_enroll' => array(
         	'class' => 'permission_enroll'
         	)
        );
        */
	var $has_many=array('user_has_activity','permission_enroll');
      
}
