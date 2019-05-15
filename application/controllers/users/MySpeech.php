<?php 
    class MySpeech extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('users/MySpeec_Model');
            $this->load->model('users/Score_Model');
            $this->load->library('form_validation');
            date_default_timezone_set('asia/dhaka');
            if($this->session->userdata('user_id') == null){
                redirect('login');
            }
        } 
        public $title = 'All Post';
        function index(){
            $this->load->view('users/header',array('keyword' => '','title'=>$this->title, 'score' => '','others' =>''));
            $this->load->view('users/profile/profile_leftnav');
            //$query['query'] = $this->MySpeec_Model->myspeec();
            // start profile photo and profile header
            //$this->load->model('users/Profile_Model');
            //$data['query'] = $this->Profile_Model->profile();
            //$data['total_friend'] = $this->Profile_Model->total_friend();
            //$this->load->view('users/profile/heading',$data); //end profile heading 
            $this->load->view('users/myspeech/myspeec'); 
        } 
        public function myspeec_fetch(){
            $output = '';
            $like = 0;
            $dislike = 0;
            $comment = 0;
            $qry = $this->MySpeec_Model->myspeec($this->input->post('limit'),$this->input->post('start'));
            if($qry->num_rows() > 0){
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
                    if($row->post_privacy == 1){
                        $post_status = "Public";
                    }else{
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
                                    <a href='.base_url("details/".$row->news_id.'/'.url_title($row->news_title)).'>View</a>
                                    <a href='.base_url('editpost/'.$row->news_id.'/'.url_title($row->news_title)).'>Edit</a>
                                    <a href='.base_url('users/MySpeech/delete_post/'.$row->news_id).'>Delete</a>
                                </div>
                            </div>
                            <div class="row col-12">
                                <p style="text-align: justify">'.$row->news_post_1.'</p>
                                
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

        function edit_post($news_id,$title){

                $this->load->view('users/header',array('keyword' => '', 'title'=>'', 'score' => '','others' =>''));
                $this->load->view('users/profile/profile_leftnav');
                $this->load->view('users/myspeech/edit_post.php', array('query' => $this->MySpeec_Model->Edit_post($news_id), 'error' => '' ));
          
            
        }

        function update_post(){
           // $this->form_validation->set_rules('news_title', 'Title', 'required');

                if(isset($_POST['update_speec'])){
                    $data = array(
                        
                        'news_title'        => $_POST['post_title'],
                        'news_post_1'       => $_POST['news_post_1'],
                        'video_link'        => $_POST['video_link'],
                        'user_privacy'      => $_POST['user_privacy'],
                        'post_privacy'      => $_POST['post_privacy'],
                        'news_updatedate'   => Date('d-m-y h:i:s am')
                    );

                    $news = array('id' => $_POST['news_id']);
                }
                if($this->MySpeec_Model->Update_post($news, $data) == true){

                // $query['query'] = $this->MySpeec_Model->Edit_post($news_id);
                    $this->session->set_flashdata('msg', 'Your Post Updated Successfully');
                    $this->load->view('users/header',array('keyword' => '','title'=>$data['news_title'], 'score' => '','others' =>''));
                    $this->load->view('users/profile/profile_leftnav');
                    $this->load->view('users/myspeech/edit_post.php', array('query' => $this->MySpeec_Model->Edit_post($news['id']), 'error' => '' ));

                }else{
                    echo "not save";
                }

        }

        function delete_post($news_id){
            if($this->MySpeec_Model->Delete_Post($news_id) == true){
                $this->session->set_flashdata('msg', 'Your Post has been Deleted Successfully');
                redirect('mypost');
                //$this->load->view('header');
                //$this->load->view('profile/profile_leftnav');
                //$query['query'] = $this->MySpeec_Model->myspeec();
                //$this->load->view('myspeech/index', $query); 
            }
        }
    
 

    }
?>