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
if ( ! function_exists('to_timestamp'))
{	
	function to_timestamp($time)
	{
		list($time1,$time2) = explode(' ',$time);
		list($years, $months, $days) = explode('-',$time1);
		list($hours,$minutes,$seconds) = explode(':',$time2);
		return mktime($hours,$minutes,$seconds,$months,$days,$years);
	}
}

// --------------------------------------------------------------------


