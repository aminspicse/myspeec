<?php 

    class MessageController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Message');
        }

        function index()
        {
            $data['recever'] = $this->Message->recever_id(6);
            $this->load->view('header',array('search' => '', 'score' => '','others' =>''));
            $this->load->view('messages/index.php');
            
        }
        
        function send_mesg()
        {
            if(isset($_post['send']))
            {
                $msg = array(
                    'send_id'    => $this->session->userdata('user_id'),
                    'receive_id' => $_post['recevers'],
                    'msg'        => $_post['message']
                );

                $this->Message->send_msg($msg);
            }
        }
    }
