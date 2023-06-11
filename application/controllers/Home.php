     <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guru_model', 'gm', TRUE);
		$this->load->model('form_model', 'fm', TRUE);
		$this->load->model('mapel_model', 'mm', TRUE);
		$this->load->model('siswa_vii_model', 's7', TRUE);
		$this->load->model('siswa_viii_model', 's8', TRUE);
		$this->load->model('siswa_ix_model', 's9', TRUE);
		$this->load->model('auth_model');
		     $this->load->library('form_validation');
		     $this->load->library('session');
	}
	public function index()
	{
		$data = [
			'guru' => $this->gm->get(),
			'siswa_vii' => $this->s7->get(),
			'siswa_viii' => $this->s8->get(),
			'siswa_ix' => $this->s9->get(),
			// 'me'   => $users,
		];
		$this->load->view('layout/header' ,$data);
		$this->load->view('layout/side' ,$data);
		$this->load->view('menu/index' ,$data);
		$this->load->view('layout/footer');
	}
	    //  public function login()
	    //  {
		// 	$rules = $this->auth_model->rules();
		// 	$this->form_validation->set_rules($rules);
	
		// 	if (!$this->form_validation->run()) {
		// 		$this->load->view('menu/login');
		//      } 
		// 	//  else {
		// 	//      $username = $this->input->post('username');
		// 	//      $password = $this->input->post('password');

		// 	//      if ($this->auth_model->login($username, $password)) {
		// 	// 	     redirect(base_url('index'));
		// 	//      } else {
		// 	// 	     $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
		// 	// 		 redirect(base_url('login'));
		// 	//      }
		//     //  }
		// 	else {
		// 		$users = $this->db->get_where('admin', ['username' => $this->input->post('username')])->row_array();
	
		// 		if ($users) {
		// 			if (password_verify($this->input->post('password'), $users['password'])) {
		// 				$data = [
		// 					'username'     => $users['username']
		// 				];
		// 				$this->session->set_userdata($data);
        //                     redirect(base_url('index'));
		// 			} else {
		// 				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Username or password invalid.</div>');
	
		// 				redirect(base_url('login'));
		// 			}
		// 		} else {
		// 			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Username or password invalid.</div>');
	
		// 			redirect(base_url('login'));
		// 		}
		// 	}
		// }
	// public function logout(){
	// 	$this->load->model('auth_model');
	// 	$this->auth_model->logout();
	// 	redirect(site_url());
	// }
	
	// public function dashboard(){
	// 	// if ($this->session->userdata('username')) {
    //     //     $users = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
	// 		$data = [
	// 			'guru' => $this->gm->get(),
	// 			'siswa_vii' => $this->s7->get(),
	// 			'siswa_viii' => $this->s8->get(),
	// 			'siswa_ix' => $this->s9->get(),
	// 			// 'me'   => $users,
	// 		];

	// 		$this->load->view('menu/index' ,$data);
    //         // } else {
    //         //     redirect(base_url('login'));
    //         }
	public function tabel(){
		$data = [
			// 'id'  => $id,
			'guru' => $this->gm->get(),
			// 'update_guru' => $this->gm->update_entry(),
			// 'hapus_guru' => $this->gm->delete($id),
		];
		$this->load->view('layout/header' ,$data);
		$this->load->view('layout/side' ,$data);
		$this->load->view('menu/table', $data);
		$this->load->view('layout/footer');
	}

	// public function add_tabel(){
	// 	$guru = $this->guru_model;
    //     $validation = $this->form_validation; //objek form validation
    //     $validation->set_rules($guru->rules()); //menerapkan rules validasi pada mahasiswa_model
    //     //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
    //     if ($validation->run()) {
    //         $guru->save();
    //         $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //         Data Mahasiswa berhasil disimpan. 
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //       </button></div>');
    //         redirect("table");
    //     }
	// 	$this->load->view('menu/table');
	// }


	public function tabel_mapel(){
		$data = [
			'mapel' => $this->mm->get(),
		];
		
		$this->load->view('layout/header' ,$data);
		$this->load->view('layout/side' ,$data);
		$this->load->view('menu/tabel/mapel', $data);
		$this->load->view('layout/footer');
	}
	public function tabel_siswa_vii(){
		$data = [
			'siswa_vii' => $this->s7->get(),
			// 'nilai_vii' => $this->db->get_where('nilai_siswa', ['kelas' => 7])->result(),
		];
		
		$this->load->view('layout/header' ,$data);
		$this->load->view('layout/side' ,$data);
		$this->load->view('menu/tabel/siswa_vii', $data);
		$this->load->view('layout/footer');
	}
	public function tabel_siswa_viii(){
		$data = [
			'siswa_viii' => $this->s8->get(),
			// 'nilai_viii' => $this->db->get_where('nilai_siswa', ['kelas' => 8])->result(),
		];
		
		$this->load->view('layout/header' ,$data);
		$this->load->view('layout/side' ,$data);
		$this->load->view('menu/tabel/siswa_viii', $data);
		$this->load->view('layout/footer');
	}
	public function tabel_siswa_ix(){
		$data = [
			'siswa_ix' => $this->s9->get(),
			// 'nilai_ix' => $this->db->get_where('nilai_siswa', ['kelas' => 9])->result(),
		];
		
		$this->load->view('layout/header' ,$data);
		$this->load->view('layout/side' ,$data);
		$this->load->view('menu/tabel/siswa_ix', $data);
		$this->load->view('layout/footer');
	}
	public function form(){
		$data = [
			'data_nilai' => $this->fm->get_data(),
			// 'data_absen' => $this->fm->get_data_absen()
		 ];
		
		$this->load->view('layout/header' ,$data);
		$this->load->view('layout/side' ,$data);
		$this->load->view('menu/form' , $data);
		$this->load->view('layout/footer');
	}
	public function nilai(){
		     $data = [
				'nilai' => $this->fm->get(),
		     ];
		
		$this->load->view('layout/header' ,$data);
		$this->load->view('layout/side' ,$data);
		$this->load->view('menu/tabel/nilai', $data);
		$this->load->view('layout/footer');
	}
	public function cetak($id){
		     $data = [
				'cetak_nilai' => $this->fm->cetak_nilai($id),
				"source_gambar" => "../assets/images/icon/logoypii.jpg",
			 ];

		    //  var_dump($data);
		    //  die;

			//  $this->load->library('dompdf_gen');
			
			 $this->load->view('menu/cetak', $data);
		
             $customPaper = 'A4';
             $orientation = 'portrait';
			 $html = $this->output->get_output();
			 $this->load->library('pdfgenerator');
			 $this->pdfgenerator->generate_view($html, strtoupper("DATA NILAI SISWA ").$id, TRUE, $customPaper, $orientation);


			 
			//  $html = ob_get_contents();
			//   ob_end_clean();
			//  $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
			//  $pdf->WriteHTML($html);
			//  $pdf->Output('Raport SMP YPII Bungur Bekasi.pdf', 'D');
	}
}
