<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Create_Company extends CI_Controller{
        public function __construct(){
            parent::__construct();
            //$this->load->library('form_validation');
            if($this->session->userdata('user_id') == false){
                redirect(base_url('login'), $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('SignUp').'">Click to SignUp</a>'));
            }
        }
        public function company_create(){
            $this->form_validation->set_rules('company_name','Company Name','required');
            $this->form_validation->set_rules('contact_1','Contact 1','required');
            $this->form_validation->set_rules('company_url','Company URL','required|is_unique[company_list.company_url]',array('is_unique'=>'This name is already taken please choase an another url'));
            $this->form_validation->set_rules('company_address','Company Address','required');
            if($this->form_validation->run() == true){
                if(isset($_POST['comp_register'])){
                    $data = array(
                        'user_id'           => $this->session->userdata('user_id'),
                        'company_name'      => $_POST['company_name'],
                        'company_url'       => $_POST['company_url'],
                        'contact_1'         => $_POST['contact_1'],
                        'contact_2'         => $_POST['contact_2'],
                        'company_email'     => $_POST['company_email'],
                        'company_website'   => $_POST['company_website'],
                        'company_facebook'  => $_POST['company_facebook'],
                        'company_est_date'  => $_POST['company_est_date'],
                        'company_address'   => $_POST['company_address'],
                        'company_about'     => $_POST['company_about']
                    );
                }
                $this->db->insert('company_list',$data);
            }else{
                $this->load->view('users/header',array('keyword' => '', 'title' =>'Create A Company', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('company/create_company');
            }
        }
    }