<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Search extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Search_Nav_Model');
            $this->load->model('Score_Model');
            
        }

        public function index(){
 
            $this->load->view('header',array('search' => '', 'score' => '','others' =>''));
            $this->load->view('leftnav');
            $this->load->view('search_main/index');

        } 
/* 
        public function count($news_id){
            $qry = $this->Search_Nav_Model->like_count($news_id);
            echo $qry->num_rows();
        }
 */
        public function posts(){   
            if(isset($_GET['keyword'])){
                $data['search'] = $_GET['search'];
                
            } 
            $data['score'] = '';//just passing variable 
            //$data['search_posts'] = $this->Search_Nav_Model->Search_Post($data['search']); 
            $this->load->view('header',$data);
            $this->load->view('leftnav');
            $this->load->view('search_main/index',$data);
            $this->load->view('search_main/posts');
            //echo $data["search"];
        }
        public function post_fetch(){ 
            $search = '';
            $output = '';
            $like = 0;
            $comment=0;
            $dislike = 0;
            $qry = $this->Search_Nav_Model->Search_Post($this->input->post('search'),$this->input->post('limit'),$this->input->post('start'));
            if($qry->num_rows()>0){
                foreach ($qry->result() as $row) {
                    // count total like 
                    $like_score = $this->Score_Model->count_like($row->news_id);
                    $like +=$like_score;
                    // count total dislike 
                    $dislike_score = $this->Score_Model->count_dislike($row->news_id);
                    $dislike += $dislike_score;
                    // count total comment 
                    $comment_score = $this->Score_Model->count_comment($row->news_id);
                    $comment += $comment_score;
                    //end 
                    $output .= '
                        <div class="post_data bg-white row">
                        <div class="col-12">
                            <h4> 
                                <a href='.base_url("Home/ReadFullNews/").$row->news_id.'>'.$row->news_title.'</a>
                                <small class="budge" style="font-size: 14px">'.$row->news_insert_time.'</small>
                            </h4>
                            <p>'.trim(substr($row->news_post_1,0,500)).'.....<a class="card-link" href='.base_url("Home/ReadFullNews/").$row->news_id.'>See More</a></p>
                        </div>
                        <div class="col-12">
                                <p class="text-center"><a href="" class="card-link">'.$like.' People Like </a> <a href="" class="card-link">'.$dislike.' People Dislike</a> <a href="" class="card-link">'.$comment.' People Comment </a></p>
                        </div>
                        
                    </div>
                    ';
                }
            }
            echo $output;

        }

        public function friends(){
            if(isset($_GET['keyword'])){
                $data['search'] = $_GET['search'];
                
            } 
            $data['score'] = '';//just passing variable 
            //$data['search_friends'] = $this->Search_Nav_Model->Search_Friends($data['search']); 
            $this->load->view('header',$data);
            $this->load->view('leftnav');
            $this->load->view('search_main/index',$data);
            $this->load->view('search_main/friend');
        }
        public function fetch_friends(){ 
            $output = '';
            $followers = 0;
            $following = 0;
            $qry =  $this->Search_Nav_Model->Search_Friends($this->input->post('search'),$this->input->post('limit'),$this->input->post('start'));
            if($qry->num_rows()>0){
                foreach ($qry->result() as $row) {
                    $count_following =  $this->Search_Nav_Model->total_following($row->user_id);
                    $following +=$count_following;
                    // count followers
                    $count_followers = $this->Search_Nav_Model->total_followers($row->user_id);
                    $followers +=$count_followers;
                    $output .='
                        <div class="post_data bg-white row">
                            <div class="col-md-1">
                                <a href='.base_url('Public_Profile/index/'.$row->user_id).'><img src='.$row->photo.' alt=" " class="rounded-circle" style="width:80%"></a>
                            </div>
                            <div class="col-md-5">
                                <h5><a href='.base_url("Public_Profile/index/".$row->user_id).'>'.$row->fname.' '.$row->lname.'</a></h5>
                                <p style="margin-top: -10px; margin-bottom: 0px">'.$row->country.'</p>
                            </div>
                            <div class="col-md-2">
                                <p></p>
                                <a href='.base_url("SMS/chating/".$row->user_id).'>Send Message</a>
                            </div>
                            <div class="col-md-2">
                                <p></p>
                                <a href="#">'.$following.' Following</a>
                            </div>
                            <div class="col-md-2">
                                <p></p>
                                <a href="#">'.$followers.' Followers</a>
                            </div>
                        </div>
                    ';
                }
            }
            echo $output;
        }
        public function videos(){  

            if(isset($_GET['keyword'])){
                $data['search'] = $_GET['search'];
                
            } 
            $data['score'] = '';//just passing variable
            $data['search_posts'] = $this->Search_Nav_Model->Search_Video($data['search']); 
            $this->load->view('header',$data);
            $this->load->view('leftnav');
            $this->load->view('search_main/index',$data);
            $this->load->view('search_main/videos',$data);
            //echo $data["search"];
        }

        public function images(){ 

            if(isset($_GET['keyword'])){
                $data['search'] = $_GET['search'];
                
            } 
            $data['score'] = '';
            $data['search_posts'] = $this->Search_Nav_Model->Search_Video($data['search']); 
            $this->load->view('header',$data);
            $this->load->view('leftnav');
            $this->load->view('search_main/index',$data);
            $this->load->view('search_main/videos',$data);
            //echo $data["search"];
        }
        
    }

?>