<?php
class match_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insert_match($data){
		$this->db->insert('match',$data);
	}

	public function update_match($data, $where){
		$this->db->update('match',$data, $where);
	}

	public function view_penyisihan(){
		$sql="CALL select_match('penyisihan');";
		return $this->db->query($sql)->result();
	}

}
?>