<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Company_Model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }
        public function register($table,$data){
            $this->db->insert($table,$data);
        }
    }