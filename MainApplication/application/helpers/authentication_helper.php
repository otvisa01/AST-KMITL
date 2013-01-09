<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

/**
 * CodeIgniter Inflector Helpers
 *
 * Customised singular and plural helpers.
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team, stensi
 * @link		http://codeigniter.com/user_guide/helpers/inflector_helper.html
 */

// --------------------------------------------------------------------

/**
 * is_authen
 *
 * @access	public
 * @param	string
 * @return	str
 */
if ( ! function_exists('is_authen'))
{	
	function is_authen()
	{
		$CI =& get_instance();
		$user_data = $CI->session->all_userdata();

		if ( isset($user_data['uid']) && isset($user_data['key']) )
		{
			// Check user validate
			$users = new User_model();
			$users->where ('id', $user_data['uid']);
			$users->where ('key', $user_data['key']);

			if ($users->count() != 1)
			{
				return FALSE;
			}
			else
			{
				return TRUE;
			}

		}
		else
		{
			return FALSE;
		}
		

	}
}

// --------------------------------------------------------------------

/**
 * set_authen
 *
 * @access	public
 * @param	string
 * @return	
 */
if ( ! function_exists('set_authen'))
{	
	function set_authen($username, $password)
	{
		$CI =& get_instance();
		$user_data = $CI->session->all_userdata();

		// Check user validate
		$users = new User_model();
		$users->where ('username', $username);
		$users->where ('password', $password);
		$user = $users->get();

		if( isset($user->username) && isset($user->password) )
		{
			$data = array(
                   'uid'	=> $user->id,
                   'key'	=> $user->key
               );
			$CI->session->set_userdata($data);
		}

	}
}

// --------------------------------------------------------------------

/**
 * get_authen
 *
 * @access	public
 * @param	string
 * @return	
 */
if ( ! function_exists('get_authen'))
{	
	function get_authen()
	{
		$CI =& get_instance();
		$user_data = $CI->session->all_userdata();

		if ( isset($user_data['uid']) && isset($user_data['key']) )
		{
			// Check user validate
			$users = new User_model();
			$users->where ('id', $user_data['uid']);
			$users->where ('key', $user_data['key']);
			$user = $users->get();

			if( ! isset($user->username) && ! isset($user->password) )
			{
				return FALSE;
			}
			else
			{
				return $user;
			}

		}
		else
		{
			return FALSE;
		}

	}
}

// --------------------------------------------------------------------

/**
 * del_authen
 *
 * @access	public
 * @param	string
 * @return	
 */
if ( ! function_exists('del_authen'))
{	
	function del_authen()
	{
		$CI =& get_instance();
		$data = array(
               'uid'	=> FALSE,
               'key'	=> FALSE
           );
		$CI->session->set_userdata($data);
	}
}


// --------------------------------------------------------------------

/**
 * authorize
 *
 * @access	public
 * @param	string
 * @return	
 */
if ( ! function_exists('authorize'))
{	
	function authorize()
	{
		$CI =& get_instance();
		$data = array(
               'uid'	=> FALSE,
               'key'	=> FALSE
           );
		$CI->session->set_userdata($data);
	}
}



/* End of file authentication_helper.php */
/* Location: ./application/helpers/authentication_helper.php */