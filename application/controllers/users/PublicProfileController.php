<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class PublicProfileController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('users/PublicProfile');
            $this->load->model('users/MakeFriend');
            $this->load->model('users/Score');
        } 

        public function view_profile($user_id, $user_name)
        {
            // start validation for friend request 
            $data['parent_id'] = $this->session->userdata('user_id'); // check for friend filtering 
            $data['sub_id'] = $user_id;// check for friend request filtering 
            $data['filter_request'] = $this->MakeFriend->friend_filter($data['parent_id'], $data['sub_id']);
            //end validation for friend request 

            $data['user_id'] = $user_id;
            $data['profile'] = $this->PublicProfile->Profile($user_id);
            $data['education'] = $this->PublicProfile->user_cv_data('user_education', 'education_id',$user_id);
            $data['training'] = $this->PublicProfile->user_cv_data('user_training', 'training_id',$user_id);
            //just collect user name
            foreach($data['profile']->result() as $tit)
            { 
                $title = $tit->fname.' '.$tit->lname;
            }
            $this->load->view('users/header',array('title' => $title, 'keyword'=>$title, 'score' => '','others' =>''));
            $this->load->view('users/leftnav');
            $this->load->view('users/public_profile/index.php', $data);
            $this->load->view('users/public_profile/about.php', $data);
        }

        public function view_workplace($user_id, $user_name)
        {
            // start validation for friend request 
            $data['parent_id'] = $this->session->userdata('user_id'); // check for friend filtering 
            $data['sub_id'] = $user_id;// check for friend request filtering 
            $data['filter_request'] = $this->MakeFriend->friend_filter($data['parent_id'], $data['sub_id']);
            //end validation for friend request 

            $data['user_id'] = $user_id;
            $data['profile'] = $this->PublicProfile->Profile($user_id);
            $data['education'] = $this->PublicProfile->user_cv_data('user_education', 'education_id',$user_id);
            $data['training'] = $this->PublicProfile->user_cv_data('user_training', 'training_id',$user_id);
            $data['experience'] = $this->PublicProfile->user_cv_data('user_experience', 'experience_id', $user_id);
            $data['skills'] = $this->PublicProfile->user_cv_data('user_skill', 'skill_id', $user_id);
             //just collect user name
            foreach($data['profile']->result() as $tit)
            {
                $title = $tit->fname.' '.$tit->lname;
            }
            $this->load->view('users/header',array('title' => $title, 'keyword'=>$title, 'score' => '','others' =>''));
            $this->load->view('users/leftnav');
            $this->load->view('users/public_profile/index.php', $data);
            $this->load->view('users/public_profile/workplace.php', $data);
        }
        public function posts($user_id,$user_name,$post)
        {
            // start validation for friend request 
            $data['parent_id'] = $this->session->userdata('user_id'); // check for friend filtering 
            $data['sub_id'] = $user_id;// check for friend request filtering 
            $data['filter_request'] = $this->MakeFriend->friend_filter($data['parent_id'], $data['sub_id']);
            //end validation for friend request 
            
            $data['user_id'] = $user_id;
            $data['profile'] = $this->PublicProfile->Profile($user_id);
            //just collect user name
            foreach($data['profile']->result() as $tit)
            { 
                $title = $tit->fname.' '.$tit->lname;
            }
            $this->load->view('users/header',array('title' => $title, 'keyword'=>$title, 'score' => '','others' =>''));
            $this->load->view('users/leftnav');
            $this->load->view('users/public_profile/index.php', $data);
            $this->load->view('users/public_profile/post.php');
        }
        //infinit load data
        public function fetch_posts()
        { 
            $output = '';
            $like = 0;
            $dislike = 0;
            $comment = 0;
            $qry = $this->PublicProfile->Posts($this->input->post('user_id'),$this->input->post('limit'),$this->input->post('start'));
            if($qry->num_rows() > 0){
                foreach ($qry->result() as $row) {
                    // count total like 
                    $like_score = $this->Score->count_like($row->news_id);
                    //$like +=$like_score;
                    // count total dislike 
                    $dislike_score = $this->Score->count_dislike($row->news_id);
                    //$dislike += $dislike_score;
                    // count total comment 
                    $comment_score = $this->Score->count_comment($row->news_id);
                    //$comment += $comment_score;
                    //end 
                    if($row->post_privacy == 1)
                    {
                        $post_status = "Public";
                    }
                    else
                    {
                        $post_status = "Private";
                    }
                    $output .='
                        <div class="post_data bg-white">
                            <div class="row ">
                                <div class="col-10">
                                    <h4> 
                                        <a href='.base_url("details/".$row->news_id.'/'.url_title($row->news_title)).'>'.$row->news_title.'</a>
                                        <small class="budge" style="font-size: 14px">'.$row->news_insert_time.'<b> '.$post_status.'</b></small>
                                    </h4>
                                </div>
                                <div class="pull-right">
                                    
                                </div>
                            </div>
                            <div class="row col-12">
                                <p style="text-align: justify">'.$row->news_post_1.'</p>
                                
                            </div>
                            <div class="col-12">
                                <p class="text-center"><a href="" class="card-link">'.$like_score.' People Like </a> <a href="" class="card-link">'.$dislike_score.' People Dislike</a> <a href="" class="card-link">'.$comment_score.' People Comment </a></p>
                            </div>
                           
                        </div>
                    ';
                }
            }
            echo $output;
        }
       
        
    }