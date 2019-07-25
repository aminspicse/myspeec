<?php 
    class ChangePasswordController extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('users/ChangePassword');
            $this->Check_Login();
        }

        public function Check_Login()
        {
            if($this->session->userdata('user_id') == false)
            {
                redirect(base_url('login'));
            }
        }

        function index()
        {
            $this->form_validation->set_rules('newpassword','New Password','required',array('required' => 'Enter Your New Password'));
            $this->form_validation->set_rules('re_newpassword','New Password','required|matches[newpassword]',array('required' => 'Please Enter a New Password Password', 'matches' => 'Password Dose\'nt Matches'));
            //$this->form_validation->set_rules('pass')
            if($this->form_validation->run()==false)
            {
                $this->load->view('users/header', array('keyword' => '', 'title'=>'Change Password', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/changepass/changepassword');
            }
            else
            {
                if(isset($_POST['changepass']))
                {
                    $data = array(

                        'password'  => sha1($_POST['newpassword'])
                    );
                   
                    
                }
                $this->ChangePassword->Update_Password($data);
                redirect(base_url('logout'));
            }
        }
    }
