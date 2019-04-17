<?php 
    class Home_Model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        function Home(){
            $this->db->select('*');
            $this->db->from('news_post');
            $this->db->join('users','news_post.user_id = users.user_id');
            $this->db->where('news_post.delete_status', 0);
            $this->db->Limit('50');
            $this->db->order_by('news_id','desc');
            return $this->db->get();
           // $row = $query->result();
        }

        function ReadFull_News($news_id){

            $this->db->select('*');
            $this->db->from('news_post');
            $this->db->join('users', 'news_post.user_id = users.user_id');
            $this->db->where('news_post.news_id',$news_id);
            return $this->db->get();
        }

        function Comment_news($data_comment){
            $this->db->insert('news_comments',$data_comment);
        }

        public function update_comment($update, $news_id){
            $this->db->where('comment_id', $update['comment_id']);
            $this->db->where('news_id', $news_id);
            $this->db->where('user_id', $this->session->userdata('user_id'));
            $this->db->update('news_comments',array('comment_news' =>$update['comment_news'], 'comment_update' =>$update['comment_update']));
        }

        public function Delete_comment($news_id, $comment_id){
            $this->db->where('comment_id', $comment_id);
            $this->db->where('news_id', $news_id);
            $this->db->where('user_id', $this->session->userdata('user_id'));
            $this->db->update('news_comments',array('comment_status' => '1'));
            return true;
        }

        function Comment_query($news_id){
            $this->db->select('*');
            $this->db->from('news_comments');
            $this->db->join('users', 'news_comments.user_id = users.user_id');
            $this->db->where('news_id',$news_id);
            $this->db->where('comment_status',0);
            $this->db->order_by('comment_id','desc');
            return $this->db->get();
        }

        // Insert model for Like or Dislike 
        function LikeDislike($likedata){
            $this->db->insert('news_like_dislike',$likedata);
        }

        //Like Query for a news
        function Likes($news_id){
            $this->db->select('*');
            $this->db->from('news_like_dislike');
            $this->db->where('news_id',$news_id);
            $this->db->where('likes',1);
            return $this->db->get();
        }

        //DisLike Query for a news
        function DisLikes($news_id){
            $this->db->select('*');
            $this->db->from('news_like_dislike');
            $this->db->where('news_id',$news_id);
            $this->db->where('likes',0);
            return $this->db->get();
        }
        function Like_Validation($news_id){
            $this->db->select('*');
            $this->db->from('news_like_dislike');
            $this->db->where('news_id', $news_id);
            $this->db->where('user_id', $this->session->userdata('user_id'));
            $this->db->where('likes',1);
            return $this->db->get();
        }
        function Dislike_Validation($news_id){
            $this->db->select('*');
            $this->db->from('news_like_dislike');
            $this->db->where('news_id', $news_id);
            $this->db->where('user_id', $this->session->userdata('user_id'));
            $this->db->where('likes',0);
            return $this->db->get();
        }

    }
