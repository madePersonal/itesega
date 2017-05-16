
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class verifikasi extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Singapore');
		$this->load->model('DAO_model');
		$this->load->model('verifikasi_model');
		$this->load->library('session');
		
	}
	public function view_verifikasi_req(){
		if (empty($this->session->userdata('id_admin'))){
            redirect('../index.php/welcome/index', 'refresh');
        }else{
			$data['verifikasi_req']=$this->verifikasi_model->get_verifikasi_req();
			$data['log_verifikasi']=$this->verifikasi_model->get_verifikasi_log();
			$data['jmlh_verifikasi_req']=$this->verifikasi_model->count_verifikasi_req();
			$data['jmlh_verifikasi_log']=$this->verifikasi_model->count_verifikasi_log();
			$data['jmlh_team']=$this->verifikasi_model->count_team();
			$this->load->view('view_verifikasi', $data);
		}
	}

	public function view_verifikasi_file(){
		$where=array('id_permintaan' =>$this->input->get('id_req'));
		$data['file']=$this->verifikasi_model->get_status_req($where);
		$this->load->view('view_verifikasi_file', $data);
	}

	public function view_verifikasi_file_log(){
		$id_verifikasi=$this->input->get('id_verifikasi');
		$data['file_log']=$this->verifikasi_model->get_verifikasi_file_log($id_verifikasi);
		$this->load->view('view_verifikasi_file_log', $data);
	}

	public function insert_verifikasi(){
		$data_verifikasi = array(
			'id_req'			=> $this->input->post('id_req'),
			'tgl_verifikasi'	=> date('Y-m-d H:i:s'),
			'verifikasi_by'		=> $this->session->userdata('id_admin')
		);
		$this->DAO_model->upload_file_verifikasi('log_verifikasi', $data_verifikasi);
		redirect("../index.php/verifikasi/view_verifikasi_req");
	}

	public function upload_file_verifikasi(){
		$nama=$this->session->userdata('nama_team');
		$config = array(
		    'upload_path'   => "./assets/uploads/file_verifikasi",
		    'allowed_types' => "gif|jpg|png|jpeg",
		    'file_name'     => $nama,
		    'overwrite'     => TRUE
	    );
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file_verifikasi')) {
			$file = $this->upload->data();
			$data = array(
				'id_team'		=> $this->input->post('id_team'),
				'file' 			=> $file['file_name'],
				'req_at' 		=> date('Y-m-d H:i:s'),
				'status'		=> 'diproses'
			);
			$this->DAO_model->upload_file_verifikasi('permintaan_verifikasi', $data);
			redirect("../index.php/team/view_dashboard");
		}

		else{
			$error = $this->upload->display_errors();
			$url=base_url()."index.php/team/view_form";
        	echo('<script type="text/javascript"> alert("<?php echo $error;?>"); </script>');
			header("Refresh: 0.01; $url");
		}
	}
}