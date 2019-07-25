<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class ForgotPassword extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function Forgot($username)
        {
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('username',$username);
            //$qry = $this->db->get();
            if($qry = $this->db->get())
            { 
                return $qry->row_array();
            }
            else
            {
                return false;
            }
        }

        public function update_password($newdata)
        {
            $this->db->where('username',$newdata['username']);
            $this->db->update('users', array('password' => sha1($newdata['password']), 'temp_password' => $newdata['temp_password'])); 
        }
    }