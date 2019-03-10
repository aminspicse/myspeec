<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class SMS extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library("form_validation");
            $this->load->model('SMS_Model');
            $this->load->model('Profile_Model');//This class use just for count friend;
        }
        public function index(){
            $data['count_friend'] = $this->Profile_Model->total_friend();
            //$data['active_friend'] = $this->SMS_Model->active_friend(6,10); //another way used index.php page
            $this->load->view('header');
            $this->load->view('leftnav');
            $this->load->view('messages/index', $data);
        }
 
        public function chating($sub_id){
            $this->form_validation->set_rules('message','Message','required');
            if($this->form_validation->run() == true){
                if(isset($_POST['send'])){
                    $message = array(
                        'send_id'       => $this->session->userdata('user_id'),
                        'receive_id'    => $sub_id,
                        'message'       => $_POST['message']
                    ); 
                    $this->SMS_Model->send_sms($message);
                }
            }  
            
            
            //$data['active_friend'] = $this->SMS_Model->active_friend(); //another way used activefriend.php page
            $data['count_friend'] = $this->Profile_Model->total_friend();
            $data['friendinfo'] = $this->SMS_Model->friend_info($sub_id); //This function used for known friend information 
            $data['message'] = $this->SMS_Model->conversation($sub_id);
            $this->load->view('header');
            $this->load->view('leftnav');
            $this->load->view('messages/activefriend',$data);
        }
    }

?>