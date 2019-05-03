<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Score extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Score_Model');
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
            $this->load->view('header',array('search' =>'','score' => $total['score'],'others' =>''));
            $this->load->view('leftnav');
            $this->load->view('score/score', $total);
        }

    }