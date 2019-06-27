<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Visitor_Count extends CI_Model{
        public function visitor(){
            $qry = $this->db->get('ci_sessions');
            return $qry->num_rows();
        }
        public function unique_visit(){
            //$sql = "SELECT DISTINCT(ip_address) FROM ci_sessions";
            $this->db->select('ip_address');
            $this->db->from('ci_sessions');
            $this->db->distinct('ip_address');
            $qry = $this->db->get();
            return $qry->num_rows();
        }
        public function live(){
            $this->db->select('data');
            $this->db->from('ci_sessions');
            $this->db->like('data','user_id');
            $qry = $this->db->get();
            return $qry->num_rows();
        }
    }