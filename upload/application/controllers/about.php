<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->model('marticle');
		$result = $this->marticle->read(array(
			'article_id'		=>	1
		));
		$result = $result[0];
		$config = $this->mconfig->read();
		$config = $config[0];
		$data = array(
			'config'		=>		$config,
			'article'		=>		$result
		);
		$this->load->view('about_view', $data);
	}
}

?>