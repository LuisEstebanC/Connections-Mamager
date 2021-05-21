<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class connection_model extends CI_Model {

    public function save($data){
        

        $this->db->query("ALTER TABLE Connections AUTO_INCREMENT 1");
        $this->db->set($data);
        $this->db->insert('Connections', $data);
    }

    public function getConnections(){
        $this->db->select("*");
        $this->db->from("Connections");
        
        $results=$this->db->get();
        return $results->result();
    }
    public function getConnection($id){
        $this->db->select("c.id, c.connection_name, c.server, c.user_name, c.name_database, c.databaseEngine,");
        $this->db->from("Connections c");
        $this->db->where("c.id",$id);
        $result=$this->db->get();
        return $result->row();
    }
    public function update($data, $id){
        $this->db->where("id",$id);
        $this->db->set($data);
        $this->db->update('Connections', $data);
    }

    public function delete($id){
        $this->db->where("id",$id);
        //$this->db->set($data);
        $this->db->delete('Connections');
    }
	
}
