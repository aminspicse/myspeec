<?php

    class AbbreviationPublicController extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('abbreviation/Abbreviation');
        }

        public function index()
        {
            $this->load->view('users/header',array('keyword' => '', 'title'=>$this->session->userdata('fname').' '.$this->session->userdata('lname'),'score' => '','others' =>''));
            $this->load->view('users/leftnav');
            $this->load->view('abbreviation/abbrpublic');
        }

        public function abbreviations()
        {
            $this->load->view('users/header',array('keyword' => '', 'title'=>$this->session->userdata('fname').' '.$this->session->userdata('lname'),'score' => '','others' =>''));
            $this->load->view('users/leftnav');
            $this->load->view('abbreviation/abbrpublic');
        }
        // fetch abbreviation
        public function fetch_abbreviation()
        { 
            $output = '';
            $qry =  $this->Abbreviation->fetchall($this->input->post('limit'),$this->input->post('start'));
            if($qry->num_rows()>0)
            {
                foreach ($qry->result() as $row) 
                {
                    $output .= '
                    <div class="post_data bg-white row"> 
                        <h4>'.$row->short_form.' = '.$row->long_form.' </h4>
                        <br>
                        <p> '.$row->description.' </p>
                        <a></a>
                        <p> Created By <a href='.base_url("view/".$row->user_id.'/'.$row->fname.$row->lname).'>'.$row->fname.' '.$row->lname.' </a> '.$row->created_at.'</p>
                    </div>
                    ';
                }
            }
            echo $output;
        }
    }