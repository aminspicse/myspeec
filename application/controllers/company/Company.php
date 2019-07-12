<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Company extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('company/Company_Model');
            if($this->session->userdata('user_id') == false){
                redirect(base_url('login'), $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('SignUp').'">Click to SignUp</a>'));
            }
        }
        public function fetch_all_company(){
            $query['company'] = $this->Company_Model->fetch_all_company();
            $this->load->view('users/header',array('keyword' => '', 'title' =>'My Company - Myspeec', 'score' => '','others' =>''));
            $this->load->view('company/company_sidenav');
            $this->load->view('company/all_company',$query);
        }
        // view company profile
        public function view_company_individual($company_url,$company_id){
            $query['photos'] = $this->Company_Model->fetch_company_profilephoto($company_id);
            $query['company'] = $this->Company_Model->view_company_individual($company_id);
            $this->load->view('users/header',array('keyword' => '', 'title' =>'My Company - Myspeec', 'score' => '','others' =>''));
            $this->load->view('company/company_sidenav');
            $this->load->view('company/index',$query);
            $this->load->view('company/company_profile',$query);

            if(isset($_POST['upload_photo'])){
                $config['upload_path'] = './uploads/companyphoto';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['encrypt_name'] = true;
                $this->load->library('upload',$config);
                if($this->upload->do_upload('company_logu') == true){
                    $data = array(
                        'user_id'       => $this->session->userdata('user_id'),
                        'company_id'    => $company_id,
                        'company_logu'  => base_url('uploads/companyphoto/').$this->upload->data('file_name'),
                        'cover_photo'   => base_url('uploads/companyphoto/').$this->upload->data('file_name')
                    );
                    if($this->db->insert('company_photo',$data)){
                        redirect(base_url('company/').$company_url.'/'.$company_id);
                    }
                }else{
                    echo $this->upload->display_errors();
                }
            }
        }
        public function view_companyjob($company_url,$company_id){
            $query['photos'] = $this->Company_Model->fetch_company_profilephoto($company_id);
            $query['job'] = $this->Company_Model->company_job($company_id);
            $this->load->view('users/header',array('keyword' => '', 'title' =>'My Company - Myspeec', 'score' => '','others' =>''));
            $this->load->view('company/company_sidenav');
            $this->load->view('company/index',$query);
            $this->load->view('company/viewjob',$query);
        }
        public function delete_job($company_url, $company_id, $job_id){

            if($this->Company_Model->deletejob($company_id, $job_id) == true){
                redirect(base_url('companyjob/'.$company_url.'/'.$company_id),$this->session->set_flashdata('msg','Successfully Deleted a Job'));
            }
        }
        public function editcompanyinfo($company_id){
            echo "<h1>hello world</h1>";
        }
        public function change_photo($company_id){
           
            $query['photos'] = $this->Company_Model->fetch_company_profilephoto($company_id);
            $query['company'] = $this->Company_Model->fetch_all_company();
            $this->load->view('users/header',array('keyword' => '', 'title' =>'My Company - Myspeec', 'score' => '','others' =>''));
            $this->load->view('company/company_sidenav');
            $this->load->view('company/index',$query);
            $this->load->view('company/change_photo',$query);
            if(isset($_POST['save_change'])){
                $file = $_FILES['logu'];

                print_r($file);
            }
        }
        // for delteing a company
        public function delete_company($company_id){
            if($this->Company_Model->delete_company($company_id) == true){
                redirect(base_url('mycompany'), $this->session->set_flashdata('msg','A Company has been Deleted Successfully'));
            }
        }
    }