<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activity extends CI_Controller {

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

		$form = $this->form_creator;
		$form->add_forms( $this->config->item('add_activity') );
		
		if (! $form->is_validate())
		{
			// Send data to view authenticate
			$data = array();
			$data['form'] = $form->get_forms();
			$body = $this->load->view('activity/form', $data, TRUE);
			
			// Send to base view
			$base['title'] = '';
			$base['body'] = $body;
			$this->load->view('base',$base);
		}
		else
		{
			redirect('/profile', 'refresh');
			return;
		}

		
	}
	
}	

/* End of file member.php */
/* Location: ./application/controller/member.php */