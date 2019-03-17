<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class All_Speaker extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('AllSpeaker_Model');
            $this->load->model('MakeFriend_Model');
            $this->session->userdata('user_id');
        }

        function index(){

            $data['allspeaker'] = $this->AllSpeaker_Model->allspeaker();
            // foreach($data['allspeaker']->result() as $row){
            //     $datas['parent_id'] = $this->session->userdata('user_id');
            //     $datas['sub_id'] = $rw->user_id;
            // }
            //$data['filter'] = $this->MakeFriend_Model->friend_filter($datas['parent_id'], $datas['sub_id']);
            $this->load->view('header');
            $this->load->view('leftnav');
            $this->load->view('allspeaker/allspeaker_list.php', $data);

            
        }
    }

?> 