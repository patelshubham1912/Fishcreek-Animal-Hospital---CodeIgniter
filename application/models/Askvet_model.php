<?php
Class Askvet_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getQuestions(){
		$sql = $this->db->get('questions');
		return $sql->result();
	}
}

?>