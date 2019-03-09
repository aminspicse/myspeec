<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class SMS_Model extends CI_Model{

        public function active_friend(){
            $this->db->select("*");
            $this->db->from('users');
            return $this->db->get();
              
        }
    }


?>