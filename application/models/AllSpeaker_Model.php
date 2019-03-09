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
    } 

?>