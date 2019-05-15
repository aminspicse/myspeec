<?php 

    class Messages extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Messages_Model');
        }

        function index(){
            $data['recever'] = $this->Messages_Model->recever_id(6);
            $this->load->view('header',array('search' => '', 'score' => '','others' =>''));
            $this->load->view('messages/index.php');
            
        }
        function send_mesg(){
            if(isset($_post['send'])){
                $msg = array(
                    'send_id'    => $this->session->userdata('user_id'),
                    'receive_id' => $_post['recevers'],
                    'msg'        => $_post['message']
                );

                $this->Messages_Model->send_msg($msg);
            }
        }
    }

?>