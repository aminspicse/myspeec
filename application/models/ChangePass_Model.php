<?php 
    class ChangePass_Model extends CI_Model{

        function Password_Check($data){
            $this->db->select('password');
            $this->db->from('users');
            $this->db->where('user_id', $user_id);
            $this->db->where('password', $opas);
            return $this->db->get();
            
        }

        function Update_Password($data){
            $this->db->where('user_id', $this->session->userdata('user_id'));
            $this->db->update('users',$data);
        }
    }
?>