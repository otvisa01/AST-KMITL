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

		$this->form_creator->add_forms( $this->config->item('activity') );
		$form = $this->form_creator;

		// Send data to view authenticate
		$data = array();
		$body = $this->load->view('activity/form', $data, TRUE);
		
		// Send to base view
		$base['title'] = '';
		$base['body'] = $body;
		//$base['head'] = get_style('member','profile');
		$this->load->view('base',$base);

	}
	
}	

/* End of file member.php */
/* Location: ./application/controller/member.php */