
<?php
class User extends DataMapper {
    /*
    var $has_many = array(
        'activity' => array(            
            'class' => 'activity',          
            'other_field' => 'user',      
            'join_self_as' => 'user',     
            'join_other_as' => 'activity',     
            'join_table' => 'user_has_activity'
            ),
     	'permission_enroll' => array(            
            'class' => 'permission_enroll',          
            'other_field' => 'user',    
            'join_self_as' => 'user',     
            'join_other_as' => 'permission_enroll',     
            'join_table' => 'user_has_permission_enroll')
        //  array('user_has_activity')
    );
    */
    var $has_many = array('user_has_activity','user_has_permission_enroll');

}

/* End of file User.php */
/* Location: ./application/model/User.php */