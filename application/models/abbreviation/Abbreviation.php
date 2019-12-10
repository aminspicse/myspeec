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
    }