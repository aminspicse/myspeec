<?php 

class Activities_Model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function Log_query(){
        $this->db->select('*');
        $this->db->from('log_activities');
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->order_by('log_id', 'DESC');
        return $this->db->get();
    }
}