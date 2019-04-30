<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Home_Model');
        date_default_timezone_set('asia/dhaka');
        $this->load->library('pagination');
        //$this->output->enable_profiler(TRUE);
        //$this->output->cache($n);
    }
	public function index(){
        
        //$data['query']=$this->Home_Model->Home();

        $this->load->view("header",array('search' => ''));
        $this->load->view('leftnav');
        $this->load->view('home/news');
       // echo $read;
    }
	// just load data 
	function fetch() 
	{
		$output = '';
		//$this->load->model('scroll_pagination_model');
		$data = $this->Home_Model->fetch_data($this->input->post('limit'), $this->input->post('start'));
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
				<div class="post_data bg-white">
					<h2 class="text-danger text-center"> <a href='.base_url('Home/ReadFullNews/'.$row->news_id).'>'.$row->news_title.'</a></h2>
                    <a></a>
                    <p style="text-align: justify">'.trim(substr($row->news_post_1,0,500)).'...<a href='.base_url('Home/ReadFullNews/'.$row->news_id).'>See More</a></p>
					<p class="text-center"> <i> Posted By: <a href='.base_url("Public_Profile/index/".$row->user_id).'>'.$row->fname.' '.$row->lname.' </a> on: '.$row->news_insert_time.'</i></p>
				</div>
				';
			}
		}
		echo $output;
	}
	//end

    public function video(){

        $this->load->view("header",array('search' => ''));
       // $this->load->view('leftnav');
        $this->load->view('leftnav');
        $this->load->view('home/index'); 

    }  
 
    function ReadFullNews($news_id){
        if(isset($_POST['update_comment'])){
            $update['comment_id'] = $_POST['comment_id'];
            $update['comment_news'] = $_POST['comment'];
            $update['comment_update'] = date("l jS \of F Y h:i:s A");
            $this->Home_Model->update_comment($update, $news_id);
        }
        $data['query']=$this->Home_Model->ReadFull_News($news_id);
        $data['commentquery']=$this->Home_Model->Comment_query($news_id);
        $data['likes'] = $this->Home_Model->Likes($news_id);
        $data['dislikes'] = $this->Home_Model->DisLikes($news_id);
        $data['likevalidation'] = $this->Home_Model->Like_Validation($news_id);
        $data['dislikevalidation'] = $this->Home_Model->Dislike_Validation($news_id); 
        $data['search'] = '';
        $this->load->view('header',$data);
        $this->load->view('leftnav');
        $this->load->view('home/readfullnews',$data);
        

    }

    // comment 
    function Comment_news(){
        if($this->session->userdata('user_id') == true){
            if(isset($_GET['post_comment'])){
                $data_comment = array(
                    'user_id'   => $this->session->userdata('user_id'),
                    'news_id'   => $_GET['news_id'],
                    'comment_news'  => $_GET['comment'],
                    'comment_date'  => date("l jS \of F Y h:i:s A"),
                );

                $this->Home_Model->Comment_news($data_comment);
                    redirect(base_url().'Home/ReadFullNews/'.$_GET['news_id']);
                
            }
            
        }else{
            redirect(base_url().'Login/', $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('SignUp').'">Click to SignUp</a>'));
            
        }
    }

    public function delete_comment($news_id, $comment_id){
        //echo $news_id.' '.$comment_id;
        $check = $this->Home_Model->Delete_comment($news_id, $comment_id);
        if($check){
            redirect(base_url('Home/ReadFullNews/'.$news_id));
        }
    }

    public function update_comment(){

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

    function date(){
        $this->load->helper('date');
        echo date("l jS \of F Y h:i:s A");
    }
}


