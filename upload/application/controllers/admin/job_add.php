<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_add extends CI_Controller
{
	private $pageName = 'admin/job_add';
	private $user = null;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
		$this->load->model('check_user', 'check');
		$this->user = $this->check->validate();
	}
	
	public function index()
	{
		$data = array(
			'admin'					=>	$this->user,
			'page_name'			=>	$this->pageName
		);
		$this->load->model('render');
		$this->render->render($this->pageName, $data);
	}
	
	public function edit($jobId = 0)
	{
		if(!empty($jobId))
		{
			$this->load->model('job');
			$result = $this->job->read(array(
				'job_id'		=>	$jobId
			));
			if($result !== FALSE)
			{
				$result = $result[0];
			}

			$this->load->model('render');
			$data = array(
				'edit'				=>	'1',
				'row'				=>	$result
			);
			$this->render->render($this->pageName, $data);
		}
	}
	
	public function submit()
	{
		
	}
}

?>