<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CV_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function save($table, $data){ // insert all cv data 
        $this->db->insert($table, $data);
        return true;
    }
    public function delete_data($column_name, $id,$table){ // delete all cv data
        $this->db->where($column_name,$id);
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $this->db->update($table, array('delete_status' => 1));
        return true;
    }
    public function update_data($key_name, $id, $table, $data){ // update all cv data
        /*
            $key_name = column name thats primary key id column
            $id  = column or key value
            $table = which table data will be updated
            $data = it is an array this data will be updated
        */
        $this->db->where($key_name,$id);
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $this->db->update($table, $data);
        return true;
    }
    public function fetch_education($user_id){ // fetch user education
        $this->db->select('*');
        $this->db->from('user_education');
        $this->db->where('user_id',$user_id);
        $this->db->where('privacy_status', 1);
        $this->db->where('delete_status',0);
        return $this->db->get();
    }
    public function fetch_experience($user_id){ // fetch all experience
        $this->db->select('*');
        $this->db->from('user_experience');
        $this->db->where('user_id',$user_id);
        $this->db->where('delete_status',0);
        return $this->db->get();
    }
    public function edit_experience($exp_id, $user_id){ // fetch individual data for update 
        $this->db->select('*');
        $this->db->from('user_experience');
        $this->db->where('experience_id', $exp_id);
        $this->db->where('user_id',$user_id);
        $this->db->where('delete_status',0);
        return $this->db->get();
    }
    
    public function fetch_skill($user_id){
        $this->db->select('*');
        $this->db->from('user_skill');
        $this->db->where('user_id',$user_id);
        $this->db->where('privacy_status', 1);
        $this->db->where('delete_status',0);
        return $this->db->get();
    }
    public function edit_skill($skill_id, $user_id){ // fetch skill individual data for update 
        $this->db->select('*');
        $this->db->from('user_skill');
        $this->db->where('skill_id', $skill_id);
        $this->db->where('user_id',$user_id);
        $this->db->where('delete_status',0);
        return $this->db->get();
    }
    public function fetch_training($user_id){
        $this->db->select('*');
        $this->db->from('user_training');
        $this->db->where('user_id',$user_id);
        $this->db->where('privacy_status', 1);
        $this->db->where('delete_status',0);
        return $this->db->get();
    }
    public function edit_training($training_id, $user_id){
        $this->db->select('*');
        $this->db->from('user_training');
        $this->db->where('training_id', $training_id);
        $this->db->where('user_id',$user_id);
        $this->db->where('delete_status',0);
        return $this->db->get();
    }
}