<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class CompanyController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('company/Company');

            if($this->session->userdata('user_id') == false)
            {
                redirect(base_url('login'), $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('SignUp').'">Click to SignUp</a>'));
            }
        }

        // crate company 
        public function cratecompany()
        {
            $this->form_validation->set_rules('company_name','Company Name','required');
            $this->form_validation->set_rules('contact_1','Contact 1','required');
            $this->form_validation->set_rules('company_url','Company URL','required|is_unique[company_list.company_url]',array('is_unique'=>'This name is already taken please choase an another url'));
            $this->form_validation->set_rules('company_address','Company Address','required');
            if($this->form_validation->run() == true)
            {
                if(isset($_POST['comp_register']))
                {
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

                    if($this->Company->store('company_list',$data) == true)
                    {
                        $success = '<h3 class="text-center text-success">Successfully Created A Company</h3>';
                        redirect(base_url('mycompany',$this->session->set_flashdata('message',$success)));
                    }
                }
            }
            else
            {
                $this->load->view('users/header',array('keyword' => '', 'title' =>'Create A Company', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('company/create_company');
            }
        }

        // edit company info
        public function editcompany($company_url,$company_id)
        {
            $qry['companyinfo'] = $this->Company->editcompany($company_id,$company_url);
            $this->form_validation->set_rules('company_name','Company Name','required');
            $this->form_validation->set_rules('contact_1','Contact 1','required');
            //$this->form_validation->set_rules('company_url','Company URL','required|is_unique[company_list.company_url]',array('is_unique'=>'This name is already taken please choase an another url'));
            $this->form_validation->set_rules('company_address','Company Address','required');
            if($this->form_validation->run() == true){
                if(isset($_POST['update']))
                {
                    $data = array(
                        'user_id'           => $this->session->userdata('user_id'),
                        'company_name'      => $_POST['company_name'],
                        'contact_1'         => $_POST['contact_1'],
                        'contact_2'         => $_POST['contact_2'],
                        'company_email'     => $_POST['company_email'],
                        'company_website'   => $_POST['company_website'],
                        'company_facebook'  => $_POST['company_facebook'],
                        'company_est_date'  => $_POST['company_est_date'],
                        'company_address'   => $_POST['company_address'],
                        'company_about'     => $_POST['company_about'],
                        'update_on'         => date('Y-m-d H:i:s A')
                    );

                    if($this->Company->updatecompanydata($company_id,$company_url,$data) == true)
                    {
                        $success = "<h3 class='text-center text-success'>Successfully Updated A Company Information</h3>";
                        redirect(base_url('mycompany',$this->session->set_flashdata('message',$success)));
                    }
                }
            }
            else
            {
                $this->load->view('users/header',array('keyword' => '', 'title' =>'Create A Company', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('company/edit_company_profile',$qry);
            }
            
        }

        // fetch all company
        public function fetch_all_company()
        {
            $query['company'] = $this->Company->fetch_all_company();
            $this->load->view('users/header',array('keyword' => '', 'title' =>'My Company - Myspeec', 'score' => '','others' =>''));
            $this->load->view('company/company_sidenav');
            $this->load->view('company/all_company',$query);
        }

        // view company profile
        public function view_company_individual($company_url,$company_id)
        {
            $query['photos'] = $this->Company->fetch_company_profilephoto($company_id);
            $query['company'] = $this->Company->view_company_individual($company_id);
            $this->load->view('users/header',array('keyword' => '', 'title' =>'My Company - Myspeec', 'score' => '','others' =>''));
            $this->load->view('company/company_sidenav');
            $this->load->view('company/index',$query);
            $this->load->view('company/company_profile',$query);

            if(isset($_POST['upload_photo']))
            {
                $config['upload_path'] = './uploads/companyphoto';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['encrypt_name'] = true;
                $this->load->library('upload',$config);
                if($this->upload->do_upload('company_logu') == true)
                {
                    $data = array(
                        'user_id'       => $this->session->userdata('user_id'),
                        'company_id'    => $company_id,
                        'company_logu'  => base_url('uploads/companyphoto/').$this->upload->data('file_name'),
                        'cover_photo'   => base_url('uploads/companyphoto/').$this->upload->data('file_name')
                    );
                    if($this->db->insert('company_photo',$data))
                    {
                        redirect(base_url('company/').$company_url.'/'.$company_id);
                    }
                }
                else
                {
                    echo $this->upload->display_errors();
                }
            }
        }
 
        public function view_companyjob($company_url,$company_id)
        {
            $query['photos'] = $this->Company->fetch_company_profilephoto($company_id);
            $query['job'] = $this->Company->company_job($company_id);
            $this->load->view('users/header',array('keyword' => '', 'title' =>'My Company - Myspeec', 'score' => '','others' =>''));
            $this->load->view('company/company_sidenav');
            $this->load->view('company/index',$query);
            $this->load->view('company/viewjob',$query);
        }

        public function appliedlist($job_id, $company_id)
        {
            $query['photos'] = $this->Company->fetch_company_profilephoto($company_id);
            $query['job'] = $this->Company->company_job($company_id);
            $query['appliedlist'] = $this->Company->appliedlist($job_id);
            $this->load->view('users/header',array('keyword' => '', 'title' =>'My Company - Myspeec', 'score' => '','others' =>''));
            $this->load->view('company/company_sidenav');
            $this->load->view('company/index',$query);
            $this->load->view('company/appliedlist',$query); 
        }

        // for application reject

        public function applicationreject($apply_id,$job_id,$company_id)
        {
            if($this->Company->applicationreject($apply_id) == true)
            {
                redirect(base_url('applicantlist/'.$job_id.'/'.$company_id, $this->session->set_flashdata('msg','An Applicant hasbeen Rejected')));
            }
        }

        public function change_photo($company_id)
        {
           
            $query['photos'] = $this->Company->fetch_company_profilephoto($company_id);
            $query['company'] = $this->Company->fetch_all_company();
            $this->load->view('users/header',array('keyword' => '', 'title' =>'My Company - Myspeec', 'score' => '','others' =>''));
            $this->load->view('company/company_sidenav');
            $this->load->view('company/index',$query);
            $this->load->view('company/change_photo',$query);
            if(isset($_POST['save_change']))
            {
                $file = $_FILES['logu'];
            }
        }

        // for delteing a company
        public function delete_company($company_id)
        {
            if($this->Company->delete_company($company_id) == true)
            {
                $success = '<h3 class="text-center text-danger">A Company has been Deleted Successfully</h3>';
                redirect(base_url('mycompany'), $this->session->set_flashdata('message',$success));
            }
        }
    }