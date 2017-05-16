<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peserta extends CI_Controller {

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

	public function view_form(){
		
		$this->load->view('form_peserta');
	}

	public function view_add_form(){
		
		$this->load->view('add_peserta');
	}
	
	public function insert_peserta(){
		$id_team=$this->input->post('id_team');
		$nama=$this->input->post('fullname');
		$email=$this->session->userdata('email');
		$data_session= array(
			'id_team_for_form_team' => $id_team
		);
		$this->session->set_userdata($data_session);

		$config = array(
		    'upload_path'   => "./assets/uploads/id_peserta",
		    'allowed_types' => "gif|jpg|png|jpeg",
		    'file_name'     => $nama,
		    'overwrite'     => TRUE
	    );

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('id_card')) {
			$gbr = $this->upload->data();
			$data = array(
				'id_team' 		=> $this->input->post('id_team'),
				'nama_peserta' 	=> $this->input->post('fullname'),
				'tgl_lahir'		=> $this->input->post('birthday'),
				'email' 		=> $this->input->post('email'),
				'no_hp'			=> $this->input->post('contact'),
				'id_card' 		=> $gbr['file_name'],
				'status' 		=> $this->input->post('status')
			);
			$this->DAO_model->insert_peserta('peserta', $data);
			redirect("../index.php/peserta/view_peserta_for_peserta_form");
		}

		else{
			$error = $this->upload->display_errors();
			$url=base_url()."index.php/peserta/view_form";
        	echo('<script type="text/javascript"> alert("<php echo $error;"?>); </script>');
			header("Refresh: 0.01; $url");
		}
	}

	public function add_peserta(){
		$id_team=$this->input->post('id_team');
		$nama=$this->input->post('fullname');
		$email=$this->session->userdata('email');
		$data_session= array(
			'id_team_for_form_team' => $id_team
		);
		$this->session->set_userdata($data_session);

		$config = array(
		    'upload_path'   => "./assets/uploads/id_peserta",
		    'allowed_types' => "gif|jpg|png|jpeg",
		    'file_name'     => $nama,
		    'overwrite'     => TRUE
	    );

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('id_card')) {
			$gbr = $this->upload->data();
			$data = array(
				'id_team' 		=> $this->session->userdata('id_team'),
				'nama_peserta' 	=> $this->input->post('fullname'),
				'tgl_lahir'		=> $this->input->post('birthday'),
				'email' 		=> $this->input->post('email'),
				'no_hp'			=> $this->input->post('contact'),
				'id_card' 		=> $gbr['file_name'],
				'status' 		=> $this->input->post('status')
			);
			$this->DAO_model->insert_peserta('peserta', $data);
			redirect("../index.php/peserta/view_peserta_by_id_team");
		}

		else{
			$error = $this->upload->display_errors();
			$url=base_url()."index.php/peserta/view_peserta_by_id_team";
        	echo('<script type="text/javascript"> alert("<php echo $error;"?>); </script>');
			header("Refresh: 0.01; $url");
		}
	}

	public function view_peserta_for_peserta_form(){
		$email=$this->session->userdata('email');
		$id_team=$this->session->userdata('id_team_for_form_team');
		$data_peserta['ketua']=$this->DAO_model->get_peserta_by_team_ketua($id_team);
		$data_peserta['anggota']=$this->DAO_model->get_peserta_by_team_anggota($id_team);
		$data_peserta['cadangan']=$this->DAO_model->get_peserta_by_team_cadangan($id_team);
		$data_peserta['data']=$this->DAO_model->get_team_by_email($email);
		$this->load->view('input_peserta',$data_peserta);
	}

	public function view_peserta(){
		if (empty($this->session->userdata('id_admin')) ){
            redirect('../index.php/welcome/index', 'refresh');
        }else{
			$data_peserta['peserta']=$this->DAO_model->get_peserta();
			$this->load->view('view_peserta', $data_peserta);
		}
	}

	public function view_peserta_by_id_team(){
		if (empty($this->session->userdata('id_team')) ){
            redirect('../index.php/welcome/index', 'refresh');
        }else{
			$data_peserta['peserta']=$this->DAO_model->get_peserta_by_id_team($this->session->userdata('id_team'));
			$this->load->view('view_peserta_by_team', $data_peserta);
		}
	}

	public function view_id_card(){
		$id_peserta=$this->input->get('id_peserta');
		$data_peserta['peserta']=$this->DAO_model->get_peserta_by_id($id_peserta);
		$this->load->view('view_id_card', $data_peserta);
	}

	public function view_edit(){
		$id_peserta=$this->input->get('id_peserta');
		$data_peserta['peserta']=$this->DAO_model->get_peserta_by_id($id_peserta);
		$this->load->view('edit_peserta', $data_peserta);
	}

	public function view_edit_dashboard(){
		$id_peserta=$this->input->get('id_peserta');
		$data_peserta['peserta']=$this->DAO_model->get_peserta_by_id($id_peserta);
		$this->load->view('edit_peserta_dashboard', $data_peserta);
	}

	public function update_peserta(){
		$nama=$this->input->post('nama-peserta');
		$config = array(
		    'upload_path'   => "./assets/uploads/id_peserta",
		    'allowed_types' => "gif|jpg|png|jpeg",
		    'file_name'     => $nama,
		    'overwrite'     => TRUE
	    );
	    if (isset($_FILES['id_card']) && $_FILES['id_card']['error'] != UPLOAD_ERR_NO_FILE) {
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('id_card')) {
				$gbr = $this->upload->data();
				$id_card = $gbr['file_name'];
				$email=$this->input->post('email');
				$nama_peserta=$this->input->post('nama-peserta');
				$status=$this->input->post('status');
				$tgl_lahir=$this->input->post('birthday');
				$no_hp=$this->input->post('contact');
				$id=$this->input->post('id_peserta');

				$this->DAO_model->update_peserta($id, $nama_peserta, $tgl_lahir, $status, $email, $id_card, $no_hp);
				$this->session->set_flashdata('success','Data Berhasil Di-update');
				redirect("../index.php/peserta/view_peserta_team");
			}
			else{
				$error=print($this->upload->display_errors());
				$this->session->set_flashdata('danger','Terjadi kesalahan <?php echo $error;?>');
				redirect("../index.php/peserta/view_peserta_for_peserta_form");
			}
		}
		else{
			$id_card = $this->input->post('nama_id_card');
			$email=$this->input->post('email');
			$nama_peserta=$this->input->post('nama-peserta');
			$status=$this->input->post('status');
			$tgl_lahir=$this->input->post('birthday');
			$no_hp=$this->input->post('contact');
			$id=$this->input->post('id_peserta');

			$this->DAO_model->update_peserta($id, $nama_peserta, $tgl_lahir, $status, $email, $id_card, $no_hp);
			$this->session->set_flashdata('success','Data Berhasil Di-update');
			redirect("../index.php/peserta/view_peserta_for_peserta_form");
		}
	}

	public function update_peserta_at_dashboard(){
		$nama=$this->input->post('nama-peserta');
		$config = array(
		    'upload_path'   => "./assets/uploads/id_peserta",
		    'allowed_types' => "gif|jpg|png|jpeg",
		    'file_name'     => $nama,
		    'overwrite'     => TRUE
	    );
	    if (isset($_FILES['id_card']) && $_FILES['id_card']['error'] != UPLOAD_ERR_NO_FILE) {
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('id_card')) {
				$gbr = $this->upload->data();
				$id_card = $gbr['file_name'];
				$email=$this->input->post('email');
				$nama_peserta=$this->input->post('nama-peserta');
				$status=$this->input->post('status');
				$tgl_lahir=$this->input->post('birthday');
				$no_hp=$this->input->post('contact');
				$id=$this->input->post('id_peserta');

				$this->DAO_model->update_peserta($id, $nama_peserta, $tgl_lahir, $status, $email, $id_card, $no_hp);
				$this->session->set_flashdata('success','Data Berhasil Di-update');
				redirect("../index.php/peserta/view_peserta_by_id_team");
			}
			else{
				$error=print($this->upload->display_errors());
				$this->session->set_flashdata('danger','Terjadi kesalahan <?php echo $error;?>');
				redirect("../index.php/peserat/view_peserta_by_id_team");
			}
		}
		else{
			$id_card = $this->input->post('nama_id_card');
			$email=$this->input->post('email');
			$nama_peserta=$this->input->post('nama-peserta');
			$status=$this->input->post('status');
			$tgl_lahir=$this->input->post('birthday');
			$no_hp=$this->input->post('contact');
			$id=$this->input->post('id_peserta');

			$this->DAO_model->update_peserta($id, $nama_peserta, $tgl_lahir, $status, $email, $id_card, $no_hp);
			$this->session->set_flashdata('success','Data Berhasil Di-update');
			redirect("../index.php/peserta/view_peserta_by_id_team");
		}
	}


	public function delete_peserta(){
        $id_peserta=$this->input->get('id_peserta');
        $data=$this->DAO_model->delete_peserta($id_peserta);
        if (isset($data)) {
            $url=base_url()."index.php/peserta/view_peserta_for_peserta_form";
        	echo('<script type="text/javascript"> alert("Data Gagal dihapus"); </script>');
			header("Refresh: 0.01; $url");
        }else{
            $url=base_url()."index.php/peserta/view_peserta_for_peserta_form";
        	echo('<script type="text/javascript"> alert("Data Telah DIhapus"); </script>');
			header("Refresh: 0.01; $url");
        }
    }

    public function delete_peserta_at_dashboard(){
        $id_peserta=$this->input->get('id_peserta');
        $data=$this->DAO_model->delete_peserta($id_peserta);
        if (isset($data)) {
            $this->session->set_flashdata('danger','Gagal mengahapus data');
			redirect("../index.php/peserta/view_peserta_by_id_team");
        }else{
            $this->session->set_flashdata('success','Data Berhasil Di hapus');
			redirect("../index.php/peserta/view_peserta_by_id_team");
        }
    }
}