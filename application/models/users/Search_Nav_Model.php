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
         
        public function Search_Post($search,$limit,$start){
            //$this->db->where('delete_status', 0);
            //$this->db->where('post_privacy',1);
            $this->db->select('*');  
            $this->db->from('news_post');
            //$this->db->where('post_privacy',1);
            //$this->db->where('delete_status',0);
            $this->db->like('news_title', $search, 'both');
            $this->db->or_like('news_post_1', $search,'both');
            //$this->db->or_like('news_post_2', $search,'both');
            $this->db->order_by('news_insert_time', 'desc');
            
            $this->db->limit($limit,$start);
            return $this->db->get();
                
        } 

        public function Search_Friends($search,$limit,$start){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->or_like('fname',$search, 'both');
            $this->db->or_like('lname',$search, 'both');
            //$this->db->or_like('fname'.'lname',$search, 'both');
            $this->db->limit($limit,$start);
            return $this->db->get();
                
        }
        // count following 
        public function total_following($parent_id){
            $this->db->select('*');
            $this->db->from('make_friends');
            $this->db->where('parent_id', $parent_id);
            $this->db->where('delete_status',0);
            $qry = $this->db->get();
            return $qry->num_rows();
        }
        //count followers 
        public function total_followers($sub_id){
            $this->db->select('*');
            $this->db->from('make_friends');
            $this->db->where('sub_id',$sub_id);
            $this->db->where('delete_status',0);
            //$this->db->order_by('friend_id','desc');
            $qry = $this->db->get();
            return $qry->num_rows();
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

