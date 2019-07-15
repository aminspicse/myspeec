<?php 

    class NewSpeec_Model extends CI_Model{
        function insert_speec($data){
            $this->db->insert('news_post',$data);
            return true;
        }
    }
