<?php 

class SignUp extends CI_Model
{

    public function insert($table, $data)
    {
        if($this->db->insert($table, $data))
        {
            return true;
        }
        else
        {
            return false;
        }

    }
}


