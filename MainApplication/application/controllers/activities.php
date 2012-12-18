<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activities extends CI_Controller {

	/**
	 * Constructor
	 */
	public function __construct()
	{

		parent::__construct();
		$this->load->config('app/activity');
		$this->load->library('form_creator');
		$this->load->helper('time');
		$this->load->helper('date');

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
			$activity = New Activity();
			$activity->name 		= $form->get_value('name');
			$activity->location 	= $form->get_value('location');
			$activity->start_time 	= $form->get_value('start_time');
			$activity->end_time 	= $form->get_value('end_time');
			$activity->organize_by	= $form->get_value('organized_by');
			$activity->description 	= $form->get_value('description');
			$activity->updated 		= date('Y-m-d H:i:s');
			$activity->created 		= date('Y-m-d H:i:s');




			if( to_timestamp($form->get_value('time_start')) > to_timestamp($form->get_value('time_end')) )
			{


			}else{
				$activity->save();
			}
			//redirect('/profile', 'refresh');
			return;
		}

		
	}


	/**
	 * list page
	 */
	public function lists()
	{
		// if not log in
		if ( ! is_authen() )
		{
			redirect('/login', 'refresh');
			return;
		}
		
		// Get activity
		$activities = New Activity();
		$activities->get();

		// Send data to view authenticate
		$data = array();
		$data['activities'] = $activities;
		$body = $this->load->view('activity/list', $data, TRUE);
		
		// Send to base view
		$base = array();
		$base['title'] = '';
		$base['body'] = $body;
		$this->load->view('base',$base);

		
	}

	/**
	* view page
	*/
	public function view($act_id)
	{
		// if not log in
		if ( ! is_authen() )
		{
			redirect('/login', 'refresh');
			return;
		}
		
		// Get activity
		$activities = New Activity();
		$activities->get();

		// Send data to view authenticate and id of activity for show detail
		$data = array();
		$data['activities'] = $activities;
		$data['activity_id'] = $act_id;
		$body = $this->load->view('activity/view', $data, TRUE);
		
		// Send to base view
		$base = array();
		$base['title'] = '';
		$base['body'] = $body;
		$this->load->view('base',$base);

		
	}
	
}	

/* End of file member.php */
/* Location: ./application/controller/member.php */