
<?php
class User_has_permission_enroll extends DataMapper {

	var $table = 'user_has_permission_enrolls';
	var $has_one= array('permission_enroll','user');

/* End of file User_has_permission_enroll.php */
/* Location: ./application/models/User_has_permission_enroll.php */