<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function __construct(){
		
		parent::__construct();
		$this->load->model("connection_model");
		
	}

	public function index(){

		$data = array('data'=>$this->connection_model->getConnections());
		$this->load->view('connections/main', $data);
		
	}
	public function create(){

		$this->load->view('connections/add');

	}
	public function delete($id){

		$this->connection_model->delete($id);
		$this->session->set_flashdata('success', true);
		redirect(base_url()."home");

	}
	
}