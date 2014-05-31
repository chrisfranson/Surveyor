<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @author 		Chris Franson
 */
class Surveyor extends Public_Controller
{
	public function __construct()
	{
		parent::__construct();

		// Load the required classes
		$this->load->model('surveyor_m');
		$this->lang->load('surveyor');

		Asset::css('module::surveyor.css', false, 'module_css');

		Asset::add_group('js', 'module_js', array(
			'module::surveyor.js',
		), array('min'=>true, 'combine'=>true));

	}

	/**
	 * All items
	 */
	public function index($offset = 0)
	{
		
		$items = $this->surveyor_m
			->get_all();
			
		// we'll do a quick check here so we can tell tags whether there is data or not
		$items_exist = count($items) > 0;

		$this->template
			->title($this->module_details['name'])
			->set('items', $items)
			->set('items_exist', $items_exist)
			->build('index');
	}
}