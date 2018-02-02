<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Askvet extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('Askvet_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$results['result'] = $this->Askvet_model->getQuestions();

		$this->load->view('askvet',$results);
	}
}