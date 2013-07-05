<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Honor extends CI_Controller
{
	public function __construct()
	{
		parent::__construct ();
	}
	
	public function index()
	{
		$config = $this->mconfig->read();
		$config = $config[0];
		$data = array(
			'config'		=>		$config
		);
		$this->load->view('honor_view', $data);
	}
}

?>