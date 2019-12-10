<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Company extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function store($table,$data)
        {
            if($this->db->insert($table,$data))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
        // for view all company
        public function fetch_all_company()
        { 
            $this->db->select('*');
            $this->db->from('company_list');
            //$this->db->join('profile_photo','profile_photo.company_id=company_list.company_id');
            $this->db->where('user_id', $this->session->userdata('user_id'));
            $this->db->where('company_status',1);
            $qry = $this->db->get();
            return $qry->result();
        }

        public function fetch_company_profilephoto($company_id){
            $this->db->select('*');
            $this->db->from('company_photo a');
            $this->db->join('company_list b','a.company_id = b.company_id');
            $this->db->where('a.company_id',$company_id);
            $this->db->where('a.photo_status',1);
            $this->db->order_by('a.photo_id','desc');
            $this->db->limit(1);
            return $this->db->get();
        }

        // COMPANY JOB
        public function company_job($company_id){
            $this->db->select('*');
            $this->db->from('post_job a');
            $this->db->join('company_list b', 'a.company_id = b.company_id');
            $this->db->where('a.user_id',$this->session->userdata('user_id'));
            $this->db->where('a.company_id',$company_id);
            $this->db->where('a.delete_status',0);
            $this->db->order_by('a.job_id', 'desc');
            return $this->db->get();
        }
        
        // view a company
        public function view_company_individual($company_id){
            $this->db->select('*');
            $this->db->from('company_list');
            $this->db->where('company_id',$company_id);
            $this->db->where('user_id',$this->session->userdata('user_id'));
            return $this->db->get();
        }

        // delete a company 
        public function delete_company($company_id){
            $this->db->where('company_id',$company_id);
            $this->db->where('user_id',$this->session->userdata('user_id'));
            if($this->db->update('company_list',array('company_status' => 0)))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function editcompany($company_id,$company_url)
        {
            $this->db->select('*');
            $this->db->from('company_list');
            $this->db->where('user_id',$this->session->userdata('user_id'));
            $this->db->where('company_id',$company_id);
            $this->db->where('company_url',$company_url);
            return $this->db->get();
        }

        public function updatecompanydata($company_id, $company_url, $data)
        {
            $this->db->where('user_id',$this->session->userdata('user_id'));
            $this->db->where('company_id',$company_id);
            $this->db->where('company_url', $company_url);
            if($this->db->update('company_list',$data))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        // fetch all applicant list for 
        public function appliedlist($job_id)
        {
            $this->db->select('*')
                ->from('apply_job a')
                ->join('users b', 'a.user_id = b.user_id')
                //->join('post_job c','a.job_id = c.job_id')
                ->where('a.job_id',$job_id)
                ->where('a.apply_status',1)
                ->where('a.reject_status',0);

            return $this->db->get();
        }

        // application reject 
        public function applicationreject($apply_id)
        {
            $data = array('reject_status' => 1);
            $this->db->where('apply_id', $apply_id);
            
            if($this->db->update('apply_job',$data))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }