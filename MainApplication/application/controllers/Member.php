<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	/**
	 * Constructor
	 */
	public function __construct()
	{

		parent::__construct();
		$this->load->config('app/member');
		$this->load->library('form_creator');

	}

	/**
	 * Index page
	 */
	public function index()
	{
		// Add form config
		$this->form_creator->add_forms( $this->config->item('authentication') );



		// Send data to view authenticate
		$data = array();
		$data['form'] = $this->form_creator->get_forms();


		$body = $this->load->view('member/login', $data, TRUE);
		
		// Send to base view
		$base = array('title' => '', 'body' => $body);
		$this->load->view('base',$base);
	}
	
	/**
	 * authentication page
	 */
	public function login(){
		//$this->form_validation->set_rules('username', 'Username', 'required');
		//$this->form_validation->set_rules('password', 'Password', 'required');
		//$this->form_validation->set_error_delimiters('<div class="alert alert-warning" id="login_errormsg">', '</div>');
		
		

		// Add form config
		$this->form_creator->add_forms( $this->config->item('authentication') );
		
		// Send data to view authenticate
		$data = array();
		$data['form'] = $this->form_creator->get_forms();
		$body = $this->load->view('member/login', $data, TRUE);
		
		// Send to base view
		$base = array('title' => '', 'body' => $body);
		$this->load->view('base',$base);


		/*
		if($this->form_validation->run()==FALSE)
		{
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
		*/
	}
	
}	

/* End of file Login.php */
/* Location: ./application/controller/Login.php */