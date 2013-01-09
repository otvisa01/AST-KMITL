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
 * to_timestamp
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


/**
 * timenow compare
 *
 * @access	public
 * @param	string
 * @return	str
 */
if ( ! function_exists('time_compare'))
{	
	function timenow_compare($time1 ,$time2)
	{
		$ts_time1 = to_timestamp($time1);
		$ts_time2 = to_timestamp($time2);
		$ts_now = time();

		if( $ts_time1 <= $ts_now && $ts_time2 >= $ts_now )
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
}

// --------------------------------------------------------------------

/**
 * split_time
 *
 * @access	public
 * @param	datetime
 * @return	array
 */
if ( ! function_exists('split_time'))
{	
	function split_time($time)
	{
		list($date,$time) = explode(' ',$time);

		return array('date'=>$date, 'time'=>$time, 'full'=>$date.' '.$time);
	}
}


// --------------------------------------------------------------------

/**
 * timestamp_to_date
 *
 * @access	public
 * @param	timestamp
 * @return	str
 */
if ( ! function_exists('timestamp_to_date'))
{	
	function timestamp_to_date($time)
	{
		if ($time == 'now')
		{
			return date('Y-m-d H:i:s', time());
		}
		else
		{
			return date('Y-m-d H:i:s', $time);
		}
		
	}
}

// --------------------------------------------------------------------