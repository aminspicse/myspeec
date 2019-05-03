<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Live extends CI_Controller{

        public function index(){
            if($this->session->userdata('fname') == true){
                $this->load->view("header",array('search' => '', 'score' => '','others' =>''));
                $this->load->view('leftnav');
                $this->load->view("live/live");
            }else{
                redirect(base_url('Login/'));
            }
        }
    }