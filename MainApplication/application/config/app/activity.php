<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

//	name => onClick
$config['add_activity']['name'] = array(
				'type'		=> 'input',
				'label'		=> 'Name',
				'form'		=> array(
					'name'			=> 'name',
					'id'          	=> 'name',
					'placeholder' 	=> 'Name'
				),
				'validation' => 'required'
            );

$config['add_activity']['description'] = array(
				'type'		=> 'password',
				'label'		=> 'Password',
				'form'		=> array(
					'name'       	=> 'description',
					'id'          	=> 'description',
					'placeholder' 	=> 'Description'
				),
				'validation' => 'required'
            );		
$config['add_activity']['time_start'] = array(
				'type'		=> 'input',
				'label'		=> 'Time_start',
				'form'		=> array(
					'name'       	=> 'time_start',
					'id'          	=> 'time_start',
					'placeholder' 	=> 'Time_start',
					'class' 		=>  'datetimepicker'
				),
				'validation' => 'required'
            );
$config['add_activity']['time_end'] = array(
				'type'		=> 'input',
				'label'		=> 'Time_end',
				'form'		=> array(
					'name'       	=> 'time_end',
					'id'          	=> 'time_end',
					'placeholder' 	=> 'Time_end',
					'class' 		=>  'datetimepicker'
				),
				'validation' => 'required'
            );			

			


/* End of file member.php */
/* Location: ./application/config/app/member.php */
