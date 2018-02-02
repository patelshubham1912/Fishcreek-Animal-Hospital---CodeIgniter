<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->load->model('Subscribe_model');
	}
	
	public function index()
	{
		$data['services']=$this->Subscribe_model->getServices();
		$data['pet']=$this->Subscribe_model->getPets();
		if($this->input->server('REQUEST_METHOD')=="POST"){ //if came from submit button

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('address', 'address', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]|max_length[10]|regex_match[/[1-9]{1}[0-9]{9}/]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[16]|min_length[8]|regex_match[/[A-Z]/]|regex_match[/[a-z]/]|regex_match[/\d/]');




		if($this->form_validation->run()){
				$name=$this->input->post('name');
				$address=$this->input->post('address');
				$email=$this->input->post('email');
				$phone=$this->input->post('phone');
				$password=$this->input->post('password');
				$service=$this->input->post('service');
				$pet=$this->input->post('pet');
				$passwordHashed = do_hash($password, 'md5'); 

				if($this->Subscribe_model->checkIfEmailExists($email)){ //Check if email exists
						$clientid = $this->Subscribe_model->getClientId($email)->clientid; //If yes then get the client id 

				}else{
						$clientid = $this->Subscribe_model->insertandgetClientId($name,$address,$phone,$email,$passwordHashed); //else create a new row for client
				}

				$this->Subscribe_model->insertSubscribeData($clientid,$service,$pet); //insert in subscribe table


				redirect('/Subscribe');
			}else{
				$this->load->view('subscribe',$data);
			}
		}else{
			$this->load->view('subscribe',$data);
		}	
	}
}