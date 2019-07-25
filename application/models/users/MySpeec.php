<?php
    class MySpeec extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        
        public function myspeec($limit, $start)
         {
             $this->db->select('*');
             $this->db->from('news_post');
             $this->db->where('user_id', $this->session->userdata('user_id'));
             $this->db->where('delete_status', 0);
             $this->db->limit($limit,$start);
             $this->db->order_by('news_id', 'desc');
             return $this->db->get();
         }

        public function Edit_post($news_id)
         { 
            $this->db->select('*');
            $this->db->from('news_post');
            $this->db->where('news_id', $news_id);
            return $this->db->get();
         }

        public function Update_post($news, $data)
         {
             $this->db->where('news_id', $news['id']);
             if($this->db->update('news_post', $data))
             {
                 return true;
             }
             else
             {
                 return false;
             }
         }

        public function Delete_Post($news_id){
             $this->db->where('news_id', $news_id);
             $this->db->set('delete_status', 1);
             $this->db->set('delete_datetime', date('d-m-y h:i:s am'));
             if($this->db->update('news_post'))
             {
                 return true;
             }
             else
             {
                 return false;
             }
         }
    }

