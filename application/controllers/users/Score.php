<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Score extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('users/Score_Model');
            if($this->session->userdata('user_id') == false){
                redirect(base_url('login',$this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('signup').'">Click to SignUp</a>')));
            }
        }
        public function index(){
            $like = 0;
            $dislike = 0;
            $comment = 0;
            $post = 0; 
            $post_score = $this->Score_Model->count_post();
            
           // echo $post = $post_score->num_rows()."<br>";
            foreach ($post_score->result() as $row) {
                // count total like 
                $like_score = $this->Score_Model->count_like($row->news_id);
                $like +=$like_score;
                // count total dislike 
                $dislike_score = $this->Score_Model->count_dislike($row->news_id);
                $dislike += $dislike_score;
                // count total comment 
                $comment_score = $this->Score_Model->count_comment($row->news_id);
                $comment += $comment_score;
            }
            //echo "Dislike = ".$dislike;
            //echo "<br> Like = ".$like;
            //echo "<br> Comment = ".$comment;
            $total['score'] = (int)$post + (int)$like + (int)$comment-(int)$dislike;
            //echo "<br> Total = ".$total;
            $this->load->view('users/header',array('keyword' =>'', 'title'=>'Total score '.$total['score'], 'score' => $total['score'],'others' =>''));
            $this->load->view('users/leftnav');
            $this->load->view('users/score/score', $total);
        }

    }