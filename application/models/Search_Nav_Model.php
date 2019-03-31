<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


    class Search_Nav_Model extends CI_Model{
        function __construct(){
            parent::__construct();
        }
 
        public function Search_Post($search){
            $this->db->select('*');  
            $this->db->from('news_post');
            $this->db->or_like('news_title', $search, 'both');
            $this->db->or_like('news_post_1', $search,'both');
            $this->db->or_like('news_post_2', $search,'both');
            $this->db->order_by('news_insert_time', 'desc');
            return $this->db->get();
                
        }

        public function Search_Friends($search){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->or_like('fname',$search, 'both');
            $this->db->or_like('lname',$search, 'both');
            //$this->db->or_like('fname'.'lname',$search, 'both');
            return $this->db->get();
                
        }
    }

?>