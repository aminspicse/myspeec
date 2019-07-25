<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class AllSpeakerController extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('users/AllSpeaker');
            $this->load->model('users/MakeFriend');
            //$this->session->userdata('user_id');
        }
        
        

        function index()
        {
            
            $this->load->view('users/header',array('keyword' => '', 'title'=>'All Sepaker', 'score' => '','others' =>''));
            $this->load->view('users/leftnav');
            $this->load->view('users/allspeaker/allspeaker_list');
        }

        function fetch_friend() 
        {
            $output = '';
            $data = $this->AllSpeaker->allspeaker_fetch($this->input->post('limit'), $this->input->post('start'));
            if($data->num_rows() > 0)
            { 
                foreach($data->result() as $row)
                {
                    // check friend or not //start
                    $qry = $this->MakeFriend->friend_filter($this->session->userdata('user_id'), $row->user_id);
                    if($qry->num_rows() > 0)
                    {
                        $friend_status = "Connected";
                    }
                    else
                    {
                        $friend_status = "Connect";
                    }
                    // end check friend of not
                    $output .= '
                    <div class="post_data bg-white row">
                        <div class="col-md-1">
                            <a href='.base_url('view/'.$row->user_id.'/'.url_title($row->fname.$row->lname)).'><img style="width: 80%" class="rounded-circle" src='.$row->photo.'></a>
                        </div>
                        <div class="col-md-4 col-xs-6"> 
                            <p class="text-danger" style="margin-top: 0px"><a href='.base_url('view/'.$row->user_id.'/'.url_title($row->fname.$row->lname)).'>'.$row->fname.' '.$row->lname.'</a></p>
                            <p style="margin-top: -10px">'.$row->phone.'</p>
                        </div>
                        <div class="col-md-3">
                            <p class="text-danger" style="margin-top: 20px"><a href='.base_url('chat/'.$row->user_id).'>Send Message</a></p>
                        </div>
                        <div class="col-md-2">
                           <p style="margin-top: 20px"><a href='.base_url('friendrequest/'.$row->user_id).'>'.$friend_status.'</a></p>
                        </div>
                        <div class="col-md-1">
                           <p style="margin-top: 20px">'.$row->country.'</p>
                        </div>
                        
                    </div>
                    ';
                }
            }
            echo $output;
	    }
        
    }
