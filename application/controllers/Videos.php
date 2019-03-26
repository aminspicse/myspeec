<?php

    class Videos extends CI_Controller{
        public function __construct(){
            parent::__construct();

        }

        function index(){
            $this->load->view('header',array('search' = '');
            $this->load->view('leftnav');
            $this->load->view('videos/index.php');
        }

        public function count(){
            echo $count = $this->db->get('messages')->num_rows();
        }

    }
?>