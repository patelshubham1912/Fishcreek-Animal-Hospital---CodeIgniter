<?php
Class Contact_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insertContact($name,$email,$comments){

		$data = array('name' => $name ,'email' => $email,'comments' => $comments);

		$this->db->insert('contact', $data); 
	}
}

?>