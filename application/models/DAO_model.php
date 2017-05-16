<?php

Class DAO_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	/*-------------------------------------------------------->team<-----------------------------------------------------*/
	public function insert_team($table, $data_team){
		return $this->db->insert($table, $data_team);
	}

	public function get_team(){
		$sql_s = "SELECT * FROM team;";
		return $this->db->query($sql_s)->result();
	}

	public function count_id(){
		$sql_s = "SELECT COUNT(id_team) as jmlh_team FROM team;";
		return $this->db->query($sql_s)->row_array();
	}

	public function max_id_team(){
		$sql_s = "SELECT MAX(id_team) AS max_id FROM team;";
		return $this->db->query($sql_s)->row_array();
	}

	public function min_id_team(){
		$sql_s = "SELECT MIN(id_team) AS min_id FROM team;";
		return $this->db->query($sql_s)->row_array();
	}

	public function get_team_by_email($email){
		$sql_s = "SELECT nama_team, id_team, logo FROM team WHERE email='$email';";
		return $this->db->query($sql_s)->row_array();
	}
	
	public function get_team_by_id($id_team){
		$sql_s = "SELECT *FROM team WHERE id_team=$id_team;";
		return $this->db->query($sql_s)->row_array();
	}

	public function update_team($data,$where){
		$this->db->update('team',$data,$where);
	}

	public function validasi_signup($table,$email){		
		return $this->db->get_where($table,$email);	
	}

	public function get_password($email){	
	$sql_s = "SELECT * from team  WHERE id_team='$id_team', AND password=odl_password;";	
		return $this->db->get_where($table,$email);	
	}

	public function upload_file_verifikasi($table, $data_file){		
		return $this->db->insert($table, $data_file);
	}


	/*--------------------------------------------------------->peserta<---------------------------------------------------*/
	public function insert_peserta($table, $data_peserta){
		return $this->db->insert($table, $data_peserta);
	}
	public function get_peserta(){
		$sql_s = "SELECT id_peserta, team.nama_team as nama_team, status, nama_peserta, tgl_lahir, peserta.`email`, no_hp, id_card FROM peserta 
			JOIN team ON peserta.id_team = team.id_team;";
		return $this->db->query($sql_s)->result();
	}

	public function get_peserta_by_id($id_peserta){
		$sql_s = "SELECT id_peserta, `status`, nama_peserta, tgl_lahir, peserta.email AS email, team.nama_team AS nama_team, no_hp, id_card FROM peserta 
			JOIN team ON peserta.id_team = team.id_team
			WHERE peserta.id_peserta=$id_peserta;";
		return $this->db->query($sql_s)->row_array();
	}

	public function get_peserta_by_id_team($id_team){
		$sql_s = "SELECT *FROM peserta 
		WHERE peserta.`id_team`= $id_team;";
		return $this->db->query($sql_s)->result();
	}

	public function get_peserta_by_team_ketua($id_team){
		$sql_s = "SELECT id_peserta, status, nama_team, nama_peserta, tgl_lahir, peserta.`email` AS email, no_hp, id_card FROM peserta 
			JOIN team
			ON peserta.id_team = team.id_team
			where team.id_team = $id_team and status='ketua';";
		return $this->db->query($sql_s)->result();
	}

	public function get_peserta_by_team_anggota($id_team){
		$sql_s = "SELECT id_peserta, status, nama_team, nama_peserta, tgl_lahir, peserta.`email` AS email, no_hp, id_card FROM peserta 
			JOIN team
			ON peserta.id_team = team.id_team
			where team.id_team = $id_team and status='anggota';";
		return $this->db->query($sql_s)->result();
	}
	public function get_peserta_by_team_cadangan($id_team){
		$sql_s = "SELECT id_peserta, status, nama_team, nama_peserta, tgl_lahir, peserta.`email` AS email, no_hp, id_card FROM peserta 
			JOIN team
			ON peserta.id_team = team.id_team
			where team.id_team = $id_team and status='cadangan';";
		return $this->db->query($sql_s)->result();
	}

	public function update_peserta($id_peserta, $nama, $tgl_lahir, $status, $email, $id_card, $no_hp){
		$sql_u ="UPDATE peserta SET nama_peserta = '$nama', tgl_lahir='$tgl_lahir', status='$status', email = '$email', id_card ='$id_card', no_hp='$no_hp' WHERE id_peserta=$id_peserta;";
		$this->db->query($sql_u);
	}
	public function delete_peserta($id_peserta){
		$delete="DELETE FROM peserta WHERE id_peserta=$id_peserta;";
		$this->db->query($delete);
	}
}
?>