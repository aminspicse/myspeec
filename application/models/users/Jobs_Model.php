<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Jobs_Model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }
        public function insert($table,$data){
            $this->db->insert($table, $data);
            return true;
        }

        public function fetech_job_public($limit,$start){
            $this->db->select('*');
            $this->db->from('post_job');
            $this->db->limit($limit,$start);
            return $this->db->get();
        }
        public function fetch_companylist(){
            $this->db->select('*');
            $this->db->from('company_list');
            $this->db->where('user_id',$this->session->userdata('user_id'));
            $this->db->where('company_status',1);
            $qry = $this->db->get();
            return $qry->result();
        }
    }