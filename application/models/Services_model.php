<?php
Class Services_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getServices(){
		$sql = $this->db->get('service');
		return $sql->result();
	}
}

?>