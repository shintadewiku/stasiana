<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//private $fb;
		function __construct() {
        parent:: __construct();
        $this->load->library('google');
		$this->load->model('Modelcrud');$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$this ->load-> view ('beranda');
	}

	//login masyarakat

	public function login_masyarakat(){
		$data['google_login_url']=$this->google->get_login_url();
		$this->load->view('login_masyarakat',$data);

		$cb = "http://localhost/tubes/index.php/Welcome/callback";
		//$url = $this->fb->getLoginUrl($cb);
		//echo "<a href='$url'> Login With Facebook</a>";
	}

	//login google

	public function oauth2callback(){
		$google_data=$this->google->validate();
		$session_data=array(
				'name'=>$google_data['name'],
				'email'=>$google_data['email'],
				'source'=>'google',
				'profile_pic'=>$google_data['profile_pic'],
				'link'=>$google_data['link'],
				'sess_logged_in'=>1
				);
			$this->session->set_userdata($session_data);
			redirect(base_url());
	}
	
	public function logout(){
		session_destroy();
		unset($_SESSION['access_token']);
		$session_data=array(
				'sess_logged_in'=>0);
		$this->session->set_userdata($session_data);
		redirect(base_url());
	}


	//login bnpb

	public function login_bnpb(){
		$this -> load -> view ('login_bnpb');
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->Modelcrud->cek_login("adminn",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			// redirect(base_url("admin"));
			$this->load->view('masuk');

		}else{
			echo "Username dan password salah !";
		}
	}

	public function logoutt(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	//login bpbd

	public function login_bpbd(){
		$this ->load-> view ('login_bpbd');
	}

	public function aksi_bpbd(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->Modelcrud->cek_login("bpbd",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			// redirect(base_url("admin"));
			$this->load->view('masuk_bpbd');

		}else{
			echo "Username dan password salah !";
		}
	}

	public function out(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	//login dinas

	public function login_dinas(){
		$this -> load -> view ('login_dinas');
	}

		public function aksi_dinas(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->Modelcrud->cek_login("dinas",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			// redirect(base_url("admin"));
			$this->load->view('masuk_dinas');

		}else{
			echo "Username dan password salah !";
		}
	}

	public function cout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	//form lapor

	public function form_lapor(){
		$this ->load->view ('form_lapor');
	}
	public function kode(){
		$data['data_laporan'] = $this->Modelcrud->get_kode();
    	$this->load->view ('kode', $data);
	}
	public function berita(){
		$this->load->view ('berita');
	}
	public function login(){
		$this->load->view ('login');
	}
	public function bantuan(){
		$this->load->view ('bantuan');
	}
	public function laporan(){
		$data['data_laporan'] = $this->Modelcrud->getUser();
		$this->load->view ('laporan', $data);
	}
	// public function bukti(){
	// 	$this -> load -> view ('bukti');
	// }
	public function insert(){
		// $no = $_POST['no'];
		// $nama = $_POST['nama'];
		// $ktp = $_POST['ktp'];
		// $email = $_POST['email'];
		// $tel = $_POST['tel'];
		// $jenis = $_POST['jenis'];
		// $alamat = $_POST['alamat'];
		// $provinsi = $_POST['provinsi'];
		// $pos = $_POST['pos'];
		// $lokasi = $_POST['lokasi'];
		// $deskripsi = $_POST['deskripsi'];
		// $bukti = $_POST['bukti'];

// 		$data = array('nama' => $nama, 'ktp' => $ktp, 'email' => $email, 'tel' => $tel, 'jenis' => $jenis, 'alamat' => $alamat, 'provinsi' => $provinsi, 'pos' => $pos, 'lokasi' => $lokasi, 'deskripsi' => $deskripsi);
// $tambah = $this->Modelcrud->tambahData('data_laporan',$data);
//  		if($tambah > 0){
//  			redirect('Welcome/laporan');
//  		} else {
//  			echo 'GAGAL disimpan';
//  		}
 		$data = array();
		if($this->input->post('submit')){
			$upload = $this->Modelcrud->upload();
			
			if($upload['result'] == "success"){
				$this->Modelcrud->tambahData($upload);
				redirect('Welcome/kode'); 
			}else{
				$data['message'] = $upload['error'];
			}
		}
		//$this->load->view('form_lapor');

}

// public function upload(){
// 		$this -> load -> view ('upload');
// }
	public function verif($no)
	{
		$data = array();
		if($this->input->post('submit')){ 
			if($this->Modelcrud->validation("update")){ 
				$this->Modelcrud->m_verif($no);
				redirect('Welcome/hasil_verif');
			} 
		}
		$data['data_laporan'] = $this->Modelcrud->view_by($no);
		$this->load->view('form_verif', $data);
	}
	public function hasil_verif()
	{
		$data['data_laporan'] = $this->Modelcrud->getUserVerifikasi();
		$this->load->view('laporan_verif', $data);
	}
	public function verifTolak($no)
	{
		$data = array();
		if($this->input->post('submit')){
			if($this->Modelcrud->validation("update")){ 
				$this->Modelcrud->m_verif($no); 
				redirect('Welcome/laporan');
			} 
		}
		$data['data_laporan'] = $this->Modelcrud->view_by($no);
		$this->load->view('form_tolak_verif', $data);
	}
	public function valid($no)
	{
		$data = array();
		if($this->input->post('submit')){ 
			if($this->Modelcrud->validation("update")){ 
				$this->Modelcrud->m_verif($no);
				redirect('Welcome/hasil_valid');
			} 
		}
		$data['data_laporan'] = $this->Modelcrud->view_by($no);
		$this->load->view('form_valid', $data);
	}
	public function hasil_valid()
	{
		$data['data_laporan'] = $this->Modelcrud->getUserValidasi();
		$this->load->view('laporan_valid', $data);
	}
	public function validTolak($no)
	{
		$data = array();
		if($this->input->post('submit')){
			if($this->Modelcrud->validation("update")){ 
				$this->Modelcrud->m_verif($no); 
				redirect('Welcome/hasil_verif');
			} 
		}
		$data['data_laporan'] = $this->Modelcrud->view_by($no);
		$this->load->view('form_tolak_valid', $data);
	}
	public function tindakLanjut($no)
	{
		$data = array();
		if($this->input->post('submit')){ 
			if($this->Modelcrud->validation("update")){ 
				$this->Modelcrud->m_verif($no);
				redirect('Welcome/hasil_tindakLanjut');
			} 
		}
		$data['data_laporan'] = $this->Modelcrud->view_by($no);
		$this->load->view('form_tindakLanjut', $data);
	}
	public function hasil_tindakLanjut()
	{
		$data['data_laporan'] = $this->Modelcrud->getUserTindaklanjut();
		$this->load->view('laporan_tindakLanjut', $data);
	}
	public function tindakLanjutTolak($no)
	{
		$data = array();
		if($this->input->post('submit')){
			if($this->Modelcrud->validation("update")){ 
				$this->Modelcrud->m_verif($no); 
				redirect('Welcome/hasil_valid');
			} 
		}
		$data['data_laporan'] = $this->Modelcrud->view_by($no);
		$this->load->view('form_tolak_tindakLanjut', $data);
	}

	//lacak
	public function lacak(){
		//$this -> load -> view ('lacak');
		$this->load->view ('lacak');

	}


}