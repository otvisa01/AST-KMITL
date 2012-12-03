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
	 * logout page
	 */
	public function logout()
	{
		del_authen();
		redirect('/member/login', 'refresh');
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
			redirect('/member/profile', 'refresh');
			return;
		}
		
		// Init Form
		$this->form_creator->add_forms( $this->config->item('authentication') );
		$form = $this->form_creator;

		// Init data to send
		$data = array();
		$data['notify'] = '';

		// Init error checker
		$error = FALSE;

		// Check form validate
		if (! $form->is_validate())
		{
			$error = TRUE;
		}
		else
		{
			// Check user validate
			$users = new User();
			$users->where ('username', $form->get_value('username'));
			$users->where ('password', $form->get_value('password'));
			$user = $users->get();

			if( ! isset($user->username) && ! isset($user->password) )
			{
				$data['notify'] = 'Failed to login.';
				$error = TRUE;
			}
			else
			{
				
				set_authen($user->username, $user->password);
				redirect('/member/profile', 'refresh');
				return;
			}

			/*
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
			*/
		}

		

		// Check Error
		if ($error == TRUE)
		{
			// Send data to view authenticate
			$data['form'] = $form->get_forms();
			$body = $this->load->view('member/login', $data, TRUE);
			
			// Send to base view
			$base = array('title' => '', 'body' => $body);
			$this->load->view('base',$base);
		}

	}

	/**
	 * profile page
	 */
	public function profile()
	{
		// if not log in
		if ( ! is_authen() )
		{
			redirect('/member/login', 'refresh');
			return;
		}

		// Send data to view authenticate
		$data['user'] = get_authen();
		$data['activity'] = $this->load->view('activity', NULL, TRUE);
		$body = $this->load->view('member/profile', $data, TRUE);
		
		// Send to base view
		$base = array('title' => '', 'body' => $body);
		$this->load->view('base',$base);

	}
	
}	

/* End of file member.php */
/* Location: ./application/controller/member.php */