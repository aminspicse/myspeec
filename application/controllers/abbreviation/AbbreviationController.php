<?php 
    class AbbreviationController extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('abbreviation/Abbreviation');
            if($this->session->userdata('user_id') == false)
            {
                redirect(base_url().'login.asp', $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup.asp').'">Click to SignUp</a>'));
            }
        }
        function index()
        {
            $this->form_validation->set_rules('short_form','Short Form','required');
            $this->form_validation->set_rules('long_form','Long Form','required');
            if($this->form_validation->run() == false)
            {
                $this->load->view('users/header',array('keyword' => '', 'title'=>$this->session->userdata('fname').' '.$this->session->userdata('lname'),'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('abbreviation/create');
            }
            else
            {
                if(isset($_POST['save']))
                {
                    $data = array(
                        'user_id'           => $this->session->userdata('user_id'),
                        'short_form'        => $_POST['short_form'],
                        'long_form'         => $_POST['long_form'],
                        'description'       => $_POST['description'],
                        'created_at'        => date("l jS \of F Y h:i:s A")
                    );
                    if($this->Abbreviation->store($data) == true){
                        $msg = "<p class='text-success'>Successfully Saved an abbreviation</p>";
                        redirect(base_url('/abbreviation/create',$this->session->set_flashdata('message',$msg)));
                    }
                    else
                    {
                        $msg = "<p class='text-danger'>Something is Wrong Try again</p>";
                        redirect(base_url('/abbreviation/create',$this->session->set_flashdata('message',$msg)));
                    }
                }
            }
            
        }
    }