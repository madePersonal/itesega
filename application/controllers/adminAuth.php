<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminAuth extends CI_Controller {

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
        $this->load->model('admin_model');

	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data_admin     = $this->admin_model->login($username, $password);

		if(!empty($data_admin)){
			$data_login = array(
				'id_admin'	=>$data_admin['id_admin'],
				'sie'		=>$data_admin['sie'],
				'nama'		=>$data_admin['nama_admin']
			);
			$data=array('last_login'=> date('Y-m-d H:i:s'));
			$where=array('id_admin' =>$data_admin['id_admin']);
			$this->admin_model->update_admin($data, $where);
			$this->session->set_userdata($data_login);
			redirect('../index.php/admin/view_dashboard');	
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
