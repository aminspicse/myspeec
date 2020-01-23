<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class JobController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('users/Job');

            if($this->session->userdata('user_id') == false)
            {
                redirect(base_url().'login', $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup').'">Click to SignUp</a>'));
            }
        }
        public function create_job()
        {
            $qry['company'] = $this->Job->fetch_companylist();
            $this->form_validation->set_rules('job_title','Job Title','required');
            $this->form_validation->set_rules('company_name','Company Name','required');
            $this->form_validation->set_rules('company_location','Company Location','required');
            $this->form_validation->set_rules('total_post','Total Vacancy', 'required');
            $this->form_validation->set_rules('salary', 'Salary', 'required');
            $this->form_validation->set_rules('education_requirements', 'Educational Qualification','required');
            if($this->form_validation->run() == false)
            {
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Create New Job - Myspeec', 'score' => '','others' =>''));
                $this->load->view('company/company_sidenav');
                $this->load->view('users/jobs/create_job',$qry);
            }
            else
            {
                if(isset($_POST['create_job']))
                {
                    $data = array(
                        'user_id'                   => $this->session->userdata('user_id'),
                        'job_title'                 => $_POST['job_title'],
                        'company_id'                => $_POST['company_name'],
                        'company_location'          => $_POST['company_location'],
                        'job_position'              => $_POST['job_position'],
                        'total_post'                => $_POST['total_post'],
                        'salary'                    => $_POST['salary'],
                        'job_location'              => $_POST['job_location'],
                        'employment_status'         => $_POST['employment_status'],
                        'application_dedline'       => date('Y-m-d',strtotime($_POST['application_dedline'])),
                        'education_requirements'    => $_POST['education_requirements'],
                        'job_responsibilities'      => $_POST['job_responsibilities'],
                        'experience_requirements'   => $_POST['experience_requirements'],
                        'additional_requirements'   => $_POST['additional_requirements'],
                        'website_link'              => $_POST['website_link'],
                        'facebook_link'             => $_POST['facebook_link'],
                        'published_on'              => date("l jS \of F Y h:i:s A")
                        //'company_logu'             => $_POST['company_logu']
                    );

                    if($this->Job->insert('post_job',$data) == true)
                    {
                        $success = '<h3 class="text-center text-success">A Job Created Successfully</h3>';
                        redirect(base_url('createjob', $this->session->set_flashdata('message',$success)));
                    }
                    else
                    {
                        $error = '<h3 class="text-center text-danger">You Try to Wrong Way</h3>';
                        redirect(base_url('createjob', $this->session->set_flashdata('message',$error)));
                    }
                }
            }

        }

        // delete job
        public function delete_job($company_url, $company_id, $job_id)
        {

            if($this->Job->deletejob($company_id, $job_id) == true)
            {
                redirect(base_url('companyjob/'.$company_url.'/'.$company_id),$this->session->set_flashdata('msg','Successfully Deleted a Job'));
            }
        }

        // view public job 
        public function job_public()
        {
            $this->load->view('users/header',array('keyword' => '', 'title'=>'View Job - Myspeec', 'score' => '','others' =>''));
            $this->load->view('users/profile/profile_leftnav');
            $this->load->view('users/jobs/view_job_public');
        }

        public function fetch_job_public()
        { 
            $output = '';
            $data = $this->Job->fetech_job_public($this->input->post('limit'), $this->input->post('start'));
            if($data->num_rows() > 0)
            {
                foreach($data->result() as $row)
                {
                    $output .= '
                    <div class="post_data bg-white"> 
                        <h4> <a href='.base_url('viewfull/'.$row->job_id.'/'.url_title(sha1($row->job_title))).' target="new">'.$row->job_title.'</a></h4>
                        <a></a>
                        <p style="text-align: justify">'.trim(substr($row->company_name.', '.$row->job_location.', '.$row->education_requirements.', '.$row->experience_requirements.', '.$row->job_responsibilities.', '.$row->salary,0,500)).'...<a href='.base_url('viewfull/'.$row->job_id.'/'.url_title(sha1($row->job_title))).' target="new">View full job</a></p>
                        <p class="text-center"> <i> Published on: <a href="#">'.$row->published_on.'</a> Dedline: <a href="#">'.$row->application_dedline.'</a></i></p>
                    </div>
                    ';
                }
            }
            echo $output;
        }
        public function viewfulljob($job_id)
        {
            $qry['viewjob'] = $this->Job->fetch_view_full_job($job_id);
            $title = 'This job is already deleted';
            foreach ($qry['viewjob'] as $view) 
            {
                $title = $view->job_title;
            }
            $this->load->view('users/header',array('keyword' => '', 'title'=>$title.' - myspeec', 'score' => '','others' =>''));
            $this->load->view('users/profile/profile_leftnav');
            $this->load->view('users/jobs/view_full_job_public',$qry);
        }

        public function applyjob($job_id)
        {
            if($this->Job->check_jobid_valide_ornot($job_id) == true)
            {
                if($this->Job->applyjob($job_id) == true)
                {
                    $success = "<h4 class='text-center text-success'>Apply has been successfully</h4>";
                    redirect(base_url('viewfull/'.$job_id.'/Apply Success',$this->session->set_flashdata('message',$success)));
                }
            }
            else
            {
                $error = "<h4 class='text-center text-danger'>Maybe you try to biolate someting</h4>";
                redirect(base_url('viewfull/'.$job_id.'/Biolation',$this->session->set_flashdata('message',$error)));
            }
            
        }
        
    }