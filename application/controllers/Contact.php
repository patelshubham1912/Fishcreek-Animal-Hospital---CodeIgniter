<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Contact_model');
	}

	public function index()
	{
		if($this->input->server('REQUEST_METHOD')=="POST"){

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('comments', 'Comments', 'trim|required');

		if($this->form_validation->run()){
				$name=$this->input->post('name');
				$email=$this->input->post('email');
				$comments=$this->input->post('comments');

				$this->Contact_model->insertContact($name,$email,$comments);
				redirect('/Contact');
			}else{
				$this->load->view('contact');
			}
		}else{
			$this->load->view('contact');
		}		
	}
}