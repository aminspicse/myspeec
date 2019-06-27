<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('users/Home_Model');
        date_default_timezone_set('asia/dhaka');
        $this->load->library('pagination');
        //$this->output->enable_profiler(TRUE);
        //$this->output->cache($n);
    }
   
	public function index(){
    
        $this->load->view("users/header",array('keyword' => '', 'title'=>'Myspeec', 'score' => '','others' =>''));
        $this->load->view('users/leftnav');
        $this->load->view('users/home/news');
       // echo $read; 
    }
	// just load data 
	function fetch() {
		$output = '';
		$data = $this->Home_Model->fetch_data($this->input->post('limit'), $this->input->post('start'));
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
                if($row->user_privacy == 1){
                    $user_status = '<a href='.base_url("view/".$row->user_id.'/'.url_title($row->fname.$row->lname)).'>'.$row->fname.' '.$row->lname.' </a>';
                }else{
                    $user_status = '<a>Hidden</a>';
                }
				$output .= '
				<div class="post_data bg-white">
					<h2 class="text-danger min-title news_title"> <a href='.base_url('details/'.$row->news_id.'/'.url_title(sha1($row->news_title))).'>'.$row->news_title.'</a></h2>
                    <a></a>
                    <p style="text-align: justify">'.trim(substr($row->news_post_1,0,500)).'...<a href='.base_url('details/'.$row->news_id.'/'.url_title(sha1($row->news_title))).'>See More</a></p>
					<p class="text-center"> <i> Posted By: '.$user_status.' on: '.$row->news_insert_time.'</i></p>
				</div>
				';
			}
		}
		echo $output;
	}
	//end

    public function video(){

        $this->load->view("users/header",array('keyword' => '', 'title'=>'', 'score' => '','others' =>''));
       // $this->load->view('leftnav');
        $this->load->view('users/leftnav');
        //$this->load->view('home/index'); 

    }  
 
    function ReadFullNews($news_id,$news_title){
        if(isset($_POST['update_comment'])){
            $update['comment_id']       = $_POST['comment_id'];
            $update['comment_news']     = $_POST['comment'];
            $update['comment_update']   = date("l jS \of F Y h:i:s A");
            $this->Home_Model->update_comment($update, $news_id);
        }
        $qry = $data['query']       =$this->Home_Model->ReadFull_News($news_id);
        $data['commentquery']       = $this->Home_Model->Comment_query($news_id);
        $data['likes']              = $this->Home_Model->Likes($news_id);
        $data['dislikes']           = $this->Home_Model->DisLikes($news_id);
        $data['likevalidation']     = $this->Home_Model->Like_Validation($news_id);
        $data['dislikevalidation']  = $this->Home_Model->Dislike_Validation($news_id); 
        $data['keyword']            = '';//just for passing variable 
        $data['score']              = ''; //just for passing variable
        
        foreach ($qry->result() as $tit) {
            $data['title'] = $tit->news_title;
            $data['others']             = 'details/'.$news_id.'/'.$news_title;
            $data['img_url']            = $tit->image_link;
            $data['description']        = $tit->news_post_1;
        }
        
        $this->load->view('users/header',$data);
        $this->load->view('users/leftnav');
        $this->load->view('users/home/readfullnews',$data);
        

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
                    redirect(base_url().'details/'.$_GET['news_id'].'/'.url_title($data_comment['comment_news']));
                
            }
            
        }else{
            redirect(base_url().'login.asp', $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup.asp').'">Click to SignUp</a>'));
            
        }
    }

    public function delete_comment($news_id, $comment_id){
        //echo $news_id.' '.$comment_id;
        $check = $this->Home_Model->Delete_comment($news_id, $comment_id);
        if($check){
            redirect(base_url('details/'.$news_id.'/Deleted a comment'));
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
                //$title = $_GET['news_title'];
                $this->Home_Model->LikeDislike($likedata);
                redirect(base_url().'details/'.$_GET['news_id'].'/liked');
            }
     
            if(isset($_GET['dislikenews'])){
                $likedata = array(
                    'user_id'   => $this->session->userdata('user_id'),
                    'news_id'  => $_GET['news_id'],
                    'likes' => '0'
                );
                $this->Home_Model->LikeDislike($likedata);
                redirect(base_url().'details/'.$_GET['news_id'].'/disliked');
            }

        }else{
            redirect(base_url().'login', $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup.asp').'">Click to SignUp</a>'));
            
        }
    }

    function date(){
        $this->load->helper('date');
        echo date("l jS \of F Y h:i:s A");
    }
}


