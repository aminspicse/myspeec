<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Live extends CI_Controller{

        public function index(){
            if($this->session->userdata('fname') == true){
                $this->load->view("users/header",array('keyword' => '', 'title'=>'Live', 'score' => '','others' =>''));
                $this->load->view('users/leftnav');
                $this->load->view("users/live/live");
            }else{
                redirect(base_url('login'));
            }
        }
    }