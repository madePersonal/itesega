<?php
class team_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function login($email, $password){
		$sql = "SELECT * FROM team WHERE email='$email' and password='$password'";
		return $this->db->query($sql)->row_array();
	}
}
?>