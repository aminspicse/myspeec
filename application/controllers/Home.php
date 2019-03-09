<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Home_Model');
        date_default_timezone_set('asia/dhaka');
        $this->load->library('pagination');
    }
	public function index(){

        $config = array(
            'base_url' => base_url('Home/index'),
            'per_page' => 2,
            'total_tows' => 5
        );
        
        $data['query']=$this->Home_Model->Home();

        $this->load->view("header");
        $this->load->view('leftnav');
        $this->load->view('home/news',$data);
       // echo $read;
    }

    public function video(){

        $this->load->view("header");
       // $this->load->view('leftnav');
        $this->load->view('home/index');
    }

    function ReadFullNews($news_id){
        $data['query']=$this->Home_Model->ReadFull_News($news_id);
        $data['commentquery']=$this->Home_Model->Comment_query($news_id);
        $data['likes'] = $this->Home_Model->Likes($news_id);
        $data['dislikes'] = $this->Home_Model->DisLikes($news_id);
        $data['likevalidation'] = $this->Home_Model->Like_Validation($news_id);
        $this->load->view('home/header',$data);
        $this->load->view('leftnav');
        $this->load->view('home/readfullnews',$data);
        

    }

    function Comment_news(){
        if($this->session->userdata('user_id') == true){
            if(isset($_GET['post_comment'])){
                $data_comment = array(
                    'user_id'   => $this->session->userdata('user_id'),
                    'news_id'   => $_GET['news_id'],
                    'comment_news'  => $_GET['comment'],
                    'comment_date'  => Date('d-m-y'),
                    'comment_time'  => Date('h:i:s am')
                );

                $this->Home_Model->Comment_news($data_comment);
                    redirect(base_url().'Home/ReadFullNews/'.$_GET['news_id']);
                
            }
            
        }else{
            redirect(base_url().'Login/', $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('SignUp').'">Click to SignUp</a>'));
            
        }
    }

    function Like_Dislike(){

        if($this->session->userdata('user_id') == true){

            if(isset($_GET['likenews'])){
                $likedata = array(
                    'user_id'   => $this->session->userdata('user_id'),
                    'news_id'  => $_GET['news_id'],
                    'likes' => '1'
                );
                $this->Home_Model->LikeDislike($likedata);
                redirect(base_url().'Home/ReadFullNews/'.$_GET['news_id']);
            }
     
            if(isset($_GET['dislikenews'])){
                $likedata = array(
                    'user_id'   => $this->session->userdata('user_id'),
                    'news_id'  => $_GET['news_id'],
                    'likes' => '0'
                );
                $this->Home_Model->LikeDislike($likedata);
                redirect(base_url().'Home/ReadFullNews/'.$_GET['news_id']);
            }

        }else{
            redirect(base_url().'Login/', $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('SignUp').'">Click to SignUp</a>'));
            
        }
    }
}


?>