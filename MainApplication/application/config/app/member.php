<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

//	name => onClick
$config['authentication']['username'] = array(
				'type'		=> 'input',
				'label'		=> 'Username',
				'form'		=> array(
					'name'			=> 'username',
					'id'          	=> 'username',
					'placeholder' 	=> 'Username'
				),
				'validation' => 'required|valid_email'
            );

$config['authentication']['password'] = array(
				'type'		=> 'password',
				'label'		=> 'Password',
				'form'		=> array(
					'name'       	=> 'password',
					'id'          	=> 'password',
					'placeholder' 	=> 'Password'
				),
				'validation' => 'required'
            );			
			


/* End of file member.php */
/* Location: ./application/config/app/member.php */
