<?php 

    class Profile extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('Profile_Model');
            $this->load->library('form_validation');
            //$this->load->controller('Public_Profile');
            if($this->session->userdata('user_id') == false){
                redirect('login');
            }
            
        }
        function index(){
            $data['query'] = $this->Profile_Model->profile();
            $data['total_friend'] = $this->Profile_Model->total_friend();
            $this->load->view('header',array('search' => ''));
            $this->load->view('profile/profile_leftnav');
            $this->load->view('profile/heading',$data);
            $this->load->view('profile/about',$data);
        }

        function total_friends(){
            $data['query'] = $this->Profile_Model->profile();
            $data['total_friend'] = $this->Profile_Model->total_friend();
            $this->load->view('header',array('search' => ''));
            $this->load->view('profile/profile_leftnav');
            $this->load->view('profile/heading',$data);
            $this->load->view('profile/totalfriend',$data);
        }

        function remove_friend($id){
            $this->Profile_Model->removefriend($id);
            $this->total_friends();
        }

        function update_personal_info(){

            if($this->session->userdata('user_id') == true){
                $this->form_validation->set_rules('fname','First Name', 'required');
                $this->form_validation->set_rules('lname','Last Name', 'required');
                $this->form_validation->set_rules('phone','Phone Number', 'required');
                $this->form_validation->set_rules('country','Country Name', 'required');
                if($this->form_validation->run() == false){
                    $this->load->view('header',array('search' => ''));
                    $this->load->view('profile/profile_leftnav');
                    $this->load->view('profile/update_personal_info');
                }else{
                    if(isset($_POST['update'])){

                        $updates = array(
                            'user_id'   => $this->session->userdata('user_id'),
                            'fname'     => $_POST['fname'],
                            'lname'     => $_POST['lname'],
                            'phone'     => $_POST['phone'],
                            'country'   => $_POST['country']
                        );

                            $this->Profile_Model->UpdateInfo($updates);
                            redirect(base_url().'Login/logout'); 
                        
                    }

                }
            }else{
                $data['msg'] = "Please Login First";
                redirect(base_url()."Login");
                //echo "<h1> Pleas Login First </h1>";
            }
        }

        public function Profilepic(){
            

            if(isset($_POST['submit'])){
                $config = array(
                    'upload_path'   => './uploads/profilephotos/',
                    'allowed_types' => 'jpg|png|gif',
                    'max_size'      => 100,
                    'max_width'     => 300,
                    'max_height'    => 500,
                    'encrypt_name'  => true
                    
                );

                $this->load->library('upload', $config);
                if($this->upload->do_upload('profileimage') == true){
                    $data = array(
                        'photo' => base_url('uploads/profilephotos/').$this->upload->data('file_name')
                    );
                    $this->Profile_Model->Update_profilephoto($data);

                    $this->session->set_flashdata('msg', 'Successfully Uploaded Your photo');
                    $this->load->view('header',array('search' => ''));
                    $this->load->view('profile/profile_leftnav');
                    $this->load->view('profile/upload_profile_pic', array('error' => ''));
                    //echo $this->session->userdata('user_id');
                    //echo "<h1>".base_url('uploads/profilephotos/').$this->upload->data('file_name')."</h1>";
                }else{
                    $this->load->view('header',array('search' => ''));
                    $this->load->view('profile/profile_leftnav');
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('profile/upload_profile_pic', $error);
                }

            }else{
                $this->load->view('header',array('search' => ''));
                $this->load->view('profile/profile_leftnav');
                $this->load->view('profile/upload_profile_pic', array('error' => ''));
            }
        }


    }

?>