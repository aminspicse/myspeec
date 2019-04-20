<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller{
    function __construct(){
        parent::__construct();

        if($this->session->userdata('user_id') == false){
            redirect(base_url('Login/'), $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('SignUp').'">Click to SignUp</a>'));
        }
    }

    public function loginactivities(){
        $this->load->model('Activities_Model');
        $qry['login_query'] = $this->Activities_Model->Log_query();
        $this->load->view('header',array('search' => ''));
        $this->load->view('profile/profile_leftnav');
        $this->load->view('loginactivities/login',$qry);
    }

    private function log_query(){

    }
}