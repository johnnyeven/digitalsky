<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join_list extends CI_Controller
{
	public function __construct()
	{
		parent::__construct ();
		
		$this->load->database('default');
		$this->load->model('job');
	}
	
	public function index()
	{
		$config = $this->mconfig->read();
		$config = $config[0];
		
		$this->load->model('marticle');
		$article = $this->marticle->read(array(
			'article_id'		=>	2
		));
		$article = $article[0];
		
		$time = time();
		$extension = array(
			'order_by'		=>	array('job_posttime', 'desc')
		);
		$parameter = array(
			'job_category'		=>	1,
			'job_endtime >='	=>	$time
		);
		$result1 = $this->job->read($parameter, $extension);
		
		$parameter = array(
			'job_category'		=>	2,
			'job_endtime >='	=>	$time
		);
		$result2 = $this->job->read($parameter, $extension);
		
		$parameter = array(
			'job_category'		=>	3,
			'job_endtime >='	=>	$time
		);
		$result3 = $this->job->read($parameter, $extension);
		
		$parameter = array(
			'job_category'		=>	4,
			'job_endtime >='	=>	$time
		);
		$result4 = $this->job->read($parameter, $extension);
		
		$data = array(
			'config'		=>	$config,
			'article'		=>	$article,
			'result1'		=>	$result1,
			'result2'		=>	$result2,
			'result3'		=>	$result3,
			'result4'		=>	$result4
		);
		
		$this->load->view('join_list_view', $data);
	}
}

?>