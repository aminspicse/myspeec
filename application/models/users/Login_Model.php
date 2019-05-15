<?php 

    class Login_Model extends CI_Model{

        function check_data($username, $password){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            
            if($query = $this->db->get()){
                return $query->row_array();
            }else{
                return false;
            }
 
        }

        function login_activities($agent){
            $this->db->insert('log_activities',$agent);
        }

       
    } 
