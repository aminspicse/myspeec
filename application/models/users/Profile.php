<?php

    class Profile extends CI_Model
    {

        function __construct()
        {
            parent::__construct();
        }

        function profile()
        {
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('user_id', $this->session->userdata('user_id'));
            $this->db->where('delete_status',0);
            return $this->db->get();
            
        }

        public function total_friend()
        {
            $this->db->select('*');
            $this->db->from('make_friends');
            $this->db->where('parent_id', $this->session->userdata('user_id'));
            $this->db->where('delete_status',0);
            //$this->db->limit(10);
            $query = $this->db->get();
            return $query;
        }

        public function fetch_friend($limit,$start)
        {
            $this->db->select('*');
            $this->db->from('make_friends');
            $this->db->where('parent_id', $this->session->userdata('user_id'));
            $this->db->where('delete_status',0);
            $this->db->limit($limit,$start);
            $query = $this->db->get();
            return $query;
        }

        public function totalfriends($sub_id)
        {
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('user_id',$sub_id);
            $this->db->where('delete_status',0);
            if($query = $this->db->get())
            {
                return $query->row_array();
            }
            else
            {
                return false;
            }

        }

        public function removefriend($id)
        {
            $this->db->where('sub_id', $id);
            $this->db->update('make_friends', array('delete_status' => '1'));
        }

        function UpdateInfo($updates)
        {
            $this->db->where('user_id',$updates['user_id']);
            if($this->db->update('users', $updates))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        function Update_profilephoto($data)
        {
            $this->db->where('user_id', $this->session->userdata('user_id'));
            if($this->db->update('users', $data))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

    }


