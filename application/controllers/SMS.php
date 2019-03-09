<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class SMS extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('SMS_Model');
        }
        public function index(){
            $data['active_friend'] = $this->SMS_Model->active_friend();
            $this->load->view('header');
            $this->load->view('leftnav');
            $this->load->view('messages/index', $data);
        }
    }

?>