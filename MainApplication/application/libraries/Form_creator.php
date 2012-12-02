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
	protected $_keys		= array();
	protected $_configs		= array();
	protected $_forms 		= array();
	protected $_validations	= array();
	protected $_validation 	= FALSE;
	protected $_renders		= array();
	protected $_labels		= array();
	protected $_msgs		= array();

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->CI =& get_instance();

		// Automatically load the form helper
		$this->CI->load->helper('form');

		// Automatically load the form validation
		$this->CI->load->library('form_validation');
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

				// Set to _validations
				if ( isset($forms[$key]['validation']) )
				{
					$this->_validations[$key] = $forms[$key]['validation'];
				}
				else
				{
					$this->_validations[$key] = '';
				}
				
				
				// Update
				$this->_label($key);
				$this->_validation($key);
				$this->_msg($key);
				$this->_update($key);
			}
		}
		
	}
	
	// --------------------------------------------------------------------
	// Setter section
	// --------------------------------------------------------------------

	/**
	 * Set value
	 */
	public function set_value($name = '' ,$value = '')
	{
		// Get form
		$config = $this->_configs[$name];
		
		// Set value to : dropdown
		if ($config['type'] == 'dropdown')
		{
			$this->_configs[$name]['selected'] = $value;
		}
		// Set value to : dropdown
		elseif ($config['type'] == 'checkbox' || $config['type'] == 'radio')
		{
			$this->_configs[$name]['checked'] = $value;
		}
		// Set value
		else
		{
			$this->_forms[$name]['value'] = $value;
		}
		
		// Update render
		$this->_update($name);
	}
	
	// --------------------------------------------------------------------
	// Getter section
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

	/**
	 * Get validation
	 */
	public function is_validate()
	{
		return $this->_validation;
	}

	/**
	 * Get validation
	 */
	public function is_post()
	{
		return $this->_post();
	}
	
	// --------------------------------------------------------------------
	// Update section
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
		// Type : Hidden
		elseif ($config['type'] == 'hidden')
		{
			$render = form_hidden($form);
		}
		// Type : Password
		elseif ($config['type'] == 'password')
		{
			$render = form_password($form);
		}
		// Type : Upload
		elseif ($config['type'] == 'upload')
		{
			$render = form_upload($form);
		}
		// Type : Upload
		elseif ($config['type'] == 'textarea')
		{
			$render = form_textarea($form);
		}
		// Type : Upload
		elseif ($config['type'] == 'textarea')
		{
			$render = form_textarea($form);
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
		// Type : Dropdown
		elseif ($config['type'] == 'checkbox')
		{
			$checked = ( isset($config['checked']) && ! is_null($config['checked']) ) ? $config['checked'] : FALSE;
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
			$render = form_checkbox($name, $config['options'], $checked, $js);
		}
		// Type : Redio
		elseif ($config['type'] == 'radio')
		{
			$checked = ( isset($config['checked']) && ! is_null($config['checked']) ) ? $config['checked'] : FALSE;
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
			$render = form_radio($name, $config['options'], $checked, $js);
		}
		// Type : Submit
		elseif ($config['type'] == 'submit')
		{
			$render = form_submit($form['name'], $form['value']);
		}
		// Type : Submit
		elseif ($config['type'] == 'reset')
		{
			$render = form_reset($form);
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
		$config['label'] = ( isset($config['label']) && ! is_null($config['label']) ) ? $config['label'] : '';
		$this->_labels[$name] = form_label($config['label'], $form['name']);
	}

	// --------------------------------------------------------------------

	/**
	 * Update validation
	 */
	private function _validation($name)
	{
		// Get form and config
		$form = $this->_forms[$name];
		$validation = $this->_validations[$name];
		$config = $this->_configs[$name];
		
		// Set validation
		if ( ! is_null($validation) && ! $validation == '' )
		{
			$this->CI->form_validation->set_rules($form['name'], $config['label'], $validation);
		}
		
	}
	
	// --------------------------------------------------------------------

	/**
	 * Update msg
	 */
	private function _msg($key)
	{	
		// Set value
		$this->_msgs[$key] = form_error($key);
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
		// Validate form
		if ($this->CI->form_validation->run() == FALSE)
		{
			$this->_validation = FALSE;
		}
		else
		{
			$this->_validation = TRUE;
		}


		// If name null give update all
		if ($name == NULL)
		{
			foreach ($this->_keys as $key)
			{
				if ($this->CI->form_validation->run() == FALSE)
				{
					$this->_msg($key);
				}

				$this->_validation($key);
				$this->_render($key);
				$this->_label($key);
			}
		}
		else
		{
			$this->_validation($name);
			$this->_render($name);
			$this->_label($name);
		}
	}

}
// END Form Creator Class

/* End of file Form_creator.php */
/* Location: ./application/libraries/Form_creator.php */
