<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['add_enroll']['enroll'] = array(
				'type'		=> 'input',
				'label'		=> 'รหัสนักศึกษา',
				'form'		=> array(
					'name' 			=> 'enroll_key',
					'id'	 		=> 'enroll_key',
					'placeholder'	=> 'ป้อนรหัสนักศึกษาเพื่อลงทะเบียน'
				),
				'validation' => 'required'
			);