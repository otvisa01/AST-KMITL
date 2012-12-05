<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['add_activity']['name'] = array(
				'type'		=> 'input',
				'label'		=> 'ชื่อกิจกรรม',
				'form'		=> array(
					'name'			=> 'name',
					'id'          	=> 'name',
					'placeholder' 	=> 'Name'
				),
				'validation' => 'required'
            );

$config['add_activity']['location'] = array(
				'type'		=> 'input',
				'label'		=> 'Location',
				'form'		=> array(
					'name'       	=> 'location',
					'id'          	=> 'location',
					'placeholder' 	=> 'Location'
				),
				'validation' => 'required'
            );

$config['add_activity']['description'] = array(
				'type'		=> 'textarea',
				'label'		=> 'Description',
				'form'		=> array(
					'name'       	=> 'description',
					'id'          	=> 'description',
					'placeholder' 	=> 'Description',
					'rows'			=> 5,
					'cols'			=> 10
				),
				'validation' => 'required'
            );

$config['add_activity']['time_start'] = array(
				'type'		=> 'input',
				'label'		=> 'Time start',
				'form'		=> array(
					'name'       	=> 'time_start',
					'id'          	=> 'time_start',
					'placeholder' 	=> 'Time start',
					'class' 		=>  'datetimepicker'
				),
				'validation' => 'required'
            );

$config['add_activity']['time_end'] = array(
				'type'		=> 'input',
				'label'		=> 'Time end',
				'form'		=> array(
					'name'       	=> 'time_end',
					'id'          	=> 'time_end',
					'placeholder' 	=> 'Time end',
					'class' 		=> 'datetimepicker'
				),
				'validation' => 'required'
            );

$config['add_activity']['organized_by'] = array(
				'type'		=> 'input',
				'label'		=> 'Organized by',
				'form'		=> array(
					'name'       	=> 'organized_by',
					'id'          	=> 'organized_by',
					'placeholder' 	=> 'Organized by',
					'class' 		=>  'datetimepicker'
				),
				'validation' => 'required'
            );

/* End of file member.php */
/* Location: ./application/config/app/member.php */