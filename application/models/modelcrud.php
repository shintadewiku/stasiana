<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelcrud extends CI_Model {

	/*public function getUser($table_name){
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}*/
	public function getUser(){
		return $this->db->get('data_laporan')->result();
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
	/*public function tambahData($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}*/
	public function tambahData($upload){
		$data = array(
			'nama'=>$this->input->post('nama'),
			'ktp'=>$this->input->post('ktp'),
			'email'=>$this->input->post('email'),
			'tel'=>$this->input->post('tel'),
			'jenis'=>$this->input->post('jenis'),
			'alamat'=>$this->input->post('alamat'),
			'provinsi'=>$this->input->post('provinsi'),
			'pos'=>$this->input->post('pos'),
			'lokasi'=>$this->input->post('lokasi'),
			'deskripsi'=>$this->input->post('deskripsi'),
			'bukti' => $upload['file']['file_name']
		);
		$this->db->insert('data_laporan',$data);
	}
	public function editData($table_name,$data,$id){
		$this->db->where('kode_user',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	public function hapusData($table_name, $id){
		$this->db->where('kode_user',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}
	public function dataEdit($table_name,$id){
		$this->db->where('kode_user',$id);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}

	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	public function cek_bpbd($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}