<?php 

    class Profile extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('users/Profile_Model');
            $this->load->model('users/CV_Model');
            $this->load->model('users/Public_Profile_Model');
            $this->load->library('form_validation');
            //$this->load->controller('Public_Profile');
            if($this->session->userdata('user_id') == false){
                redirect(base_url().'login.asp', $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup.asp').'">Click to SignUp</a>'));
            }
            
        }
        function index(){
            $data['query'] = $this->Profile_Model->profile();
            $data['total_friend'] = $this->Profile_Model->total_friend();
            $user_id = $this->session->userdata('user_id');
            $data['profile'] = $this->Public_Profile_Model->Profile($user_id);
            $data['education'] = $this->CV_Model->fetch_data_for_view_admin('user_education','education_id',$this->session->userdata('user_id')); // fetch education
            $data['training'] = $this->CV_Model->fetch_data_for_view_admin('user_training','training_id',$this->session->userdata('user_id'));
            $data['about_self'] = $this->CV_Model->fetch_data_for_view_admin('user_about', 'about_id', $this->session->userdata('user_id'));
            $this->load->view('users/header',array('keyword' => '', 'title'=>$this->session->userdata('fname').' '.$this->session->userdata('lname'), 'score' => '','others' =>''));
            $this->load->view('users/profile/profile_leftnav');
            $this->load->view('users/profile/heading',$data);
            $this->load->view('users/profile/about',$data);
        }

        function total_friends(){
            $data['query'] = $this->Profile_Model->profile();
            $data['total_friend'] = $this->Profile_Model->total_friend();
            $this->load->view('users/header',array('keyword' => '', 'title'=>'', 'score' => '','others' =>''));
            $this->load->view('users/profile/profile_leftnav');
            $this->load->view('users/profile/heading',$data);
            $this->load->view('users/profile/totalfriend',$data);
        }

        function remove_friend($id){
            $this->Profile_Model->removefriend($id);
            //$this->total_friends();
            redirect(base_url('friendlist'));
        }

        function update_personal_info(){

            if($this->session->userdata('user_id') == true){
                $this->form_validation->set_rules('fname','First Name', 'required');
                $this->form_validation->set_rules('lname','Last Name', 'required');
                $this->form_validation->set_rules('phone','Phone Number', 'required');
                $this->form_validation->set_rules('country','Country Name', 'required');
                if($this->form_validation->run() == false){
                    $this->load->view('users/header',array('keyword' => 'Edit Profile Info', 'title'=>'Edit Profile Info', 'score' => '','others' =>''));
                    $this->load->view('users/profile/profile_leftnav');
                    $this->load->view('users/profile/update_personal_info');
                }else{
                    if(isset($_POST['update'])){

                        $updates = array(
                            'user_id'   => $this->session->userdata('user_id'),
                            'fname'     => $_POST['fname'],
                            'lname'     => $_POST['lname'],
                            'phone'     => $_POST['phone'],
                            'fathers_name'  => $_POST['fathers_name'],
                            'mothers_name'  => $_POST['mothers_name'],
                            'country'   => $_POST['country'],
                            'present_address'   => $_POST['present_address'],
                            'permanent_address' => $_POST['permanent_address'],
                            'nid'               => $_POST['nid']
                        );

                            $this->Profile_Model->UpdateInfo($updates);
                            redirect(base_url('logout')); 
                        
                    }

                }
            }else{
                $data['msg'] = "Please Login First";
                redirect(base_url('login'));
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
                    $this->load->view('users/header',array('keyword' => '', 'title'=>'', 'score' => '','others' =>''));
                    $this->load->view('users/profile/profile_leftnav');
                    $this->load->view('users/profile/upload_profile_pic', array('error' => ''));
                    //echo $this->session->userdata('user_id');
                    //echo "<h1>".base_url('uploads/profilephotos/').$this->upload->data('file_name')."</h1>";
                }else{
                    $this->load->view('users/header',array('keyword' => '', 'title'=>'', 'score' => '','others' =>''));
                    $this->load->view('users/profile/profile_leftnav');
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('users/profile/upload_profile_pic', $error);
                }

            }else{
                $this->load->view('users/header',array('keyword' => '', 'title'=>'', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/profile/upload_profile_pic', array('error' => ''));
            }
        }

        public function cv_view(){
            $data['query'] = $this->Profile_Model->profile();
            $data['total_friend'] = $this->Profile_Model->total_friend();
            $this->load->view('users/header',array('keyword' => '', 'title'=>'CV View', 'score' => '','others' =>''));
            $this->load->view('users/profile/profile_leftnav');
            $this->load->view('users/profile/heading',$data);
            $this->load->view('users/cv/admin_view');  
        }
        public function fetch_cv_view(){
            $output = '';
            $output .= '
                    <div class="row">
                        <h2>Hello world</h2>
                    </div>
                </div>
                </body>
                </html>
            ';
            echo $output;
        }
    }
