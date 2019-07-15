<?php 
    class NewSpeec extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('users/NewSpeec_Model');

            date_default_timezone_set('Asia/Dhaka');
        }

        function index(){
            if($this->session->userdata('user_id') == true){
                $this->load->view('users/header',array('keyword' => '', 'title'=>'New Post - Myspeec', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->Post_Speec();
                $this->load->view('users/newspeec/new_speech');

                
            }else{
                redirect(base_url().'login.asp', $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup.asp').'">Click to SignUp</a>'));
            }
        }

        function Post_Speec(){
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('post_title','Title', 'required',array('required' => 'Please Give Your Speec Titles'));
           // $this->form_validation->set_rules('image_link','Image','required');
            if($this->form_validation->run() == true){
            
                if(isset($_POST['submit_speec'])){
                    $config = array(
                        'upload_path'   => './uploads/',
                        'allowed_types' => 'jpg|png|gif|bmp',
                        'max_size'      => 1024,
                        'max_width'     => 1000, 
                        'max_height'    => 2000,
                        'encrype_name'  => true 
                    );
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image_link')){
                        $data = array(
                            'user_id'       	=> $this->session->userdata('user_id'),
                            'news_title'    	=> $_POST['post_title'],
                            'news_post_1'   	=> $_POST['news_post_1'],
                            'news_post_2'   	=> $_POST['news_post_2'],
                            'video_link'    	=> $_POST['video_link'],
                            'image_link'    	=> base_url('uploads/').$this->upload->data('file_name'),
                            'user_privacy'  	=> $_POST['user_privacy'],
                            'news_insert_time'  => date("l jS \of F Y h:i:s A")
                        );
                        
                        $check = $this->NewSpeec_Model->insert_speec($data);
                        if($check == false){ 
                            redirect(base_url('new_speec'));
                        }else{
                            $message = '<h2 class="text-center text-success">Successfully Posted</h2>';
                            redirect(base_url('home'), $this->session->set_flashdata('msg',$message));
                        }
                    }else{
                        echo "<script> document.getElementById('img').innerHTML = 'Image is to large'</script>";
                        /*
                        $this->load->view('header',array('search' => ''));
                        $this->load->view('leftnav');
                        $this->load->view('newspeec/error');
                        $this->load->view('newspeec/new_speech');
                        */
                    }
                    
                }
            }else{
                
            }

        }

       
    }
?>