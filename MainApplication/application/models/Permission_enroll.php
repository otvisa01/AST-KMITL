
<?php

class Permission_enroll extends DataMapper {

	var $has_one =array('activity');
	var $has_many = array('user_has_permission_enroll');

/* End of file Permission_enroll.php */
/* Location: ./application/controller/Permission_enroll.php */