<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class team extends CI_Controller {

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

	public function view_form(){
		
		$this->load->view('form_team');
	}

	public function view_dashboard(){
		if (empty($this->session->userdata('id_team'))){
            redirect('../index.php/welcome/index', 'refresh');
        }else{
        	$where=array('id_team' =>$this->session->userdata('id_team'));
			$data['status_req']=$this->verifikasi_model->get_status_req($where);
			$this->load->view('team_dashboard', $data);
        }
			
	}

	public function view_team_by_id_team(){
		if (empty($this->session->userdata('id_team')) ){
            redirect('../index.php/welcome/index', 'refresh');
        }else{
			$data_team['team']=$this->DAO_model->get_team_by_id($this->session->userdata('id_team'));
			$this->load->view('view_team_by_team', $data_team);
		}
	}

	public function insert_team(){
		$email=$this->input->post('email');
		$nama=$this->input->post('nama-team');
		$data_session = array(
				'email' => $email
				);
		$this->session->set_userdata($data_session);

		$config = array(
		    'upload_path'   => "./assets/uploads/logo",
		    'allowed_types' => "gif|jpg|png|jpeg",
		    'file_name'     => $nama."_logo",
		    'overwrite'     => TRUE
	    );

		$where=array('email' =>$email);
		$cek = $this->DAO_model->validasi_signup('team', $where)->num_rows();
		if($cek>0){
			$url=base_url()."index.php/welcome/index";
        	echo('<script type="text/javascript"> alert("Email anda sudah terdaftar silahkan login dan lanjutkan"); </script>');
			header("Refresh: 0.01; $url");
		}
		else{
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('logo-team')) {
				$gbr = $this->upload->data();
				$data = array(
					'logo' 			=> $gbr['file_name'],
					'nama_team' 	=> $this->input->post('nama-team'),
					'email' 		=> $this->input->post('email'),
					'password' 		=> $this->input->post('password'),
					'verifikasi' 	=> 'N'
				);
				$this->DAO_model->insert_team('team', $data);
				redirect("../index.php/team/view_team_for_peserta_form");
			}
			else{
				$error = $this->upload->display_errors();
				$url=base_url()."index.php/team/view_form";
        		echo('<script type="text/javascript"> alert("<?php echo $error;?>"); </script>');
				header("Refresh: 0.01; $url");
			}
		}
	}

	public function view_team_for_peserta_form(){
		$email=$this->session->userdata('email');
		$data_team['data']=$this->DAO_model->get_team_by_email($email);
		$this->load->view('form_peserta', $data_team);
	}

	public function view_team(){
		if (empty($this->session->userdata('id_admin'))){
            redirect('../index.php/welcome/index', 'refresh');
        }else{
        	$data_team['team']=$this->DAO_model->get_team();
			$this->load->view('view_team', $data_team);
        }
		
	}

	public function view_edit(){
		if (empty($this->session->userdata('id_team'))){
            redirect('../index.php/welcome/index', 'refresh');
        }else{
			$id_team=$this->input->get('id_team');
			$data_team['data']=$this->DAO_model->get_team_by_id($id_team);
			$this->load->view('edit_team', $data_team);
		}
	}

	
	public function update_team(){
		$nama=$this->input->post('nama-team');
		$config = array(
		    'upload_path'   => "./assets/uploads/logo",
		    'allowed_types' => "gif|jpg|png|jpeg",
		    'file_name'     => $nama."_logo",
		    'overwrite'     => TRUE
	    );
	    if (isset($_FILES['logo-team']) && $_FILES['logo-team']['error'] != UPLOAD_ERR_NO_FILE) {
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('logo-team')) {
				$gbr = $this->upload->data();
				$data = array(
					'nama_team' =>$this->input->post('nama-team'),
					'email'		=> $this->input->post('email'),
					'logo' 		=> $logo = $gbr['file_name']
				);
				$where = array(
					'id_team'=> $this->input->post('id_team')
				);
				
				$this->DAO_model->update_team($data, $where);
				$this->session->set_flashdata('success','Data Berhasil Di-update');
				redirect("../index.php/team/view_team_by_id_team");
			}
			else{
				$error=print($this->upload->display_errors());
				$this->session->set_flashdata('danger','Terjadi kesalahan <?php echo $error;?>');
				redirect("../index.php/team/view_team_by_id_team");
			}
		}
		else{
			$data = array(
				'nama_team' =>$this->input->post('nama-team'),
				'email'		=> $this->input->post('email'),
				'logo' 		=> $this->input->post('nama_logo')
			);

			$where = array(
				'id_team'=> $this->input->post('id_team')
			);
			$this->DAO_model->update_team($data, $where);
			$this->session->set_flashdata('success','Data Berhasil Di-update');
			redirect("../index.php/team/view_team_by_id_team");
		}
	}

	public function update_password(){
		$where 	= array(
			'password'=>$this->input->post('old_password'),
			'id_team'=>$this->session->userdata('id_team')
		);
		$data_team     	= $this->DAO_model->validasi_signup('team', $where);

		if(!empty($data_team)){
			$data = array('password'=>$this->input->post('new_password'));
			$where=array('id_team'=>$this->session->userdata('id_team'));
			$this->DAO_model->update_team($data, $where);
			$this->session->set_flashdata('success','Data Berhasil Di-update');
			redirect('../index.php/team/view_team_by_id_team');	
		} else {
			$this->session->set_flashdata('danger','Password lama salah');
			redirect('../index.php/team/view_team_by_id_team');
		}
	}
}		