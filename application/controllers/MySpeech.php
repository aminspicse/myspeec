<?php 
    class MySpeech extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('MySpeec_Model');
            $this->load->library('form_validation');
            date_default_timezone_set('asia/dhaka');
            if($this->session->userdata('user_id') == null){
                redirect('Login');
            }
        }

        function index(){
            $this->load->view('header');
            $this->load->view('profile/profile_leftnav');
            $query['query'] = $this->MySpeec_Model->myspeec();
            $this->load->view('myspeech/index', $query); 
        }

        function edit_post($news_id){

                $this->load->view('header');
                $this->load->view('profile/profile_leftnav');
                $this->load->view('myspeech/edit_post.php', array('query' => $this->MySpeec_Model->Edit_post($news_id), 'error' => '' ));
          
            
        }

        function update_post(){
           // $this->form_validation->set_rules('news_title', 'Title', 'required');

                if(isset($_POST['update_speec'])){
                    $data = array(
                        
                        'news_title'        => $_POST['post_title'],
                        'news_post_1'       => $_POST['news_post_1'],
                        'news_post_2'       => $_POST['news_post_2'],
                        'video_link'        => $_POST['video_link'],
                        'user_privacy'      => $_POST['user_privacy'],
                        'news_updatedate'   => Date('d-m-y h:i:s am')
                    );

                    $news = array('id' => $_POST['news_id']);
                }
                if($this->MySpeec_Model->Update_post($news, $data) == true){

                // $query['query'] = $this->MySpeec_Model->Edit_post($news_id);
                    $this->session->set_flashdata('msg', 'Your Post Updated Successfully');
                    $this->load->view('header');
                    $this->load->view('profile/profile_leftnav');
                    $this->load->view('myspeech/edit_post.php', array('query' => $this->MySpeec_Model->Edit_post($news['id']), 'error' => '' ));

                }else{
                    echo "not save";
                }

        }

        function delete_post($news_id){
            if($this->MySpeec_Model->Delete_Post($news_id) == true){
                $this->session->set_flashdata('msg', 'Your Post has been Deleted Successfully');
                redirect('MySpeech/');
                //$this->load->view('header');
                //$this->load->view('profile/profile_leftnav');
                //$query['query'] = $this->MySpeec_Model->myspeec();
                //$this->load->view('myspeech/index', $query); 
            }
        }
    
 

    }
?>