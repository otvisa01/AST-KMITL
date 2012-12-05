<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// if logged in
		if ( is_authen() )
		{
			redirect('/profile', 'refresh');
			return;
		}
		else
		{
			redirect('/login', 'refresh');
			return;
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */