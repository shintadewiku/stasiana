<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelcrud extends CI_Model {

	/*public function getUser($table_name){
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}*/
	
	public function __construct()
    {
        parent::__construct();
    }
    
	public function getUser(){
		$this->db->where('status', '');
		$q = $this->db->get('data_laporan')->result();
		return $q;
	}
	public function getUserVerifikasi(){
		$this->db->where('status', 'Diverifikasi');
		$q = $this->db->get('data_laporan')->result();
		return $q;
	}
	public function getUserValidasi(){
		$this->db->where('status', 'Ditindaklanjuti');
		$q = $this->db->get('data_laporan')->result();
		return $q;
	}
	public function getUserTindaklanjut(){
		$this->db->where('status', 'Ditindaklanjuti');
		$q = $this->db->get('data_laporan')->result();
		return $q;
	}
	public function upload(){
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	public function cek_bpbd($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function get_kode(){
		$last_row=$this->db->select('no')->order_by('no','desc')->limit(1)->get('data_laporan')->row();
		return $last_row;
	}

	public function getLacak(){
    	return $this->db->get('data_laporan')->result();
  }

	public function tambahData($upload){
		$data = array(
			'nama'=>$this->input->post('nama'),
			'ktp'=>$this->input->post('ktp'),
			'email'=>$this->input->post('email'),
			'tel'=>$this->input->post('tel'),
			'jenis'=>$this->input->post('jenis'),
			'provinsi'=>$this->input->post('provinsi'),
			'kota' =>$this->input->post('kota'),
			'kec' =>$this->input->post('kec'),
			'alamat'=>$this->input->post('alamat'),
			'pos'=>$this->input->post('pos'),
			'lokasi'=>$this->input->post('lokasi'),
			'deskripsi'=>$this->input->post('deskripsi'),
			'bukti' => $upload['file']['file_name']
		);
		$this->db->insert('data_laporan',$data);
	}
	public function validation($mode){
		$this->load->library('form_validation'); 
		if($mode == "tambahData")
			$this->form_validation->set_rules('no', 'ID', 'required|numeric|max_length[11]');
		
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|max_length[30]');
		$this->form_validation->set_rules('jenis', 'Jenis Bencana', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
			
		if($this->form_validation->run()) 
			return TRUE; 
		else 
			return FALSE; 
	}public function m_verif($no){
		$data = array(
			"no" => $this->input->post('no'),
			"nama" => $this->input->post('nama'),
			"jenis" => $this->input->post('jenis'),
			"status" => $this->input->post('status')
		);
		
		$this->db->where('no', $no);
		$this->db->update('data_laporan', $data);
	}
	public function view_by($no){
		$this->db->where('no', $no);
		return $this->db->get('data_laporan')->row();
	}

}