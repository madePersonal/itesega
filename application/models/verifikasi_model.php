<?php

Class verifikasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_verifikasi($table, $data_verifikasi){
		$this->db->insert($table, $data_verifikasi);
	}
	public function get_status_req($where){
		$data=$this->db->get_where('permintaan_verifikasi',$where);
		return $data->row_array();
	}

	public function get_verifikasi_req(){
		$sql_s = "SELECT nama_team, id_permintaan, `file`, req_at FROM permintaan_verifikasi
		JOIN team 
			ON team.`id_team`= permintaan_verifikasi.`id_team` WHERE status='diproses';";
		return $this->db->query($sql_s)->result();
	}

	public function get_verifikasi_file_log($id_verifikasi){
		$sql_s = "SELECT `file` FROM permintaan_verifikasi
			JOIN log_verifikasi
				ON log_verifikasi.`id_req`=permintaan_verifikasi.`id_permintaan`
			WHERE id_verifikasi='$id_verifikasi';";
		return $this->db->query($sql_s)->row_array();
	}

	
	public function get_verifikasi_log(){
		$sql_s = "SELECT nama_team, nama_admin AS verifikasi_by, id_permintaan, id_verifikasi, tgl_verifikasi FROM log_verifikasi
		JOIN admin
			ON admin.`id_admin`=log_verifikasi.`verifikasi_by`
		JOIN permintaan_verifikasi
			ON permintaan_verifikasi.`id_permintaan`=log_verifikasi.`id_req`
		JOIN team 
			ON team.`id_team`=permintaan_verifikasi.`id_team`WHERE permintaan_verifikasi.status='sudah';";
		return $this->db->query($sql_s)->result();
	}

	public function count_verifikasi_req(){
		$sql_s = "SELECT COUNT(id_team) AS jmlh_req FROM permintaan_verifikasi WHERE `status`='diproses';";
		return $this->db->query($sql_s)->row_array();
	}

	public function count_verifikasi_log(){
		$sql_s = "SELECT COUNT(id_team) AS jmlh_log FROM permintaan_verifikasi WHERE `status`='sudah';";
		return $this->db->query($sql_s)->row_array();
	}

	public function count_team(){
		$sql_s = "SELECT COUNT(id_team) AS jmlh_team FROM team;";
		return $this->db->query($sql_s)->row_array();
	}


} 