<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Jobs extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('users/Jobs_Model');
            if($this->session->userdata('user_id') == false){
                redirect(base_url().'login', $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup').'">Click to SignUp</a>'));
            }
        }
        public function create_job(){
            $this->form_validation->set_rules('job_title','Job Title','required');
            $this->form_validation->set_rules('company_name','Company Name','required');
            $this->form_validation->set_rules('company_location','Company Location','required');
            $this->form_validation->set_rules('total_post','Total Post', 'required');
            $this->form_validation->set_rules('salary', 'Salary', 'required');
            $this->form_validation->set_rules('education_requirements', 'Educational Qualification','required');
            if($this->form_validation->run() == false){
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Create New Job - Myspeec', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/jobs/create_job');
            }else{
                if(isset($_POST['create_job'])){
                    $data = array(
                        'user_id'                   => $this->session->userdata('user_id'),
                        'job_title'                 => $_POST['job_title'],
                        'company_name'              => $_POST['company_name'],
                        'company_location'          => $_POST['company_location'],
                        'Job_position'              => $_POST['Job_position'],
                        'total_post'                => $_POST['total_post'],
                        'salary'                    => $_POST['salary'],
                        'job_location'              => $_POST['job_location'],
                        'employment_status'         => $_POST['employment_status'],
                        'education_requirements'    => $_POST['education_requirements'],
                        'job_responsibilities'      => $_POST['job_responsibilities'],
                        'additional_requirements'   => $_POST['additional_requirements'],
                        'website_link'              => $_POST['website_link'],
                        'facebook_link'             => $_POST['facebook_link']
                        //'company_logu'             => $_POST['company_logu']
                    );
                }
                $this->Jobs_Model->insert('post_job',$data);
                
            }

        }
    }