<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {

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
	}
	public function index(){
		$this->load->view('welcome');
	}

	public function welcome(){
		$url=base_url()."index.php/welcome/index";
        echo('<script type="text/javascript"> alert("Selamat !! Team anda telah terdafatar, silahkan login untuk melakukan ferivikasi"); </script>');
		header("Refresh: 0.01; $url");
	}
}