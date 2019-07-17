<?php 

class Activities_Model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function Log_query($limit, $start){
        $this->db->cache_on();

        $this->db->select('*');
        $this->db->from('log_activities');
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->limit($limit, $start);
        $this->db->order_by('log_id', 'DESC');
        $this->db->cache_off();
        return $this->db->get();
    }
}