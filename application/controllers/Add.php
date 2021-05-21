<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("connection_model");		
	}
	public function index(){
		$this->load->view('connections/add');
	}
	public function save(){
		
		$conectionName = $this->input->post("conectionName");
		$userName = $this->input->post("userName");
		$password =$this->input->post("password");
		$database = $this->input->post("database");
		$server = $this->input->post("server");
		$databaseEngine = $this->input->post("databaseEngine");
		

		$this->form_validation->set_rules('conectionName', 'conection name', 'required');
		$this->form_validation->set_rules('userName', 'userName', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('database', 'Data base', 'required');
		$this->form_validation->set_rules('server', 'server', 'required');
		$this->form_validation->set_rules('databaseEngine', 'Database Engine', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('connections/add');
		}else{
			$string = 'It works ? Or not it works ?';
			$method = 'aes128';
			$pass= openssl_encrypt ($password, $method,'123');
			$data = array(
				"connection_name"=>$conectionName,
				"server"=>$server,
				"user_name"=>$userName,
				"password"=>$pass,
				"name_database"=>$database,
				"databaseEngine"=>$databaseEngine,
				
			);

			$this->connection_model->save($data);
			$this->session->set_flashdata('success', true);
			redirect(base_url()."home");
		}
	}
}
