<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('login_view');
	}
	
	public function authentication(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" id="login_errormsg">', '</div>');
		if($this->form_validation->run()==FALSE){
			//If form error OR username/password invalid
			$this->load->view('login_view');
			return;
		}		
		//Form is ok
		$u = new Student();
		$u->username = $this->input->post('username');
		$u->password = $this->input->post('password');		
		if($u->login()){
			//Login success
			echo '<p>Welcome ' . $u->username . '!</p>';
			echo '<p>You have successfully logged in so now we know that your name is ' . $u->first_name.' '.$u->last_name . '.</p>';
			return;
		}else{		
			//username/password invalid
			$data['error'] = $u->error->login;
			$this->load->view('login_view',$data);
		}
	}
	
	public function register(){
		$s = new Student();
		$s->username = $this->input->post('username');
		$s->password = $this->input->post('password');
		$s->first_name = $this->input->post('first_name');
		$s->last_name = $this->input->post('last_name');
		
		if($s->save()){
			// User object now has an ID
            echo 'ID: ' . $s->id . '<br />';
            echo 'Username: ' . $s->username . '<br />';
            echo 'Password: ' . $s->password . '<br />';
            echo 'FirstName: ' . $s->first_name . '<br />';
            echo 'LastName: ' . $s->last_name . '<br />';
		}else{
            echo $s->error->string;
		}
	}
}	

/* End of file Login.php */
/* Location: ./application/controller/Login.php */