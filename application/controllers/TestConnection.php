<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestConnection extends CI_Controller {
	
	public function __construct(){

		parent::__construct();
		$this->load->model("connection_model");
		
	}

	public function test($id){
        
        $this->db->select("c.id, c.connection_name, c.server, c.user_name, c.name_database, c.databaseEngine, c.password");
        $this->db->from("Connections c");
        $this->db->where("c.id",$id);
        $result=$this->db->get();
        $connection = $result->row();

        switch ($connection->databaseEngine) {
            case "MySQL":
                return $this->testMysql($connection);
                break;
            case "MSSQL":
                return $this->testmssql($connection);
                break;
            case "PostgreSQL":
                return $this->testpostgresql($connection);
                break;
        }
		
    }   
    
    private function testMysql($connection){
        $servername = $connection->server;
        $username = $connection->user_name;
        $password = openssl_decrypt($connection->password,'aes128', '123');
        $name_database = "$connection->name_database";
        
        $conn = new mysqli($servername, $username, $password, $name_database);
       
        $this->session->set_flashdata('success', $conn->connect_error == NULL);
        redirect(base_url()."home");
          
    }

    private function testmssql($connection){
        $servername = $connection->server;
        $username = $connection->user_name;
        $password = openssl_decrypt($connection->password,'aes128', '123');
        $name_database = "$connection->name_database";
        
        //var_dump($password);
        $connectionInfo=array("Database"=>$name_database,
        "UID"=>$username, 
        "PWD"=>$password,
        );

        $conn =  sqlsrv_connect($servername, $connectionInfo);

        $this->session->set_flashdata('success', $conn != NULL);
        
         redirect(base_url()."home");

    }

	private function testpostgresql($connection){
        $servername = $connection->server;
        $username = $connection->user_name;
        $password = openssl_decrypt($connection->password,'aes128', '123');
        $name_database = "$connection->name_database";

        $conn = null;

        $conn = pg_connect("user=" . $username . " " . 
            "password=" . $password . " " . 
            "host=" . $servername . " " .
            "dbname=" . $name_database);
           
            $this->session->set_flashdata('success', $conn != NULL);
            redirect(base_url()."home");
    }
}