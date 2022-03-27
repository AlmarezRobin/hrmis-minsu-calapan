<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/**
 * Class Loader
 */
class Loader {
	/**
	 * Hold class name
	 *
	 * @var mixed
	 */
	private $class;

	/**
	 * Hold the sub directory of the class
	 *
	 * @var string
	 */
	private $sub_dir = '';
	/**
	 * Get Subdirectories
	 *
	 * @return void
	 */
	private function get_sub_dir($url) {
		if(strpos($url, '/')) {
			$model = explode('/', $url);
			$this->class = end($model);
			array_pop($model);
			$this->sub_dir = '/' . implode('/', $model);
		} else {
			$this->class = $url;
		}
	}

	/**
	 * @param mixed $class
	 * @param null $object_name
	 * 
	 * @return object
	 */
	public function model($class, $object_name = NULL)
	{
		if( ! class_exists('Model')) {
			require_once(SYSTEM_DIR.'kernel/Model.php');
		}
			
		$LAVA = Controller::instance();

		if(is_array($class))
		{
			foreach($class as $key => $value)
			{
				$this->get_sub_dir($value);
				if(! is_int($key))
				{
					$LAVA->$key =& load_class($this->class, 'models' . $this->sub_dir, NULL, $key);
				} else {
					$LAVA->{$this->class} =& load_class($this->class, 'models' . $this->sub_dir, NULL, $this->class);
				}	
			}	
		} else {	
			$this->get_sub_dir($class);
			if(! is_null($object_name))
			{
				$LAVA->$object_name =& load_class($this->class, 'models' . $this->sub_dir, NULL, $object_name);
			} else {
				$LAVA->{$this->class} =& load_class($this->class, 'models' . $this->sub_dir);
			}
		}
			
	}
	
	/**
	 * Load View File
	 *
	 * @param string $viewFile
	 * @param array $data
	 * @return void
	 */
	public function view($view_file, $data = NULL)
	{
		if(! is_null($data)) {
			//it will hold the data after looping
			$page_vars = array();
			if(is_array($data))
			{
				foreach($data as $key => $value)
				{
					$page_vars[$key] = $value;
				}
			} elseif(is_string($data))
			{
				$page_vars[$data] = $data;
			} else {
				throw new Exception('View parameter only accepts array and string types');
			}
			extract($page_vars, EXTR_SKIP);
		}
		ob_start();
		$view = APP_DIR .'views' . DIRECTORY_SEPARATOR . $view_file;
		if(strpos($view_file, '.') === false)
		{
			if(file_exists($view . '.php'))
			{
				require_once($view. '.php');
			} else {
				throw new Exception(''.$view_file.' view file did not exist.');
			}		
		} else {
			if(file_exists($view))
			{
				require_once($view);
			} else {
				throw new Exception(''.$view_file.' view file did not exist.');
			}
		}
		echo ob_get_clean();
	}

	/**
	 * Load Helper
	 *
	 * @param mixed $helper
	 * @return void
	 */
	public function helper($helper)
	{
		if ( is_array($helper) ) {
			foreach( array(APP_DIR . 'helpers', SYSTEM_DIR . 'helpers') as $dir )
			{
				foreach( $helper as $hlpr )
				{
					if ( file_exists($dir . DIRECTORY_SEPARATOR . $hlpr . '_helper.php') ) {
						require_once $dir . DIRECTORY_SEPARATOR . $hlpr . '_helper.php';
					}
				}
			}
		} else {
			foreach( array(APP_DIR . 'helpers', SYSTEM_DIR . 'helpers') as $dir )
			{
				if ( file_exists($dir . DIRECTORY_SEPARATOR . $helper . '_helper.php') )
				{
					require_once $dir . DIRECTORY_SEPARATOR . $helper . '_helper.php';
				}
			}
		}
	}
	
	/**
	 * Load Library
	 *
	 * @param mixed $classes
	 * @param array $params
	 * @return void
	 */
	public function library($classes, $params = NULL)
	{
		$LAVA = Controller::instance();
		if(is_array($classes))
		{
			foreach($classes as $class)
			{
				if($class == 'database') {
					$database =& load_class('database', 'database');
					$LAVA->db = $database::instance(NULL);
				}
				$LAVA->$class =& load_class($class, 'libraries');
			}
		} else {
			$LAVA->$classes =& load_class($classes, 'libraries', $params);
		}
	}

	/**
	 * Load Database
	 *
	 * @param mixed $dbname
	 * @return void
	 */
	public function database($dbname = NULL)
	{
		$LAVA =& Controller::instance();
		$database =& load_class('database','database', $dbname);
		if(is_null($dbname)) {
			$LAVA->db = $database::instance(NULL);
		} else {			
			$LAVA->{$dbname} = $database::instance($dbname);
		}
	}
}

/**
 * Class Controller
 */
class Controller extends Loader
{
	private static $instance;
	public $call, $var;
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->call = $this;

		self::$instance = $this->call;

		foreach (loaded_class() as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		//load autoload config
		$autoload =& autoload_config();

		if(count($autoload['libraries']) > 0)
			$this->call->library($autoload['libraries']);
		if(count($autoload['models']) > 0)
			$this->call->model($autoload['models']);
		if(count($autoload['helpers']) > 0 )
			$this->call->helper($autoload['helpers']); 
	}
	
	/**
	 * Instance of controller
	 *
	 * @return object
	 */
	public static function &instance()
	{
		return self::$instance;
	}
	
}

?>