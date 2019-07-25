<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
  
    class SMS extends CI_Model
    {

        public function active_friend($parent_id, $sub_id)
        {
            $this->db->select("*");
            $this->db->from('make_friends');
            $this->db->join('users', 'make_friends.sub_id = users.user_id');
            $this->db->where('parent_id', $parent_id);
            $this->db->where('sub_id', $sub_id); 
            if($query = $this->db->get())
            {
                return $query->row_array();
            } 
            else
            {
                return false;
            }           
        }

        public function friend_info($sub_id)
        {
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('user_id', $sub_id);
            $this->db->where('delete_status',0);
            $query = $this->db->get();
            return $query;
        }
 
        public function send_sms($message)
        {
            $this->db->insert('messages', $message);
        }

        public function receiver($sub_id)
        {
            $this->db->select('*');
            $this->db->from('messages');
            $this->db->where('send_id', $this->session->userdata('user_id'));
            $this->db->where('receive_id', $sub_id);
            $this->db->order_by('send_time', 'desc');
            return $this->db->get();
        }
        public function conversation($sub_id)
        {
           // $condition= "`sender_id`= '$sender_id' AND `receiver_id` = '$receiver_id' OR `sender_id`= '$receiver_id' AND `
            //receiver_id` = '$sender_id'";
            $send_id = $this->session->userdata('user_id');
            $condition = "'send_id' = '$send_id' AND 'receive_id' = '$sub_id' OR 'send_id' = '$sub_id' AND 'receive_id' = '$send_id'";
            $this->db->select('*');
            $this->db->from('messages');
            //$this->db->where($condition);
            //$this->db->where('receive_id', $this->session->userdata('user_id'));
            //$this->db->where('send_id',$send_id);
            $this->db->where("receive_id='$sub_id' && send_id='$send_id' || receive_id='$send_id' && send_id='$sub_id'");
            $this->db->order_by('send_time', 'desc');
            return $this->db->get();
        }
    }


