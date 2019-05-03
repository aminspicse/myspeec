<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Score_Model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }
        public function count_post(){
            $this->db->select('*');
            $this->db->from('news_post');
            $this->db->where('user_id',$this->session->userdata('user_id'));
            $this->db->order_by('news_id','desc');
            return $this->db->get();
        }
        public function count_like($news_id){
            $this->db->select('*');
            $this->db->from('news_like_dislike');
            $this->db->where('news_id',$news_id);
            $this->db->where_not_in('user_id', $this->session->userdata('user_id'));
            $this->db->where('likes',1);
            $qry = $this->db->get();
            return $qry->num_rows();
        }
        public function count_dislike($news_id){
            $this->db->select('*');
            $this->db->from('news_like_dislike');
            $this->db->where('news_id',$news_id);
            $this->db->where_not_in('user_id', $this->session->userdata('user_id'));
            $this->db->where('likes',0);
            $qry = $this->db->get();
            return $qry->num_rows();
        }
        public function count_comment($news_id){
            $this->db->select('*');
            $this->db->distinct('user_id');
            $this->db->from('news_comments');
            $this->db->where('news_id', $news_id);
            $this->db->where('comment_status', 0);
            $this->db->where_not_in('user_id', $this->session->userdata('user_id'));
            $qry = $this->db->get();
            return $qry->num_rows();
        }
    }