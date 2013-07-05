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
		
		$this->load->model('product');
		$product = $this->product->read(null, array(
			'order_by'			=>	array('product_sort', 'asc')
		));
		
		$data = array(
			'config'		=>		$config,
			'product'	=>		$product
		);
		$this->load->view('honor_view', $data);
	}
}

?>