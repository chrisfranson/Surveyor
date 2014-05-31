<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_Surveyor extends Module {

	public $version = '0.1';

	public function info()
	{
		return array(
			'name' => array(
				'en' => 'Surveyor'
			),
			'description' => array(
				'en' => "Manages surveillance imagery." 
			),
			'frontend' => TRUE,
			'backend' => FALSE
		);
	}

	public function install()
	{
		return true;
	}

	public function uninstall()
	{
		return true;
	}


	public function upgrade($old_version)
	{
		return true;
	}

	public function help()
	{
		return "No documentation has been added for this module.<br />Contact the module developer for assistance.";
	}
}
/* End of file details.php */
