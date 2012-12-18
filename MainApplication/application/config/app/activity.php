<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['add_activity']['name'] = array(
				'type'		=> 'input',
				'label'		=> 'ชื่อกิจกรรม',
				'form'		=> array(
					'name'			=> 'name',
					'id'          	=> 'name',
					'placeholder' 	=> 'ชื่อกิจกรรม/หัวข้อกิจกรรม'
				),
				'validation' => 'required'
            );

$config['add_activity']['location'] = array(
				'type'		=> 'input',
				'label'		=> 'สถานที่จัดกิจกรรม',
				'form'		=> array(
					'name'       	=> 'location',
					'id'          	=> 'location',
					'placeholder' 	=> 'จัดที่ไหน'
				),
				'validation' => 'required'
            );

$config['add_activity']['description'] = array(
				'type'		=> 'textarea',
				'label'		=> 'คำอธิบายกิจกรรม',
				'form'		=> array(
					'name'       	=> 'description',
					'id'          	=> 'description',
					'placeholder' 	=> 'อธิบายกิจกรรมพอสังเขป',
					'rows'			=> 5,
					'cols'			=> 10
				),
				'validation' => 'required'
            );

$config['add_activity']['time_start'] = array(
				'type'		=> 'input',
				'label'		=> 'เวลาเริ่มทำกิจกรรม',
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
				'label'		=> 'เวลาสิ้นสุดกิจกรรม',
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
				'label'		=> 'จัดโดย',
				'form'		=> array(
					'name'       	=> 'organized_by',
					'id'          	=> 'organized_by',
					'placeholder' 	=> 'eg. ชุมนุมกีฬา',
					'class' 		=>  'datetimepicker'
				),
				'validation' => 'required'
            );

/* End of file member.php */
/* Location: ./application/config/app/member.php */