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
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$ldap = ldap_connect("161.246.38.141");
		if(!$ldap){
			//Failed To connect to Faculty Server.
			$data['error'] = "LDAP Failed To Connect: ".ldap_error($ldap);
			$this->load->view('login_view',$data);
		}else{		
			if( $bind = ldap_bind($ldap, $username.'@it.kmitl.ac.th', $password) ){
				//Login success
				echo '<p>Welcome ' . $username . '!</p>';
				return;
			}else{
				//username/password invalid
				$data['error'] = 'Username or Password incorrect.';
				$this->load->view('login_view',$data);
			}		
		}
	}
	
}	

/* End of file Login.php */
/* Location: ./application/controller/Login.php */