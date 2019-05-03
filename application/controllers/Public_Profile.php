<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Public_Profile extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Public_Profile_Model');
            $this->load->model('MakeFriend_Model');
        }

        public function index($user_id){
            // start validation for friend request 
            $data['parent_id'] = $this->session->userdata('user_id'); // check for friend filtering 
            $data['sub_id'] = $user_id;// check for friend request filtering 
            $data['filter_request'] = $this->MakeFriend_Model->friend_filter($data['parent_id'], $data['sub_id']);
            //end validation for friend request 

            $data['user_id'] = $user_id;
            $data['queryindex'] = $this->Public_Profile_Model->Profile($user_id);
            $this->load->view('header',array('search' => '', 'score' => '','others' =>''));
            $this->load->view('leftnav');
            $this->load->view('public_profile/index.php', $data);
            $this->load->view('public_profile/about.php', $data);
        }

        public function posts($user_id){
            // start validation for friend request 
            $data['parent_id'] = $this->session->userdata('user_id'); // check for friend filtering 
            $data['sub_id'] = $user_id;// check for friend request filtering 
            $data['filter_request'] = $this->MakeFriend_Model->friend_filter($data['parent_id'], $data['sub_id']);
            //end validation for friend request 
            
            $data['user_id'] = $user_id;
            $data['queryindex'] = $this->Public_Profile_Model->Profile($user_id);
            $data['querypost'] = $this->Public_Profile_Model->Posts($user_id);
            $this->load->view('header',array('search' => '', 'score' => '','others' =>''));
            $this->load->view('leftnav');
            $this->load->view('public_profile/index.php', $data);
            $this->load->view('public_profile/post.php', $data);
        }
    }
?>