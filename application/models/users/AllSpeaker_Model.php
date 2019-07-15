<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class AllSpeaker_Model extends CI_Model{
        function __construct(){
            parent::__construct();
        }

        public function allspeaker(){
            $this->db->select('*');
            $this->db->from('users');
            return $this->db->get();
        }

        public function allspeaker_fetch($limit,$start){ 
            $this->db->select('*');
            $this->db->from('users');
            $this->db->limit($limit, $start);
            $this->db->order_by('rand()');
            $query = $this->db->get();
            return $query;
        }
    } 

