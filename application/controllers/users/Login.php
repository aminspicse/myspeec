<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller{

        function __construct(){
            parent::__construct();
            $this->load->model('users/Login_Model');
            $this->load->library('user_agent');
            date_default_timezone_set("Asia/Dhaka");
            //date_default_timezone_get();
            
        }
 
        public function index(){
            if($this->session->userdata('user_id') == true){
                redirect('home');
            }else{
                $this->load->view('users/navbarland',array('title'=>'Login Myspeec'));
                $this->load->view('users/login/login', array('error' => ''));
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

            // detect user agent start
                $agent['browser'] = $this->agent->browser().' '.$this->agent->version();
                $agent['os'] = $this->agent->platform();
                $agent['ip_address'] = $this->input->ip_address();
                $agent['mobile'] = $this->agent->is_mobile();
                $agent['referrer'] = $this->agent->referrer();
                $agent['robot'] = $this->agent->robot();
                $agent['agent_string'] = $this->agent->agent_string();
                $agent['try_time'] = date("l jS \of F Y h:i:s A");
                $agent['username'] = $_GET['username']; 
            //detect user agent end
            // to treack location start 
                /* hide for localhost 
                $ip = $_SERVER['REMOTE_ADDR'];
                $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
                $agent['country'] = $details->country;
                $agent['region'] = $details->region;
                $agent['city'] = $details->city;
                $agent['postal'] = $details->postal;
                $agent['loc'] = $details->loc;
                */
            // location end 

            if($check){
                $agent['accuracy'] = 1;
                $this->Login_Model->login_activities($agent);

                $id = $this->session->set_userdata('user_id', $check['user_id']);
                $this->session->set_userdata('fname', $check['fname']);
                $this->session->set_userdata('lname', $check['lname']);
                $this->session->set_userdata('username', $check['username']);
                $this->session->set_userdata('phone', $check['phone']);
                $this->session->set_userdata('country', $check['country']);
                //$this->session->set_userdata('password', $check['password']);
                $this->session->set_userdata('photo', $check['photo']);
                $this->session->set_userdata('fathers_name', $check['fathers_name']);
                $this->session->set_userdata('mothers_name', $check['mothers_name']);
                $this->session->set_userdata('present_address', $check['present_address']);
                $this->session->set_userdata('permanent_address', $check['permanent_address']);
                $this->session->set_userdata('nid', $check['nid']);

                redirect(base_url().'home');
            }else{
                $agent['accuracy'] = 0;
                $this->Login_Model->login_activities($agent);

                $this->load->view('users/navbarland',array('title'=>'Myspeec Login/Signup'));
                $error['error'] = "Email or Password Invalide";
                $this->load->view('users/login/login', $error);
            }
        }

        function logout(){
            $this->session->sess_destroy();
            redirect(base_url());
        }

        private function loginmail(){
            $this->load->library('email');
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://mail.myspeec.com',
                'smtp_port' =>  465,
                'smtp_user' => 'info@myspeec.com',
                'smtp_pass' => 'Amin766855@gmail.com',
                'mailtype'  => 'html'
            );
            $this->email->initilize($config);
            $this->email->set_mailtype('html');
            $this->email->set_newline('\n\r');

            $sms  = '<h1>Login New Device </h2>';
            $sms  .= '';
        }
    }

?>