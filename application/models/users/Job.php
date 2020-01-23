<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Job extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $user_id = $this->session->userdata('user_id');
        } 

        public function insert($table,$data)
        {
            if($this->db->insert($table, $data))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        //delete company job 
        public function deletejob($company_id, $job_id){
            $this->db->where('user_id',$this->session->userdata('user_id'));
            $this->db->where('company_id',$company_id);
            $this->db->where('job_id', $job_id);
            if($this->db->update('post_job', array('delete_status'=>1)))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        // for view all job 
        public function fetech_job_public($limit,$start)
        { 
            $this->db->select('*');
            $this->db->from('post_job a');
            $this->db->join('company_list b','a.company_id = b.company_id');
            $this->db->limit($limit,$start);
            $this->db->where('a.delete_status',0);
            //$this->db->where('a.application_dedline' <= date('Y-m-d'));
            $this->db->order_by('a.job_id','desc');
            return $this->db->get();
        }

        // for full view in a job
        public function fetch_view_full_job($job_id)
        {
            $this->db->select('*');
            $this->db->from('post_job a');
            $this->db->join('company_list b','a.company_id = b.company_id');
            $this->db->where('a.job_id',$job_id);
            $this->db->where('a.delete_status',0);
            $queary = $this->db->get();
            return $queary->result();
        }
        
        public function fetch_companylist()
        {
            $this->db->select('*');
            $this->db->from('company_list');
            $this->db->where('user_id',$this->session->userdata('user_id'));
            $this->db->where('company_status',1);
            $this->db->order_by('company_id','desc');
            $qry = $this->db->get();
            return $qry->result();
        }

        // check job already applyed or not if already applied then apply button will disabled
        public function check_job_applyed_ornot($job_id)
        {
            $this->db->where('user_id',$this->session->userdata('user_id'));
            $this->db->where('job_id',$job_id);
            $this->db->where('apply_status',1);
            $qry = $this->db->get('apply_job');
            if($qry->num_rows() > 0)
            {
                return true; //if applyed found
            }
            else
            {
                return false;
            }
        }

        // apply job 
        public function applyjob($job_id)
        {
            $data = array(
                'user_id'   => $this->session->userdata('user_id'),
                'job_id'    => $job_id
            );

            if($this->db->insert('apply_job',$data))
            {
                return true;
            }
            else
            {
                return false; 
            }
        }

        public function check_jobid_valide_ornot($job_id)
        {
            $this->db->where('job_id',$job_id);
            $qry = $this->db->get('post_job');
            if($qry->num_rows() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }