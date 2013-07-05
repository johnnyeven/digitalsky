<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show extends CI_Controller
{
	public function __construct()
	{
		parent::__construct ();
		
		$this->load->database('default');
		$this->load->model('job');
		$this->load->helper('category');
	}
	
	public function job($jobId = 0)
	{
		$config = $this->mconfig->read();
		$config = $config[0];
		
		if(!empty($jobId))
		{
			$parameter = array(
				'job_id'		=>	$jobId
			);
			$result = $this->job->read($parameter);
			if($result !== FALSE)
			{
				$result = $result[0];
				
				$extension = array(
					'order_by'		=>	array('job_posttime', 'desc')
				);
				$parameter = array(
					'job_category'			=>	$result->job_category,
					'job_endtime >='		=>	time()
				);
				$cateResult = $this->job->read($parameter, $extension);
			}
			$data = array(
				'config'			=>	$config,
				'value'			=>	$result,
				'category'		=>	$cateResult
			);
			$this->load->view('show_view', $data);
		}
	}
}

?>