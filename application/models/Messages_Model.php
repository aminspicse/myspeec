<?php 
    class Messages_Model extends CI_Model{

        function recever_id($recever){
            $this->db->where('user_id', $recever);
            $this->db->from('users');
            return $this->db->get();
        }

        function send_msg($msg){
            $this->db->insert('messages',$msg);
           // return;
        }
    }
?>