<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter bbCode Helpers
 *
 * @package        CodeIgniter
 * @subpackage    Helpers
 * @category    Helpers
 * @author        Santoni Jean-André
 */

// ------------------------------------------------------------------------

/**
 * Parse bbCode
 *
 * Takes a string as input and replace bbCode by (x)HTML tags
 *
 * @access    public
 * @param    string    the text to be parsed
 * @return    string
 */    
function parse_bbcode($str, $clear = 0, $bbcode_to_parse = NULL)
{
    if ( ! is_array($bbcode_to_parse))
    {
        if (FALSE === ($bbcode_to_parse = _get_bbcode_to_parse_array()))
        {
            return FALSE;
        }        
    }
    
    foreach ($bbcode_to_parse as $key => $val)
    {        
        for ($i = 1; $i <= $bbcode_to_parse[$key][2]; $i++) // loop for imbricated tags
        {
            $str = preg_replace($key, $bbcode_to_parse[$key][$clear], $str);
        }
    }

    return $str;
}

// ------------------------------------------------------------------------

/**
 * Clear bbCode
 *
 * Takes a string as input and remove bbCode tags
 *
 * @access    public
 * @param    string    the text to be parsed
 * @return    string
 */    
function clear_bbcode($str)
{
    return parse_bbcode($str, 1);
}

// ------------------------------------------------------------------------

/**
 * Get bbCode Array
 *
 * Fetches the config/bbcode.php file
 *
 * @access    private
 * @return    mixed
 */    
function _get_bbcode_array()
{
    if ( ! file_exists(APPPATH.'config/bbcode'.EXT))
    {
        return FALSE;
    }

    include(APPPATH.'config/bbcode'.EXT);

    if ( ! isset($config['bbcode']) OR ! is_array($config['bbcode']))
    {
        return FALSE;
    }
    
    return $bbcode;
}

// ------------------------------------------------------------------------

/**
 * Get bbCode Array for parsing
 *
 * Fetches the config/bbcode.php file
 *
 * @access    private
 * @return    mixed
 */    
function _get_bbcode_to_parse_array()
{
    if ( ! file_exists(APPPATH.'config/bbcode'.EXT))
    {
        return FALSE;
    }

    include(APPPATH.'config/bbcode'.EXT);
    
    if ( ! isset($config['bbcode_to_parse']) OR ! is_array($config['bbcode_to_parse']))
    {
        return FALSE;
    }
    
    return $bbcode_to_parse;
}

/* End of file bbcode_helper.php */
/* Location: ./application/helpers/bbcode_helper.php */