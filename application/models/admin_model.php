<?php
class admin_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function login($username, $password){
		$sql = "SELECT * FROM admin WHERE username_admin='$username' and password_admin=('$password')";
		return $this->db->query($sql)->row_array();
	}

	public function update_admin($data,$where){
		$this->db->update('admin',$data,$where);
	}

}
?>