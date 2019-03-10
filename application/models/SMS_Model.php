<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
  
    class SMS_Model extends CI_Model{

        public function active_friend($parent_id, $sub_id){
            $this->db->select("*");
            $this->db->from('make_friends');
            $this->db->join('users', 'make_friends.sub_id = users.user_id');
            $this->db->where('parent_id', $parent_id);
            $this->db->where('sub_id', $sub_id); 
            if($query = $this->db->get()){
                return $query->row_array();
            } else{
                return false;
            }           
        }

        public function friend_info($sub_id){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('user_id', $sub_id);
            $this->db->where('delete_status',0);
            $query = $this->db->get();
            return $query;
        }
 
        public function send_sms($message){
            $this->db->insert('messages', $message);
        }

        public function conversation($sub_id){
            $this->db->select('*');
            $this->db->from('messages');
            $this->db->where('send_id', $this->session->userdata('user_id'));
            $this->db->where('receive_id', $sub_id);
            $this->db->order_by('send_time', 'desc');
            return $this->db->get();
        }
        public function receiver($sub_id){
            $this->db->select('*');
            $this->db->from('messages');
            $this->db->where('send_id', $sub_id);
            $this->db->where('receive_id', $this->session->userdata('user_id'));
            $this->db->order_by('send_time', 'desc');
            if($query = $this->db->get()){
                return $query->row_array();
            } else{
                return false;
            }          
        }
    }


?>