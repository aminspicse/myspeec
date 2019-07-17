<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class CV extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('users/CV_Model');
            $this->load->library('form_validation');
            $this->load->model('users/Profile_Model');
            if($this->session->userdata('user_id') == false){
                redirect(base_url().'login', $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup').'">Click to SignUp</a>'));
            }
        }
        public function addeducation(){
            $this->form_validation->set_rules('institute','Institute','required');
            $this->form_validation->set_rules('degree_post','Degree/Job Title','required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Add your Education', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/add_education');
            }else{
                if(isset($_POST['save'])){
                    $data = array(
                        'user_id'           => $this->session->userdata('user_id'),
                        'institute'         => $_POST['institute'],
                        'department'        => $_POST['department'],
                        'degree'            => $_POST['degree_post'],
                        'result'            => $_POST['result'],
                        'location'          => $_POST['location'],
                        'from_date'         => $_POST['from_date'],
                        'to_date'           => $_POST['to_date'],
                        'privacy_status'    => $_POST['privacy'],
                        'insert_time'       => date("l jS \of F Y h:i:s A")
                    );
                    $this->CV_Model->save('user_education',$data);
                 }
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Add Your Education', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/add_education');
            }
        }

        //edit education
        public function edit_education($edu_id){
            $query['education'] = $this->CV_Model->fetch_data_for_edit('user_education','education_id',$edu_id,$this->session->userdata('user_id'));
            $this->form_validation->set_rules('institute','Institute','required');
            $this->form_validation->set_rules('degree','Degree','required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Edit Education', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/edit_education', $query);
            }else{
                if(isset($_POST['update'])){
                    $data = array(
                        'institute'             => $_POST['institute'],
                        'department'            => $_POST['department'],
                        'degree'                => $_POST['degree'],
                        'result'                => $_POST['result'],
                        'location'              => $_POST['location'],
                        'from_date'             => $_POST['from_date'],
                        'to_date'               => $_POST['to_date'],
                        'privacy_status'        => $_POST['privacy'],
                        'update_time'           => date("l jS \of F Y h:i:s A")
                    );
                    if($this->CV_Model->update_data('user_education','education_id',$edu_id, $this->session->userdata('user_id'), $data) == true){
                        redirect(base_url('cv'), $this->session->set_flashdata('msg','<p class="text-success">Successfully Updated Education</p>'));
                    }
                }
            }
        }

        // delete education
         public function delete_education($edu_id){
            if($this->CV_Model->delete_data('user_education', 'education_id', $edu_id, $this->session->userdata('user_id')) == true){
                redirect(base_url('cv'),$this->session->set_flashdata('msg','<p class="text-danger">Successfully Deleted an Education</p>'));
            }
        }

        public function addexperience(){
            $this->form_validation->set_rules('company_name','Company Name','required');
            $this->form_validation->set_rules('job_position','Job Position','required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Add Experience', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/add_experience');
            }else{
                if(isset($_POST['save'])){
                    $data = array(
                        'user_id'           => $this->session->userdata('user_id'),
                        'company_name'      => $_POST['company_name'],
                        'department'        => $_POST['department'],
                        'job_position'      => $_POST['job_position'],
                        'company_location'  => $_POST['company_location'],
                        'from_date'         => $_POST['from_date'],
                        'to_date'           => $_POST['to_date'],
                        'privacy_status'    => $_POST['privacy'],
                        'insert_time'       => date("l jS \of F Y h:i:s A")
                    );
                    $this->CV_Model->save('user_experience',$data);
                }
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Add Experience', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/add_experience');
            }
        }
        // edit experience
        public function edit_experience($exp_id){
            $data['edit'] = $this->CV_Model->fetch_data_for_edit('user_experience','experience_id',$exp_id, $this->session->userdata('user_id'));
            $this->form_validation->set_rules('company_name','Company Name','required');
            $this->form_validation->set_rules('job_position','Job Position','required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Edit Experience', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/edit_experience', $data);
            }else{
                if(isset($_POST['update'])){
                    $data = array(
                        'company_name'     => $_POST['company_name'],
                        'department'    => $_POST['department'],
                        'job_position'        => $_POST['job_position'],
                        'company_location'      => $_POST['company_location'],
                        'from_date'     => $_POST['from_date'],
                        'to_date'       => $_POST['to_date'],
                        'privacy_status'=> $_POST['privacy'],
                        'update_time'   => date("l jS \of F Y h:i:s A")
                    );
                    if($this->CV_Model->update_data('user_experience','experience_id',$exp_id, $this->session->userdata('user_id'), $data) == true){
                        redirect(base_url('cv'), $this->session->set_flashdata('msg','<p class="text-success">Successfully Updated Experience</p>'));
                    }
                }
            }

        }
        // delete experience
        public function delete_experience($exp_id){
            if($this->CV_Model->delete_data('user_experience','experience_id', $exp_id, $this->session->userdata('user_id')) == true){
                redirect(base_url('cv'),$this->session->set_flashdata('msg','<p class="text-danger">Successfully Deleted an Experience</p>'));
            }
        }
    // Add new skill
        public function addskill(){
            $this->form_validation->set_rules('skill_name','Skill Name','required');
            if($this->form_validation->run() == FALSE){
                $msg['success'] = '';
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Add Skill', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/add_skill', $msg);
            }else{
                if(isset($_POST['save'])){
                    $data = array(
                        'user_id'       => $this->session->userdata('user_id'),
                        'skill_name'    => $_POST['skill_name'],
                        'skill_label'   => $_POST['skill_label'],
                        'from_date'     => $_POST['from_date'],
                        'to_date'       => $_POST['to_date'],
                        'privacy_status'=> $_POST['privacy'],
                        'insert_time'   => date("l jS \of F Y h:i:s A")
                    );
                    if($this->CV_Model->save('user_skill',$data) == true){
                        $msg['success'] = 'Skill Added Successfully';
                    }else{
                        $msg['success'] = 'Dont add';
                    }
                }
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Add Skill', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/add_skill',$msg);
            }
        }
        // edit skill
        public function edit_skill($skill_id){
            $data['skill'] = $this->CV_Model->fetch_data_for_edit('user_skill','skill_id',$skill_id, $this->session->userdata('user_id'));
            $this->form_validation->set_rules('skill_name','Skill Name','required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Edit Skill', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/edit_skill',$data);
            }else{
                if(isset($_POST['update'])){
                    $data = array(
                        'skill_name'    => $_POST['skill_name'],
                        'skill_label'   => $_POST['skill_label'],
                        'from_date'     => $_POST['from_date'],
                        'to_date'       => $_POST['to_date'],
                        'privacy_status'=> $_POST['privacy'],
                        'update_time'   => date("l jS \of F Y h:i:s A")
                    );
                    if($this->CV_Model->update_data('user_skill','skill_id',$skill_id, $this->session->userdata('user_id'),$data) == true){
                        redirect(base_url('cv'), $this->session->set_flashdata('msg','<p class="text-success">Successfully Updated a Skill</p>'));
                    }
                }
            }
        }
        // delete skill
        public function delete_skill($skill_id){
            if($this->CV_Model->delete_data('user_skill','skill_id', $skill_id, $this->session->userdata('user_id')) == true){
                redirect(base_url('cv'),$this->session->set_flashdata('msg','<p class="text-danger">Successfully Deleted a Skill</p>'));
            }
        }
    // Add New Training
        public function addtraining(){
            $this->form_validation->set_rules('training_title','Training Title','required');
            if($this->form_validation->run() == FALSE){
                 $msg['success'] = '';
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Add Training', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/add_training', $msg);
            }else{
                if(isset($_POST['save'])){
                    $data = array(
                        'user_id'               => $this->session->userdata('user_id'),
                        'training_title'        => $_POST['training_title'],
                        'training_label'        => $_POST['training_label'],
                        'training_institute'    => $_POST['training_institute'],
                        'from_date'             => $_POST['from_date'],
                        'to_date'               => $_POST['to_date'],
                        'privacy_status'        => $_POST['privacy'],
                        'insert_time'           => date("l jS \of F Y h:i:s A")
                    );
                    if($this->CV_Model->save('user_training',$data) == true){
                        $msg['success'] = 'Training Added Successfully';
                    }else{
                        $msg['success'] = 'Dont add';
                    }
                }
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Add Training', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/add_training',$msg);
            }
        }
        // edit training
        public function edit_training($training_id){
            $data['training'] = $this->CV_Model->fetch_data_for_edit('user_training','training_id',$training_id, $this->session->userdata('user_id'));
            $this->form_validation->set_rules('training_title','Training Title','required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Edit Training', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/edit_training',$data);
            }else{
                if(isset($_POST['update'])){
                    $data = array(
                        'training_title'        => $_POST['training_title'],
                        'training_label'        => $_POST['training_label'],
                        'training_institute'    => $_POST['training_institute'],
                        'from_date'             => $_POST['from_date'],
                        'to_date'               => $_POST['to_date'],
                        'privacy_status'        => $_POST['privacy'],
                        'update_time'           => date("l jS \of F Y h:i:s A")
                    );
                    if($this->CV_Model->update_data('user_training', 'training_id', $training_id, $this->session->userdata('user_id'), $data) == true){
                        redirect(base_url('cv'), $this->session->set_flashdata('msg','<p class="text-success">Successfully Updated a Training</p>'));
                    }
                }
            }
        }
        // delete training 
        public function delete_training($training_id){
            if($this->CV_Model->delete_data('user_training','training_id', $training_id, $this->session->userdata('user_id')) == true){
                redirect(base_url('cv'),$this->session->set_flashdata('msg','<p class="text-danger">Successfully Deleted a Training</p>'));
            }
        }
        // add about self
        public function add_aboutself(){
            $this->form_validation->set_rules('about_self','About Self','required');
            if($this->form_validation->run() == false){
                $msg['success'] = '';
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Add About self', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/add_about',$msg);
            }else{
                if(isset($_POST['submit'])){
                    $data = array(
                        'user_id'           => $this->session->userdata('user_id'),
                        'about_self'        => $_POST['about_self'],
                        'privacy_status'    => $_POST['privacy_status'],
                        'insert_time'       => date('l jS \of F Y h:i:s A')
                    );

                    if($this->CV_Model->save('user_about',$data) == true){
                        $msg['success'] = 'Your About Self Added Successfully';
                    }
                }
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Add About self', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/add_about',$msg);
            }
        }
        // Edit About self
        public function eidt_aboutself($about_id){
            $data['about'] = $this->CV_Model->fetch_data_for_edit('user_about','about_id',$about_id, $this->session->userdata('user_id'));
            $this->form_validation->set_rules('about_self','About Self','required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('users/header',array('keyword' => '', 'title'=>'Edit About Self', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/cv/edit_about',$data);
            }else{
                if(isset($_POST['update'])){
                    $data = array(
                        'about_self'    => $_POST['about_self'],
                        'privacy_status'=> $_POST['privacy'],
                        'update_time'   => date("l jS \of F Y h:i:s A")
                    );
                    if($this->CV_Model->update_data('user_about','about_id',$about_id, $this->session->userdata('user_id'),$data) == true){
                        redirect(base_url('profile'), $this->session->set_flashdata('msg','<p class="text-success">Successfully Updated Your About Self</p>'));
                    }
                }
            }
        }
        // delete training 
        public function delete_aboutself($about_id){
            if($this->CV_Model->delete_data('user_about','about_id', $about_id, $this->session->userdata('user_id')) == true){
                redirect(base_url('profile'),$this->session->set_flashdata('msg','<p class="text-danger">Successfully Deleted a About Self</p>'));
            }
        }
 
        public function cv_view(){
            $data['query'] = $this->Profile_Model->profile(); // passing personal information 
            $data['total_friend'] = $this->Profile_Model->total_friend();//fetching total friend
            //$data['profile'] = $this->Profile_Model->profile(); // passing personal information 
            $data['education'] = $this->CV_Model->fetch_data_for_view_admin('user_education','education_id',$this->session->userdata('user_id')); // fetch education
            $data['experience'] = $this->CV_Model->fetch_data_for_view_admin('user_experience','experience_id',$this->session->userdata('user_id'));//fetching user experience
            $data['skill'] = $this->CV_Model->fetch_data_for_view_admin('user_skill','skill_id',$this->session->userdata('user_id')); // fetching skill
            $data['training'] = $this->CV_Model->fetch_data_for_view_admin('user_training','training_id',$this->session->userdata('user_id')); // fetch user training
            $data['about_self'] = $this->CV_Model->fetch_data_for_view_admin('user_about','about_id', $this->session->userdata('user_id')); // fetch user about
            $this->load->view('users/header',array('keyword' => '', 'title'=>'CV View', 'score' => '','others' =>''));
            $this->load->view('users/profile/profile_leftnav');
            $this->load->view('users/profile/heading',$data);
            $this->load->view('users/cv/admin_view',$data);  
            //echo $data['cv_fetch']->num_rows();
        }
    }