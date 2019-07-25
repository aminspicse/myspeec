<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class SMSController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            date_default_timezone_set("Asia/Dhaka");
            $this->load->library("form_validation");
            $this->load->model('users/SMS');
            $this->load->model('users/Profile');//This class use just for count friend;
            if($this->session->userdata('user_id') == false)
            {
                redirect(base_url('login',$this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup').'">Click to SignUp</a>')));
            }
        }
        public function index(){
            $data['count_friend'] = $this->Profile->total_friend();
            //$data['active_friend'] = $this->SMS->active_friend(6,10); //another way used index.php page
            $this->load->view('users/header',array('keyword' => '',  'title' => '', 'score' => '','others' =>''));
            $this->load->view('users/leftnav');
            $this->load->view('users/messages/index', $data);
        }
 
        public function chating($sub_id){
            $this->form_validation->set_rules('message','Message','required');
            if($this->form_validation->run() == true){
                if(isset($_POST['send'])){
                    $message = array(
                        'send_id'       => $this->session->userdata('user_id'),
                        'receive_id'    => $sub_id,
                        'message'       => $_POST['message'],
                        'send_time'     => Date('d-m-y h:i:sa')
                    ); 
                    $this->SMS->send_sms($message);
                }
            }  
              
            //$data['active_friend'] = $this->SMS->active_friend(); //another way used activefriend.php page
            $data['count_friend'] = $this->Profile->total_friend();
            $data['friendinfo'] = $this->SMS->friend_info($sub_id); //This function used for known friend information 
            $data['message'] = $this->SMS->conversation($sub_id);
            $this->load->view('users/header',array('keyword' => '','title'=>'', 'score' => '','others' =>''));
            $this->load->view('users/leftnav');
            $this->load->view('users/messages/activefriend',$data);
        }

        //testing method 
        public function chat($sub_id){
            $data['msg'] = $this->SMS->conversation($sub_id);
            ///print_r($data['msg']);
            $this->load->view('users/messages/test',$data);
            //echo $this->session->userdata('user_id');
            
        }
    }
