<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Forgot_Password extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Forgot_Password_Model');
            $this->load->library('form_validation');
            //public error;
        }

        public function forgot(){
            
            $this->load->view('navbarland');
            $this->load->view('forgot_password/forgot_password',array('error' => '')); 
        }

        public function forgot_val(){ //forgot validation
            if(isset($_GET['send_email'])){
                $data['username'] = $_GET['username'];
            }
            $data['check'] = $this->Forgot_Password_Model->Forgot($data['username']);
            $data['error'] = '';
            if($data['check'] == true){
                $this->load->view('navbarland');
                $this->load->view('forgot_password/verify_password', $data); 
            }else{
                $err['error'] = "This Email Is Not Registered";
                $this->load->view('navbarland');
                $this->load->view('forgot_password/forgot_password',$err); 
            }  
        }

        // check verification code right or wrong if right then load change password interface
        public function temp_password_val(){ 
           if(isset($_GET['verify_temp_password'])){
               $temp_password = $_GET['temp_password'];
               $code = $_GET['code'];
               $username = $_GET['username'];
           }
           $data['check'] = $this->Forgot_Password_Model->Forgot($username);
           if($temp_password == $code){
               $data['error'] = '';
               $this->load->view('navbarland');
               $this->load->view('forgot_password/change_password',$data);
           }else{
                $data['error'] = "Temporary password dose't match";
                $this->load->view('navbarland');
                $this->load->view('forgot_password/verify_password', $data); 
           }
        }

        public function change_password(){
           
            if(isset($_GET['change_password'])){
                $data['check'] = $this->Forgot_Password_Model->Forgot($_GET['username']);

                $newdata = array(
                    'password'  => $_GET['password'],
                    're_password' => $_GET['re_password'],
                    'username'    => $_GET['username'],
                    'temp_password' => rand(100000, 999999)
                );
            }

            if($newdata['password'] == $newdata['re_password']){
                $this->Forgot_Password_Model->update_password($newdata);

                redirect(base_url('login'), $this->session->set_flashdata('msg','Your Password Change Successfully'));
            }else{
                $data['error'] = "Password and Re-Password dose't match";
                $this->load->view('navbarland');
                $this->load->view('forgot_password/change_password', $data);
            }
        }
    }