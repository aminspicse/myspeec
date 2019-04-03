<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


    class Search_Nav_Model extends CI_Model{
        function __construct(){
            parent::__construct();
        }
        
        /* public function like_count($news_id){
            $this->db->select('likes');
            $this->db->from('news_like_dislike');
            $this->db->where('news_id',  $news_id);
            $this->db->where('likes',1);
            return $this->db->get();
        }
        public function Search_All($search){
            $this->db->select('*');
            $this->db->from('posts');
            $this->db->order_by($this->like_count(32), 'desc');
        }  */
         
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
        public function total_friend($parend_id){
            $this->db->select('*');
            $this->db->from('make_friends');
            $this->db->where('parent_id', $parend_id);
            return $this->db->get();
        }

        public function Search_Video($search){
            $condition = "news_title like '$search' and 'video_link != null'"; 
            $this->db->select('*');  
            $this->db->from('news_post');
            //$this->db->or_like('news_title', $search, 'both');
            //$this->db->or_like('news_post_1', $search,'both');
            //$this->db->or_like('news_post_2', $search,'both');
            $this->db->where($condition);
            $this->db->order_by('news_insert_time', 'desc');
            return $this->db->get();
                
        }
    }

?>