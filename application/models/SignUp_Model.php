<?php 

class SignUp_Model extends CI_Model{

    public function insert($table, $data){
        $this->db->insert($table, $data);

    }
}


?>