<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admindinas extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	
		if($this->session->userdata('status') != "Welcome"){
			redirect(base_url("Welcome"));
		}
	}

	function index(){
		$this->load->view('masuk_dinas');
	}
}