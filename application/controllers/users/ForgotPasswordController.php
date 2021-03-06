<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class ForgotPasswordController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('users/ForgotPassword');

            if($this->session->userdata('user_id') == true)
            {
                redirect('home');
            }

            
        }
        public $title = 'Myspeec';

        public function forgot()
        {
            
            $this->load->view('users/navbarland',array('title'=>'Forgotten Password | i can\'t Log In MySpeec'));
            $this->load->view('users/forgot_password/forgot_password',array('error' => '')); 
        }

        //forgot validation
        public function forgot_val()
        { 
            if(isset($_GET['send_email']))
            {
                $data['username'] = $_GET['username'];
                //send email start 
                
                $this->load->library('email');

                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://mail.myspeec.com',
                    'smtp_port' =>  465,
                    'smtp_user' => 'info@myspeec.com',
                    'smtp_pass' => 'Amin766855@gmail.com',
                    'mailtype'  => 'html'
                );
      
                $this->load->library('email');
                $this->email->initialize($config);
                $this->email->set_mailtype("html");
                $this->email->set_newline("\r\n");
                $code = $this->ForgotPassword->Forgot($data['username']);
                $sms  = "<h2> Dear, ".$code['fname']." ".$code['lname'];
                $sms .= "<h1>Your Temporary Password Is = <b>".$code['temp_password']."</b> </h1>";
                $sms .= "<p>This password Use for just one time</p>";
                $sms .= "<h2>Thank You</h2>";
                $sms .= "<p>Myspeec Developer team</p>";
                
            
                $this->email->from("info@myspeec.com","Myspeec Team");
                $this->email->to($data['username']);
                $this->email->subject("Temporary Password");
                
                $this->email->message($sms);
            
                if($this->email->send())
                {
                   // echo "Your email was sent.!";
                } else {
                    //show_error($this->email->print_debugger());
                }
                    
                //send email end 
            }
            $data['check'] = $this->ForgotPassword->Forgot($data['username']);
            $data['error'] = '';
            if($data['check'] == true)
            {
                $this->load->view('users/navbarland',array('title'=>$this->title));
                $this->load->view('users/forgot_password/verify_password', $data); 
            }
            else
            {
                $err['error'] = "This Email Is Not Registered"."<a href=".base_url('signup')."> Click Signup</a>";
                $this->load->view('users/navbarland',array('title'=>$this->title));
                $this->load->view('users/forgot_password/forgot_password',$err); 
            }  
        }

        public function send_mail()
        {
            //
        }

        // check verification code right or wrong if right then load change password interface
        public function temp_password_val()
        { 
           if(isset($_GET['verify_temp_password']))
           {
               $temp_password = $_GET['temp_password'];
               $code = $_GET['code'];
               $username = $_GET['username'];
           }
           $data['check'] = $this->ForgotPassword->Forgot($username);
           if($temp_password == $code)
           {
               $data['error'] = '';
               $this->load->view('users/navbarland',array('title'=>$this->title));
               $this->load->view('users/forgot_password/change_password',$data);
           }
           else
           {
                $data['error'] = "Temporary password dose't match";
                $this->load->view('users/navbarland',array('title'=>$this->title));
                $this->load->view('users/forgot_password/verify_password', $data); 
           }
        }

        public function change_password()
        {
           
            if(isset($_GET['change_password']))
            {
                $data['check'] = $this->ForgotPassword->Forgot($_GET['username']);

                $newdata = array(
                    'password'  => $_GET['password'],
                    're_password' => $_GET['re_password'],
                    'username'    => $_GET['username'],
                    'temp_password' => rand(100000, 999999)
                );
            }

            if($newdata['password'] == $newdata['re_password'])
            {
                $this->ForgotPassword->update_password($newdata);

                redirect(base_url('login'), $this->session->set_flashdata('msg','Your Password Changed Successfully'));
            }
            else
            {
                $data['error'] = "Password and Re-Password dose't match";
                $this->load->view('users/navbarland',array('title'=>$this->title));
                $this->load->view('users/forgot_password/change_password', $data);
            }
        }
    }