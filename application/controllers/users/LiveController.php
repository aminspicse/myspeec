<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class LiveController extends CI_Controller
    {

        public function index()
        {
            if($this->session->userdata('user_id') == true)
            {
                $this->load->view("users/header",array('keyword' => '', 'title'=>'Live', 'score' => '','others' =>''));
                $this->load->view('users/leftnav');
                $this->load->view("users/live/live");
            }
            else
            {
                redirect(base_url('login'), $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup').'">Click to SignUp</a>'));
            }
        }
    }