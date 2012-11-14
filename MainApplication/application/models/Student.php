<?php
class Student extends DataMapper{
	var $error_prefix = '<div class="alert alert-warning" id="login_errormsg">';
    var $error_suffix = '</div>';
	
	var $validation = array(
        'username' => array(
            'label' => 'Username',
            'rules' => array('required', 'unique', 'min_length' => 3, 'max_length' => 20),
        ),
        'password' => array(
            'label' => 'Password',
            'rules' => array('required', 'min_length' => 6, 'encrypt'),
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
	
	function login(){	
        $u = new Student();
        $u->where('username', $this->username)->get();
        $this->salt = $u->salt;
        $this->validate()->get();
		
		if(empty($this->id)){
            $this->error_message('login', 'Username or password Not found or invalid');
            return FALSE;
        }else{
            // Login succeeded
            return TRUE;
        }
    }
	
    function _encrypt($field){
        if (!empty($this->{$field})){
            if (empty($this->salt)){
                $this->salt = md5(uniqid(rand(), true));
            }
            $this->{$field} = sha1($this->salt . $this->{$field});
        }
    }
		
}

/* End of file Student.php */
/* Location: ./application/models/Student.php */