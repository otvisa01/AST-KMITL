
<?php

class Permission_enroll_model extends DataMapper {
	var $table = 'permission_enroll';
	var $has_one =array('activity_model', 'user_model');

/* End of file permission_enroll_model.php */
/* Location: ./application/controller/permission_enroll_model.php */