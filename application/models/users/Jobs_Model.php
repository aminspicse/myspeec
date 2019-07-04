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

        public function fetech_job_public($limit,$start){ // for view all job 
            $this->db->select('*');
            $this->db->from('post_job');
            $this->db->join('company_list','post_job.company_id = company_list.company_id');
            $this->db->limit($limit,$start);
            $this->db->where('post_job.delete_status',0);
            $this->db->order_by('post_job.job_id','desc');
            return $this->db->get();
        }
        public function fetch_view_full_job($job_id){ // for full view in a job
            $this->db->select('*');
            $this->db->from('post_job');
            $this->db->join('company_list','post_job.company_id = company_list.company_id');
            $this->db->where('post_job.job_id',$job_id);
            $this->db->where('post_job.delete_status',0);
            $queary = $this->db->get();
            return $queary->result();
        }
        public function fetch_companylist(){
            $this->db->select('*');
            $this->db->from('company_list');
            $this->db->where('user_id',$this->session->userdata('user_id'));
            $this->db->where('company_status',1);
            $this->db->order_by('company_id','desc');
            $qry = $this->db->get();
            return $qry->result();
        }
    }