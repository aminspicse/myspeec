<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class MakeFriend extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('Public_Profile_Model');
            $this->load->model('MakeFriend_Model');

            if($this->session->userdata('user_id') == false){
                redirect(base_url('Login/'), $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('SignUp').'">Click to SignUp</a>'));
            }
        } 

        public function friend_request($user_id){
            $data['user_id'] = $user_id;
            $data['parent_id'] = $this->session->userdata('user_id'); // check for friend filtering 
            $data['sub_id'] = $user_id;// check for friend request filtering 
            $data['queryindex'] = $this->Public_Profile_Model->Profile($user_id);
            $data['filter_request'] = $this->MakeFriend_Model->friend_filter($data['parent_id'], $data['sub_id']);
            $this->load->view('header',array('search' => '', 'score' => '','others' =>''));
            $this->load->view('leftnav');
            $this->load->view('public_profile/index',$data);
            $this->load->view('public_profile/about.php', $data);
           


        }

        public function makefriend($sub_id){
            $data = array(
                'parent_id' => $this->session->userdata('user_id'),
                'sub_id'    => $sub_id
            );
            $subid['user_id'] = $sub_id;
            $check = $this->MakeFriend_Model->friend_filter($data['parent_id'], $data['sub_id']);
            if($check->num_rows() > 0){
                $this->friend_request($subid['user_id']);
            }else{
                $this->MakeFriend_Model->make_friend($data);
                $this->friend_request($subid['user_id']);
            }
        }
    }

