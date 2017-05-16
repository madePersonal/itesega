<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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
		$this->load->library('session');
		
	}

	public function view_dashboard(){
		if (empty($this->session->userdata('id_admin'))){
	        redirect('../index.php/welcome/index', 'refresh');
	    }else{
			$this->load->view('admin_dashboard');
	    }
    }

    public function view_match(){
		if (empty($this->session->userdata('id_admin'))){
	        redirect('../index.php/welcome/index', 'refresh');
	    }else{
	    	$data['team']=$this->DAO_model->get_team();
			$this->load->view('view_data_match',$data);
	    }
    }


}