<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class All_Speaker extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('AllSpeaker_Model');
            $this->load->model('MakeFriend_Model');
            //$this->session->userdata('user_id');
        }
        
        

        function index(){
            
             
            //$data['allspeaker'] = $this->AllSpeaker_Model->allspeaker();
            // foreach($data['allspeaker']->result() as $row){
            //     $datas['parent_id'] = $this->session->userdata('user_id');
            //     $datas['sub_id'] = $rw->user_id;
            // }
            //$data['filter'] = $this->MakeFriend_Model->friend_filter($datas['parent_id'], $datas['sub_id']);
            $this->load->view('header',array('search' => '', 'score' => '','others' =>''));
            $this->load->view('leftnav');
            $this->load->view('allspeaker/allspeaker_list');

            
        }

        function fetch_friend() {
            $output = '';
            //$this->load->model('scroll_pagination_model');
            
            $data = $this->AllSpeaker_Model->allspeaker_fetch($this->input->post('limit'), $this->input->post('start'));
            if($data->num_rows() > 0)
            {
                foreach($data->result() as $row)
                {
                    // check friend or not //start
                    $qry = $this->MakeFriend_Model->friend_filter($this->session->userdata('user_id'), $row->user_id);
                    if($qry->num_rows() > 0){
                        $friend_status = "Connected";
                    }else{
                        $friend_status = "Connect";
                    }
                    // end check friend of not
                    $output .= '
                    <div class="post_data bg-white row">
                        <div class="col-1">
                            <a href='.base_url('Public_Profile/index/'.$row->user_id).'><img style="width: 40px" src='.$row->photo.'></a>
                        </div>
                        <div class="col-4">
                            <p class="text-danger"><a href='.base_url('Public_Profile/index/'.$row->user_id).'>'.$row->fname.' '.$row->lname.'</a></p>
                        </div>
                        <div class="col-3">
                            <p class="text-danger"><a href='.base_url('SMS/chating/'.$row->user_id).'>Send Message</a></p>
                        </div>
                        <div class="col-2">
                           <p><a href='.base_url('MakeFriend/friend_request/'.$row->user_id).'>'.$friend_status.'</a></p>
                        </div>
                        <div class="col-1">
                           <p>'.$row->country.'</p>
                        </div>
                        
                    </div>
                    ';
                }
            }
            echo $output;
	    }
        
    }
