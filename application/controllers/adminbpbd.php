<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminbpbd extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	
		if($this->session->userdata('status') != "welcome"){
			redirect(base_url("welcome"));
		}
	}

	function index(){
		$this->load->view('masuk_bpbd');
	}
}