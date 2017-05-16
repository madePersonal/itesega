<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class match extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Singapore');
		$this->load->model('DAO_model');
		$this->load->model('match_model');
		$this->load->library('session');
		
	}

	public function rand_match(){
		if (empty($this->session->userdata('id_admin'))){
	        redirect('../index.php/welcome/index', 'refresh');
	    }else{
	    	$max_id = $this->input->post('max_id');
	    	$min_id = $this->input->post('min_id');
	    	$count_id = $this->input->post('jmlh_team');
	    	$id_hasil = array();
			$ceknomor = array(); 

			for ($i=1;$i<=$count_id;$i++){
				$nomor = rand($min_id,$max_id); 
				while(in_array($nomor,$ceknomor)){ 
					$nomor = rand($min_id,$max_id); 
				}
				$ceknomor[$i]= $nomor; 
				$id_hasil[$i]= $nomor;
			}

			for($o=1;$o<($count_id/2)+1;$o++){
				$data1= array(
						'id_team1' 	=>$id_hasil[$o],
						'id_team2' 	=>65,
						'tgl_match'	=>$this->input->post('tgl_match'),
						'tempat'	=>$this->input->post('tempat'),
						'id_round'	=> 1
					);
				$this->match_model->insert_match($data1);
			}
			$k=1;
			for($j=($count_id/2)+1; $j<=$count_id; $j++){
				$data2= array(
						'id_team2' 	=>$id_hasil[$j],
					);
				$where=array('id_team1' =>$id_hasil[$k++]);
				$this->match_model->update_match($data2, $where);
			}

			redirect('../index.php/match/view_match', 'refresh');
	    }
    }

    public function view_match(){
		if (empty($this->session->userdata('id_admin'))){
	        redirect('../index.php/welcome/index', 'refresh');
	    }else{
	    	$data['penyisihan']=$this->match_model->view_penyisihan();
			$this->load->view('view_data_match',$data);
	    }
    }

     public function rand_form(){
		if (empty($this->session->userdata('id_admin'))){
	        redirect('../index.php/welcome/index', 'refresh');
	    }else{
	    	$data['data']=$this->DAO_model->max_id_team();
	    	$data['data2']=$this->DAO_model->min_id_team();
	    	$data['data3']=$this->DAO_model->count_id();
			$this->load->view('rand_match',$data);
	    }
    }
}
?>