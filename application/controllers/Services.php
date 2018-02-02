<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Services_Model');
		$this->load->helper('url');
	}

	public function index()
	{
		$results['result'] = $this->Services_Model->getservices();

		$this->load->view('services',$results);
	}
}