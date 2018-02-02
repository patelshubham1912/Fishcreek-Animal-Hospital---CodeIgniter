<?php
Class Subscribe_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getServices(){
		$sql = $this->db->select('serviceid,servicename')->from('service')->get();
		return $sql->result();
	}

	public function getPets(){
		$sql = $this->db->select('petid,petname')->from('pet')->get();
		return $sql->result();
	}

	public function checkIfEmailExists($email){
		 $this->db->where('email',$email);
		 $query = $this->db->get('client');
		 if($query->num_rows()>0){
		 	return true;
		 }else{
		 	return false;
		 }
	}

	public function getClientId($email){
		$this->db->select('clientid');
    	$this->db->where('email',$email);

		return $this->db->get('client')->row();	
	}

	public function insertandgetClientId($name,$address,$phone,$email,$password){
		$data = array('name' => $name ,'address' => $address,'phone' => $phone,'email' => $email,'password' => $password);

		$this->db->insert('client', $data); 

		return $this->db->insert_id(); //This gets the last inserted rows id
	}

	public function insertSubscribeData($clientid,$service,$pet){
		$data = array('clientid' => $clientid ,'serviceid' => $service,'petid' => $pet,'date' => date("Y-m-d"));

		$this->db->insert('subscription', $data);
	}
}

?>