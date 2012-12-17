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
 * get_sidebarmenu
 *
 * @access	public
 * @param	string
 * @return	str
 */
if ( ! function_exists('get_sidebarmenu'))
{	
	function get_sidebarmenu($current = '')
	{
		$data['current'] = $current;
		$CI =& get_instance();

		return $CI->load->view('sidebarmenu', $data, TRUE)."\r\n";
	}
}

// --------------------------------------------------------------------

/**
 * get_header
 *
 * @access	public
 * @param	string
 * @return	str
 */
if ( ! function_exists('get_header'))
{	
	function get_header()
	{
		$data = array();
		$CI =& get_instance();
		return $CI->load->view('header', $data, TRUE)."\r\n";
	}
}



/* End of file view_helper.php */
/* Location: ./application/helpers/view_helper.php */