<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teamAuth extends CI_Controller {

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
		$this->load->library('session');
        $this->load->model('team_model');
         $this->load->model('DAO_model');

	}

	public function login(){
		$email 		= $this->input->post('email');
		$password 	= $this->input->post('password');
		$data_team    	= $this->team_model->login($email, $password);

		if(!empty($data_team)){
			$data_login = array(
				'email'			=>$data_team['email'],
				'id_team'		=>$data_team['id_team'],
				'nama_team'		=>$data_team['nama_team']
			);
			$data=array('last_login'=> date('Y-m-d H:i:s'));
			$where=array('id_team' =>$data_team['id_team']);
			$this->DAO_model->update_team($data, $where);
			$this->session->set_userdata($data_login);
			redirect('../index.php/team/view_dashboard');	
		} else {
			$url=base_url()."index.php/welcome/index";
        	echo('<script type="text/javascript"> alert("Email dan password tidak cocok"); </script>');
			header("Refresh: 0.01; $url");
		}
	}

	public function logout(){
		session_destroy();
		redirect('../index.php/welcome/index');
	}

	public function view_form(){
		$this->load->view('login');
	}


}
