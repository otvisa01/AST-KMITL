<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
		
		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('login_view');
		}else
		{
			echo 'OK';
		}
	}
	
}	

/* End of file Login.php */
/* Location: ./application/controller/Login.php */