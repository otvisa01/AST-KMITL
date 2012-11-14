<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

//	name => onClick
$config['add_forms']['name'] = array(
				'type'			=> 'input',
				'form'		=> array(
					'name'       => 'name',
					'id'          	=> 'name',
					'value'       => '',
					'maxlength'   => '100',
					'size'        => '50'
				)
            );

$config['add_forms']['type'] = array(
				'type'			=> 'dropdown',
				'form'		=> array(
					'name'       => 'type',
					'id'          	=> 'type',
				),
				'options'		=> array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                ),
				'selected' => 'small'
            );			
			


/* End of file animelist.php */
/* Location: ./application/config/app/animelist.php */
