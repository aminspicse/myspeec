<?php

    class VideoController extends CI_Controller
    {

        function index()
        {
            //$this->load->library('encryption');
            $this->load->library('encrypt');
            $msg = 'Hello World';
            echo $this->encrypt->encode($msg);
        }

        public function count()
        {
            //echo $count = $this->db->get('messages')->num_rows();
        }

    }