<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


    class Search_Nav_Model extends CI_Model
    {
        function __construct()
        {
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
         
        public function Search_Post($search,$limit,$start)
        {
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

        public function Search_Friends($search,$limit,$start)
        {
            $this->db->select('*');
            $this->db->from('users');
            $this->db->or_like('fname',$search, 'both');
            $this->db->or_like('lname',$search, 'both');
            //$this->db->or_like('fname'.'lname',$search, 'both');
            $this->db->limit($limit,$start);
            return $this->db->get();
                
        }
        // search job 
        public function Search_Job($search, $limit, $start)
        {
            //$this->db->where('delete_status',0);
            $this->db->select('*');
            $this->db->from('post_job');
            $this->db->join('company_list','post_job.company_id = company_list.company_id');
            //$this->db->where('post_job.delete_status',0);
            $this->db->or_like('job_title', $search,'both');
            $this->db->or_like('job_position', $search,'both');
            $this->db->or_like('company_location', $search,'both');
            $this->db->or_like('company_location', $search,'both');
            $this->db->order_by('job_id','DESC');
            $this->db->limit($limit, $start);
            return $this->db->get();
        }
        // search for abbreviation
        public function Search_Abbr($search,$limit,$start)
        {
            //$this->db->where('abbr_status',0);
            $this->db->select('*');
            $this->db->from('abbreviation');
            $this->db->join('users','abbreviation.user_id = users.user_id');
            $this->db->or_like('short_form',$search,'both');
            $this->db->or_like('long_form',$search,'both');
            $this->db->or_like('description',$search,'both');
            $this->db->order_by('abbr_id','DESC');
            $this->db->limit($limit, $start);
            return $this->db->get();
        }
        // count following 
        public function total_following($parent_id)
        {
            $this->db->select('*');
            $this->db->from('make_friends');
            $this->db->where('parent_id', $parent_id);
            $this->db->where('delete_status',0);
            $qry = $this->db->get();
            return $qry->num_rows();
        }
        //count followers 
        public function total_followers($sub_id)
        {
            $this->db->select('*');
            $this->db->from('make_friends');
            $this->db->where('sub_id',$sub_id);
            $this->db->where('delete_status',0);
            //$this->db->order_by('friend_id','desc');
            $qry = $this->db->get();
            return $qry->num_rows();
        }
       
        public function Search_Video($search)
        {
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

