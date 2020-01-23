<?php
    class Abbreviation extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }

        function store($data)
        {
            $this->db->insert('abbreviation',$data);
            return true;
        }
        
        function fetchall($limit,$start){
            $this->db->select('*');
            $this->db->from('abbreviation');
            $this->db->join('users','abbreviation.user_id = users.user_id');
            $this->db->limit($limit,$start);
            return $this->db->get();
        }
    }