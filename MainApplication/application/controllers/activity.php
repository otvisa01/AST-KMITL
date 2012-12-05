<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acvitity extends CI_Controller {

	/**
	 * Constructor
	 */
	public function __construct()
	{

		parent::__construct();
		$this->load->config('app/activity');
		$this->load->library('form_creator');

	}

	/**
	 * Index page
	 */
	public function index()
	{

	}
	
	/**
	 * logout page
	 */
	public function logout()
	{
		del_authen();
		redirect('/login', 'refresh');
		return;

	}

	/**
	 * authentication page
	 */
	public function login()
	{
		// if logged in
		if ( is_authen() )
		{
			redirect('/profile', 'refresh');
			return;
		}
	}

		

		// Check Error
		if ($error == TRUE)
		{
			// Send data to view authenticate
			$data['form'] = $form->get_forms();
			$body = $this->load->view('member/login', $data, TRUE);
			
			// Send to base view
			$base['title'] = '';
			$base['body'] = $body;
			$base['head'] = get_style('member','login');
			$this->load->view('base',$base);
		}

	}

	/**
	 * profile page
	 */
	public function add()
	{
		// if not log in
		if ( ! is_authen() )
		{
			redirect('/login', 'refresh');
			return;
		}
		$this->form_creator->add_forms( $this->config->item('activity') );
		$form = $this->form_creator;

		// Send data to view authenticate
		$data['user'] = get_authen();
		$data['activity'] = $this->load->view('activity', NULL, TRUE);
		$body = $this->load->view('member/profile', $data, TRUE);
		
		// Send to base view
		$base['title'] = '';
		$base['body'] = $body;
		$base['head'] = get_style('member','profile');
		$this->load->view('base',$base);

	}
	
}	

/* End of file member.php */
/* Location: ./application/controller/member.php */