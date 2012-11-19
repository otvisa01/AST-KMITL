<?php
class Student extends DataMapper{

	var $validation = array(
        'username' => array(
            'label' => 'Username',
            'rules' => array('required', 'unique', 'min_length' => 3, 'max_length' => 20),
        ),
        'password' => array(
            'label' => 'Password',
            'rules' => array('required', 'min_length' => 6),
        ),
		'first_name' => array(
			'label' => 'First Name',
            'rules' => array('required'),
		),
		'last_name' => array(
			'label' => 'Last Name',
            'rules' => array('required'),
		)
    );	
		
}

/* End of file Student.php */
/* Location: ./application/models/Student.php */