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
                   /* $data = array(
                        'company_logu' => $this->upload->data(),
                        'cover_photo'   => $this->upload->data()
                    );
                    $logu = $data['company_logu']['file_name'];
                    $cover = $data['cover_photo']['file_name'];
                    */
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
        // for changeing profile photo 
       /* function change_profile_photo($company_id){
            $query['photos'] = $this->Company_Model->fetch_company_profilephoto($company_id);
            $this->load->view('users/header',array('keyword' => '', 'title' =>'Change Logu or Cover Photo - Myspeec', 'score' => '','others' =>''));
            $this->load->view('company/company_sidenav');
            $this->load->view('company/index',$query);
            $this->load->view('company/change_photo',$query);

        }*/
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