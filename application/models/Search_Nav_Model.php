<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


    class Search_Nav_Model extends CI_Model{
        function __construct(){
            parent::__construct();
        }
 
        public function Search_Post($search){
            $this->db->select('*');
            $this->db->from('news_post');
            $this->db->like('news_title',$search, 'both');
            return $this->db->get();
                
        }

        public function Search_Friends($search){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->like('fname',$search, 'both');
            return $this->db->get();
                
        }
    }

?>