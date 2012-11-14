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
 * Form Creator Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Creator
 * @author		Pongpong
 * @link		http://codeigniter.com/
 */
class Form_creator {
	
	protected $CI;
	protected $_keys			= array();
	protected $_configs		= array();
	protected $_forms 			= array();
	protected $_validations	= array();
	protected $_renders		= array();
	protected $_labels			= array();
	protected $_msgs			= array();

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->CI =& get_instance();

		// Automatically load the form helper
		$this->CI->load->helper('form');
	}

	// --------------------------------------------------------------------

	/**
	 * Add forms
	 */
	public function add_forms($forms = '')
	{	
		// If is array
		if (is_array ($forms))
		{
			$keys = array_keys($forms);
			
			foreach ($keys as $key)
			{
				// Push key
				array_push($this->_keys, $key);
				
				// Set to _forms
				$this->_forms[$key] = $forms[$key]['form'];
				unset($forms[$key]['form']);
				
				// Set to _configs
				$this->_configs[$key] = $forms[$key];
				
				// Update
				$this->_msg($key, '');
				$this->_label($key);
				$this->_update($key);
			}
		}
		// If no
		else
		{
			// Set to _forms
			$this->_forms[$key] = $forms[$key];
			
			// Update
			$this->_label($key);
			$this->_update($key);
		}
		
		
	}
	
	// --------------------------------------------------------------------

	/**
	 * Set value
	 */
	public function set_value($name = '' ,$value = '')
	{
		// Get form
		$config = $this->_configs[$name];
		
		// Set value to : input
		if ($config['type'] == 'input')
		{
			$this->_forms[$name]['value'] = $value;
		}
		// Set value to : dropdown
		elseif ($config['type'] == 'dropdown')
		{
			$this->_configs[$name]['selected'] = $value;
		}
		
		// Update render
		$this->_update($name);
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Get forms
	 */
	public function get_forms()
	{
		if($this->_post())
		{
			$this->_update();
		}
		
		$return['labels'] = $this->_labels;
		$return['renders'] = $this->_renders;
		$return['forms'] = $this->_forms;
		$return['validations'] = $this->_validations;
		$return['msgs'] = $this->_msgs;
		$return['configs'] = $this->_configs;
		return $return;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Update render
	 */
	private function _render($name)
	{
		// Get form and config
		$form = $this->_forms[$name];
		$config = $this->_configs[$name];
		
		// Type : Input
		if ($config['type'] == 'input')
		{
			$render = form_input($form);
		}
		// Type : Dropdown
		elseif ($config['type'] == 'dropdown')
		{
			$selected = ( isset($config['selected']) && ! is_null($config['selected']) ) ? $config['selected'] : FALSE;
			$name = $form['name'];
			unset($form['name']);
			if ( isset($form) && is_array($form) )
			{
				$js = '';
				$js_key = array_keys($form);
				$js_value = array_values($form);
				$i = count($form);
				
				for ($n = 0; $n < $i; ++$n)
				{
					$js .= $js_key[$n].'="'.$js_value[$n].'" ';
				}
			}
			$render = form_dropdown($name, $config['options'], $selected, $js);
		}
		
		// Set to _forms
		$this->_renders[$name] = $render;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Update label
	 */
	private function _label($name)
	{
		// Get form and config
		$form = $this->_forms[$name];
		$config = $this->_configs[$name];
		
		// Set value
		$this->_labels[$name] = form_label( ( ( isset($config['label']) && ! is_null($config['label']) ) ? $config['label'] : '' ) , $form['name']);
	}
	
	// --------------------------------------------------------------------

	/**
	 * Update msg
	 */
	private function _msg($key, $value = '')
	{	
		// Set value
		$this->_msgs[$key] = $value;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Update when post
	 */
	private function _post()
	{	
		// Set false for check update
		$return = FALSE;
		
		// Loop key
		foreach ($this->_keys as $key)
		{
			// Get form
			$form = $this->_forms[$key];
			$config = $this->_configs[$key];
			
			if (isset($_POST[$form['name']]))
			{
				$this->set_value($key ,$_POST[$form['name']]);
				$return = TRUE;
			}
		}
		
		return $return;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Update render
	 */
	private function _update($name = NULL)
	{
		// If name null give update all
		if ($name == NULL)
		{
			foreach ($this->_keys as $key)
			{
				$this->_render($key);
				$this->_label($key);
			}
		}
		else
		{
			$this->_render($name);
			$this->_label($name);
		}
	}

}
// END Form Creator Class

/* End of file Form_creator.php */
/* Location: ./application/libraries/Form_creator.php */
