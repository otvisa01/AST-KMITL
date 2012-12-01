<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

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
		
		$u = new User();
		$u->where('username', $username)->get();
		$u2 = $u->get_clone(TRUE);
		if($u->username)
		{
			if($u2->password==$password){
			$data['noti']='login successful';
			$this->load->view('test',$data);
			}
		}else
		{
			$data['noti']='login not success';
			$this->load->view('test',$data);
		}

	}
	
}	

/* End of file Login.php */
/* Location: ./application/controller/Login.php */