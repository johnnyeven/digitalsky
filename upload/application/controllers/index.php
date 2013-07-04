<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
	}
	
	public function index()
	{
		$this->load->model('slider');
		$result = $this->slider->read(null, array(
			'order_by'			=>	array('slider_sort', 'asc')
		));
		$data = array(
			'slider'		=>	$result
		);
		$this->load->view('index_view', $data);
	}
}