<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Company_Model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }
        public function register($table,$data){
            $this->db->insert($table,$data);
        }
        public function fetch_all_company(){ // for view all company
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
            $this->db->from('company_photo');
            $this->db->join('company_list','company_photo.company_id = company_list.company_id');
            $this->db->where('company_photo.company_id',$company_id);
            $this->db->where('company_photo.photo_status',1);
            $this->db->order_by('company_photo.photo_id','desc');
            $this->db->limit(1);
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
            $this->db->update('company_list',array('company_status' => 0));
            return true;
        }
    }