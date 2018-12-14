<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//private $fb;
	function __construct() {
        parent:: __construct();
        $this->load->library('google');
		//$this->load->library("facebooksdk");
		//$this->fb = $this->facebooksdk;
		$this->load->model('modelcrud');$this->load->helper(array('form', 'url'));
	}

	public function index(){
		// $this->data['hasil'] = $this->modelcrud->getUser('data_user');
		$this ->load-> view ('beranda');
	}

	//login masyarakat

	public function login_masyarakat(){
		$data['google_login_url']=$this->google->get_login_url();
		$this->load->view('login_masyarakat',$data);

		$cb = "http://localhost/tubes/index.php/welcome/callback";
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

	//login facebook

	// public function callback()
	// {
	// 	$act = $this->fb->getAccessToken();
	// 	$data = $this->fb->getUserData($act);
	// 	print_r($data);
	// }
	// public function loginn()
	// {
		
	// 	if($this->session->userdata('loginn') == true){
	// 		redirect('welcome/profile');
	// 	}
		
		
	// 	if ($this->facebook->logged_in())
	// 	{
	// 		$user = $this->facebook->user();

	// 		if ($user['code'] === 200)
	// 		{
	// 			$this->session->set_userdata('loginn',true);
	// 			$this->session->set_userdata('user_profile',$user['data']);
	// 			redirect('welcome/profile');
	// 		}

	// 	}
		
	// 	 else {
	
	// 		$contents['link'] = $this->facebook->login_url();
		
	// 		$this->load->view('welcome_message',$contents);
		
	
	// 	}
	// }
	
	// public function profile(){
	// 	if($this->session->userdata('loginn') != true){
	// 		redirect('');
	// 	}
	// 	$contents['user_profile'] = $this->session->userdata('user_profile');
	// 	$this->load->view('profile',$contents);
		
	// }
	
	// public function log_out(){
	// 	$this->session->sess_destroy();
	// 	redirect('');
		
	// }

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
		$cek = $this->modelcrud->cek_login("adminn",$where)->num_rows();
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
		$this -> load -> view ('login_bpbd');
	}

	public function aksi_bpbd(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->modelcrud->cek_login("bpbd",$where)->num_rows();
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
		$cek = $this->modelcrud->cek_login("dinas",$where)->num_rows();
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
		// $this->data['hasil'] = $this->modelcrud->getUser('data_laporan');
		$this -> load -> view ('form_lapor');
	}
	public function lacak(){
		$this -> load -> view ('lacak');
	}
	public function berita(){
		$this -> load -> view ('berita');
	}
	public function login(){
		$this -> load -> view ('login');
	}
	public function bantuan(){
		$this -> load -> view ('bantuan');
	}
	public function laporan(){
		/*$this->data['hasil'] = $this->modelcrud->getUser('data_laporan');
		$this -> load -> view ('laporan', $this->data);*/
		$data['data_laporan'] = $this->modelcrud->getUser();
		$this ->load-> view ('laporan', $data);
	}
	// public function bukti(){
	// 	$this -> load -> view ('bukti');
	// }
	public function insert(){
		/*$nama = $_POST['nama'];
		$ktp = $_POST['ktp'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$jenis = $_POST['jenis'];
		$alamat = $_POST['alamat'];
		$provinsi = $_POST['provinsi'];
		$pos = $_POST['pos'];
		$lokasi = $_POST['lokasi'];
		$deskripsi = $_POST['deskripsi'];

		$bukti = $_POST['bukti'];

		$data = array('nama' => $nama, 'ktp' => $ktp, 'email' => $email, 'tel' => $tel, 'jenis' => $jenis, 'alamat' => $alamat, 'provinsi' => $provinsi, 'pos' => $pos, 'lokasi' => $lokasi, 'deskripsi' => $deskripsi);
$tambah = $this->modelcrud->tambahData('data_laporan',$data);
 		if($tambah > 0){
 			redirect('welcome/laporan');
 		} else {
 			echo 'GAGAL disimpan';
 		}*/
 		$data = array();
		if($this->input->post('submit')){
			$upload = $this->modelcrud->upload();
			
			if($upload['result'] == "success"){
				$this->modelcrud->tambahData($upload);
				
				redirect('welcome'); 
			}else{
				$data['message'] = $upload['error'];
			}
		}
		//$this->load->view('form_lapor');
}

// public function upload(){
// 		$this -> load -> view ('upload');
// }


	//	$bukti = $_POST['bukti'];

// $target_dir = "uploads/";
// $bukti = $target_dir . basename($_FILES["bukti"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($laporan,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["bukti"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
// // Check if file already exists
// if (file_exists($laporan)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// // Check file size
// if ($_FILES["bukti"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["bukti"]["tmp_name"], $laporan)) {
//         echo "The file ". basename( $_FILES["bukti"]["name"]). " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }

// $data = array('nama' => $nama, 'ktp' => $ktp, 'email' => $email, 'tel' => $tel, 'jenis' => $jenis, 'alamat' => $alamat, 'provinsi' => $provinsi, 'pos' => $pos, 'lokasi' => $lokasi, 'deskripsi' => $deskripsi);
// $tambah = $this->modelcrud->tambahData('data_laporan',$data);
// 		if($tambah > 0){
// 			redirect('welcome/laporan');
// 		} else {
// 			echo 'GAGAL disimpan';
// 		}
	//}

	// public function delete($id){
	// 	$hapus = $this->modelcrud->hapusData('data_user',$id);
	// 	if($hapus > 0){
	// 		redirect('welcome/index');
	// 	} else {
	// 		echo 'GAGAL disimpan';
	// 	}
	// }
	// public function form_edit($id){

	// 	$this->data['hasil'] = $this->modelcrud->getUser('data_jurusan');
	// 	$this->data['dataEdit'] = $this->modelcrud->dataEdit('data_user',$id);
	// 	$this->load->view('form_edit',$this->data);
	// }
	// public function update($id){
	// 	$nama = $_POST['nama'];
	// 	$alamat = $_POST['alamat'];
	// 	$kode = $_POST['kode_jurusan'];
	// 	$nim = $_POST['NIM'];
	// 	$data = array('nama_lengkap' => $nama, 'alamat' => $alamat, 'kode_jurusan' => $kode, 'NIM' => $nim);
	// 	$edit = $this->modelcrud->editData('data_user',$data,$id);
	// 	if($edit > 0){
	// 		redirect('welcome/index');
	// 	} else {
	// 		echo 'GAGAL disimpan';
	// 	}
	// }
}