<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Public_Profile_Model extends CI_Model{
        function __construct(){
            parent:: __construct();
        }

        function Profile($user_id){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('user_id', $user_id);
            return $this->db->get();
        }
 
        function Posts($user_id,$limit,$start){
            $this->db->select('*');
            $this->db->from('news_post');
            $this->db->where('user_id', $user_id);
            $this->db->where('delete_status', 0);
            $this->db->where('post_privacy', 1);
            $this->db->limit($limit, $start);
            $this->db->order_by('news_id', 'DESC');
            return $this->db->get();
        }

    
    }
