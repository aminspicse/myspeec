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
    public function delete_data($table, $key_name, $key_value,$user_id){ // delete all cv data
        $this->db->where($key_name,$key_value);
        $this->db->where('user_id', $user_id);
        $this->db->update($table, array('delete_status' => 1));
        return true;
    }
    public function update_data($table, $key_name, $key_value, $user_id, $data){ // update all cv data
        /*
            $key_name = column name thats primary key id column
            $id  = column or key value
            $table = which table data will be updated
            $data = it is an array this data will be updated
        */
        $this->db->where($key_name,$key_value);
        $this->db->where('user_id',$user_id);
        $this->db->update($table, $data);
        return true;
    }
    public function fetch_data_for_edit($table,$key_name, $key_value, $user_id){
        /*
            $table = table name which table's will fetched data
            $key_name  = table primary key name
            $key_value = primary key value
            $user_id = user tables id it's a foreign key
        */
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($key_name, $key_value);
        $this->db->where('user_id',$user_id);
        $this->db->where('delete_status',0);
        return $this->db->get();
    }
    public function fetch_data_for_view_admin($table, $key_name, $user_id){ 
        /* fetch user data for view
            $table = table name which table's will fetched data
            $key_name  = table primary key name
            $key_value = primary key value
            $user_id = user tables id it's a foreign key 
        */
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('user_id',$user_id);
        $this->db->where('delete_status',0);
        $this->db->order_by($key_name,'desc');
        return $this->db->get();
    }
   
}