<?php 
    class ChangePassword extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('ChangePass_Model');
            $this->Check_Login();
        }
        public function Check_Login(){
            if($this->session->userdata('user_id') == false){
                redirect(base_url().'Login');
            }
        }

        function index(){
            $this->form_validation->set_rules('newpassword','New Password','required',array('required' => 'Enter Your New Password'));
            $this->form_validation->set_rules('re_newpassword','New Password','required|matches[newpassword]',array('required' => 'Please Enter a New Password Password', 'matches' => 'Password Dose\'nt Matches'));
            //$this->form_validation->set_rules('pass')
            if($this->form_validation->run()==false){
                $this->load->view('header');
                $this->load->view('profile/profile_leftnav');
                $this->load->view('changepass/changepassword');
            }else{
                if(isset($_POST['changepass'])){
                    $data = array(

                        'password'  => sha1($_POST['newpassword'])
                    );
                   
                    
                }
                $this->ChangePass_Model->Update_Password($data);
                redirect(base_url().'Login/');
            }
        }
    }
?>