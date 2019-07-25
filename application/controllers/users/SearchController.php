<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class SearchController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('users/Search_Nav_Model');
            $this->load->model('users/Score');
            $this->load->model('users/MakeFriend');
            
        }

        public $title = ' - MySpeec Search';

        public function index()
        {
 
            $this->load->view('users/header',array('search' => '', 'title' => '', 'score' => '','others' =>''));
            $this->load->view('users/leftnav');
            $this->load->view('users/search_main/index');

        } 
/* 
        public function count($news_id){
            $qry = $this->Search_Nav_Model->like_count($news_id);
            echo $qry->num_rows(); 
        }
 */
        public function posts()
        {   
            if(isset($_GET['search']))
            {
                $data['keyword'] = $_GET['keyword'];
                
            } 
            $data['title'] = $data['keyword'].$this->title;
            $data['score'] = '';//just passing variable 
            $data['others'] = '';
            //$data['search_posts'] = $this->Search_Nav_Model->Search_Post($data['search']); 
            $this->load->view('users/header',$data);
            $this->load->view('users/leftnav');
            $this->load->view('users/search_main/index',$data);
            $this->load->view('users/search_main/posts');
            //echo $data["search"];
        }

        public function post_fetch()
        { 
            $keyword = '';
            $output = '';
            $like = 0;
            $comment=0;
            $dislike = 0;
            $qry = $this->Search_Nav_Model->Search_Post($this->input->post('search'),$this->input->post('limit'),$this->input->post('start'));
            if($qry->num_rows()>0)
            {
                foreach ($qry->result() as $row) 
                {
                    // count total like 
                    $like_score = $this->Score->count_like($row->news_id);
                    $like +=$like_score;
                    // count total dislike 
                    $dislike_score = $this->Score->count_dislike($row->news_id);
                    $dislike += $dislike_score;
                    // count total comment 
                    $comment_score = $this->Score->count_comment($row->news_id);
                    $comment += $comment_score;
                    //end 
                    $output .= ' 
                        <div class="post_data bg-white row">
                        <div class="col-12">
                            <h4> 
                                <a href='.base_url("details/".$row->news_id."/".url_title($row->news_title)).'>'.$row->news_title.'</a>
                                <small class="budge" style="font-size: 14px">'.$row->news_insert_time.'</small>
                            </h4>
                            <p>'.trim(substr($row->news_post_1,0,500)).'.....<a class="card-link" href='.base_url("details/".$row->news_id."/".url_title($row->news_title)).'>See More</a></p>
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

        public function friends()
        {
            if(isset($_GET['search']))
            {
                $data['keyword'] = $_GET['keyword'];
                
            } 
            $data['score'] = '';//just passing variable 
            $data['title'] = $data['keyword'].$this->title; //title of browser
            $data['others'] = '';
            //$data['search_friends'] = $this->Search_Nav_Model->Search_Friends($data['search']); 
            $this->load->view('users/header',$data);
            $this->load->view('users/leftnav');
            $this->load->view('users/search_main/index',$data);
            $this->load->view('users/search_main/friend');
        }

        public function fetch_friends()
        { 
            $output = '';
            $qry =  $this->Search_Nav_Model->Search_Friends($this->input->post('search'),$this->input->post('limit'),$this->input->post('start'));
            if($qry->num_rows()>0)
            {
                foreach ($qry->result() as $row) 
                {
                    $count_following =  $this->Search_Nav_Model->total_following($row->user_id);
                    $count_followers = $this->Search_Nav_Model->total_followers($row->user_id);
                        // check friend or not //start
                        $check = $this->MakeFriend->friend_filter($this->session->userdata('user_id'), $row->user_id);
                        if($check->num_rows() > 0)
                        {
                            $friend_status = "Connected";
                        }
                        else
                        {
                            $friend_status = "Connect";
                        }
                        // end check friend of not
                    $output .='
                        <div class="post_data bg-white row">
                            <div class="col-md-1">
                                <a href='.base_url("view/".$row->user_id.'/'.url_title($row->fname.$row->lname)).'><img src='.$row->photo.' alt=" " class="rounded-circle" style="width:80%"></a>
                            </div>
                            <div class="col-md-3">
                                <h5><a href='.base_url("view/".$row->user_id.'/'.url_title($row->fname.$row->lname)).'>'.$row->fname.' '.$row->lname.'</a></h5>
                                <p style="margin-top: -10px; margin-bottom: 0px">'.$row->country.'</p>
                            </div>
                            <div class="col-md-2">
                                <p></p>
                                <a href='.base_url("users/MakeFriend/friend_request/".$row->user_id).'>'.$friend_status.'</a>
                            </div>
                            <div class="col-md-2">
                                <p></p>
                                <a href='.base_url("chat/".$row->user_id).'>Send Message</a>
                            </div>
                            <div class="col-md-2">
                                <p></p>
                                <a href="#">'.$count_following.' Following</a>
                            </div>
                            <div class="col-md-2">
                                <p></p>
                                <a href="#">'.$count_followers.' Followers</a>
                            </div>
                        </div>
                    ';
                }
            }
            echo $output;
        }
        public function jobs()
        {
            if(isset($_GET['search']))
            {
                $data['keyword'] = $_GET['keyword'];
                
            } 
            $data['score'] = '';//just passing variable 
            $data['title'] = $data['keyword'].$this->title; //title of browser
            $data['others'] = '';
            //$data['search_friends'] = $this->Search_Nav_Model->Search_Friends($data['search']); 
            $this->load->view('users/header',$data);
            $this->load->view('users/leftnav');
            $this->load->view('users/search_main/index',$data);
            $this->load->view('users/search_main/jobs');
        }
        // fetch jobs
        public function fetch_jobs()
        { 
            $output = '';
            $qry =  $this->Search_Nav_Model->Search_Job($this->input->post('search'),$this->input->post('limit'),$this->input->post('start'));
            if($qry->num_rows()>0)
            {
                foreach ($qry->result() as $row) 
                {
                    $output .= '
                    <div class="post_data bg-white"> 
                        <h2 class="text-danger min-title news_title"> <a href='.base_url('viewfull/'.$row->job_id.'/'.url_title(sha1($row->job_title))).' target="new">'.$row->job_title.'</a></h2>
                        <a></a>
                        <p style="text-align: justify">'.trim(substr($row->company_name.', '.$row->job_location.', '.$row->education_requirements.', '.$row->experience_requirements.', '.$row->job_responsibilities.', '.$row->salary,0,500)).'...<a href='.base_url('viewfull/'.$row->job_id.'/'.url_title(sha1($row->job_title))).' target="new">View full job</a></p>
                        <p class="text-center"> <i> Published on: <a href="#">'.$row->published_on.'</a> Dedline: <a href="#">'.$row->application_dedline.'</a></i></p>
                    </div>
                    ';
                }
            }
            echo $output;
        }

        public function videos()
        {  

            if(isset($_GET['search']))
            {
                $data['keyword'] = $_GET['keyword'];
                
            } 
            $data['score'] = '';//just passing variable
            $data['title'] = $data['keyword'].$this->title;
            $data['others'] = '';
            $data['search_posts'] = $this->Search_Nav_Model->Search_Video($data['keyword']); 
            $this->load->view('users/header',$data);
            $this->load->view('users/leftnav');
            $this->load->view('users/search_main/index',$data);
            $this->load->view('users/search_main/videos',$data);
            //echo $data["search"];
        }

        public function images()
        { 

            if(isset($_GET['search']))
            {
                $data['keyword'] = $_GET['keyword'];
                
            } 
            $data['score'] = '';
            $data['title'] = $data['keyword'].$this->title;
            $data['others'] = '';
            $data['search_posts'] = $this->Search_Nav_Model->Search_Video($data['keyword']); 
            $this->load->view('users/header',$data);
            $this->load->view('users/leftnav');
            $this->load->view('users/search_main/index',$data);
            $this->load->view('users/search_main/videos',$data);
            //echo $data["search"];
        }
        
    }

?>