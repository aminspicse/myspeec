<?php

    class Videos extends CI_Controller{


        function index(){
            $this->load->view('header',array('search' => '', 'score' => '','others' =>'');
            $this->load->view('leftnav');
           // $this->load->view('videos/index.php');
        }

        public function count(){
            echo $count = $this->db->get('messages')->num_rows();
        }

    }
?>