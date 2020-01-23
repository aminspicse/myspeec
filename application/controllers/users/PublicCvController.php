<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class PublicCvController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('users/PublicProfile');
            $this->load->model('users/MakeFriend');
            $this->load->model('users/Score');
        } 

        public function public_cv($user_id, $user_name)
        {
            // start validation for friend request 
            $data['parent_id'] = $this->session->userdata('user_id'); // check for friend filtering 
            $data['sub_id'] = $user_id;// check for friend request filtering 
            $data['filter_request'] = $this->MakeFriend->friend_filter($data['parent_id'], $data['sub_id']);
            //end validation for friend request 
            $data['user_id'] = $user_id;
            $data['profile'] = $this->PublicProfile->Profile($user_id);
            //just collect user name
            foreach($data['profile']->result() as $tit)
            { 
                $title = $tit->fname.' '.$tit->lname;
            }
            $this->load->view('users/header',array('title' => $title, 'keyword'=>$title, 'score' => '','others' =>''));
            $this->load->view('users/leftnav');
            $this->load->view('users/public_profile/index.php', $data);
            $this->load->view('users/public_profile/public_cv');
        }
    }