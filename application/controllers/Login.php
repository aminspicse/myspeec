<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller{

        function __construct(){
            parent::__construct();
            $this->load->model('Login_Model');
            
            //date_default_timezone_set("Asia/Dhaka");
            //date_default_timezone_get();
        }
 
        public function index(){
            if($this->session->userdata('user_id') == true){
                redirect('Home');
            }else{
                $this->load->view('navbarland');
                $this->load->view('login/login', array('error' => ''));
            }
        }

        function Check_Validation(){

            if(isset($_GET['login'])){
                $data = array(
                    'username' => $_GET['username'],
                    'password' => sha1($_GET['password'])
                );
            }

            $check = $this->Login_Model->check_data($data['username'], $data['password']);

            if($check){
                $id = $this->session->set_userdata('user_id', $check['user_id']);
                $this->session->set_userdata('fname', $check['fname']);
                $this->session->set_userdata('lname', $check['lname']);
                $this->session->set_userdata('username', $check['username']);
                $this->session->set_userdata('phone', $check['phone']);
                $this->session->set_userdata('country', $check['country']);
                $this->session->set_userdata('password', $check['password']);
                $this->session->set_userdata('photo', $check['photo']);

                redirect(base_url().'Home');
            }else{
                $this->load->view('navbarland');
                $error['error'] = "Email or Password Invalide";
                $this->load->view('login/login', $error);
            }
        }

        function logout(){
            $this->session->sess_destroy();
            redirect(base_url('Landing_page'));
        }

        public function Date(){
            //$this->load->helper('date');
            
            //$datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
          // echo $time =  Date('d-m-y h:i:s');

          //date_default_timezone_set($this->session->userdata('timezone'));
           $data1 = array(
                'log_date' => Date('d-m-y'),
                'log_time' => Date('h:i:s: am'),
           );
           echo $data1['log_date'];
           echo $data1['log_time'];
           echo timezone_menu('UM8');

           echo sha1('12345678');

           

        }
    }

?>