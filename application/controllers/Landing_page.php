<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


    class Landing_page extends CI_Controller{
        public function __construct(){
            parent::__construct();
            if($this->session->userdata('user_id') == true){
                redirect('Home');
            }
        }

        public function index(){
            
            $this->load->library("form_validation");
            $this->form_validation->set_rules('fname','First Name','required',array('required' => 'Take Your First Name'));
            $this->form_validation->set_rules('lname','Last Name','required',array('required' => 'Take Your Last Name'));
            $this->form_validation->set_rules('username','User Name','required|valid_email|is_unique[users.username]',array('required' => 'User Name Must a Valid Email', 'valid_email' => 'User Name Must a Valid Email', 'is_unique' => 'This Email is Already Takaen Please Try another Email'));
            $this->form_validation->set_rules('phone', 'Phone Number', 'required', array('required' => 'Take Your Phone Number'));
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]', array('required' => 'Take Minimum 8 Digit Password', 'min_length' => 'Password Contant Minimum 8 digit.', 'max_lenght' => 'Password Contant Maximum 20 Digit'));
            $this->form_validation->set_rules('repassword', 'Re-Password', 'required|matches[password]',array('required' => "Re-Enter Your Password", 'matches' => 'Password Dose\'t Matches'));

            if($this->form_validation->run() == FALSE){

                //$this->load->view("header.php");
                //$this->load->view('leftnav');
                //$this->load->view("singup/signup.php");
                $this->load->view('landing_page');
                
            }else{
            
                if(isset($_POST['signup'])){
                
                    $data = array(
                        'fname'     => $_POST['fname'],
                        'lname'     => $_POST['lname'],
                        'gender'    => $_POST['gender'],
                        'username'  => $_POST['username'],
                        'phone'     => $_POST['phone'],
                        'password'  => sha1($_POST['password']),
                        'temp_password' => rand(1000,1000000),
                        'birth_date'=> $_POST['date'],
                        'birth_month' => $_POST['month'],
                        'birth_year' => $_POST['year']
                    );

                }

                $this->load->Model('SignUp_Model');
                if($data == true){
                    $this->SignUp_Model->insert('users',$data);
                    redirect(base_url().'index.php/Login');
                }
            }
        }
    }

?>