<?php
    class MySpeec_Model extends CI_Model{
         function myspeec(){
             $this->db->select('*');
             $this->db->from('news_post');
             //$this->db->join('users', )
             $this->db->where('user_id', $this->session->userdata('user_id'));
             $this->db->where('delete_status', 0);
             $this->db->order_by('news_id', 'desc');
             return $this->db->get();
         }

         function Edit_post($news_id){
            $this->db->select('*');
            $this->db->from('news_post');
            $this->db->where('news_id', $news_id);
            return $this->db->get();
         }
         function Update_post($news, $data){
             $this->db->where('news_id', $news['id']);
             $this->db->update('news_post', $data);
             return true;
         }

         function Delete_Post($news_id){
             $this->db->where('news_id', $news_id);
             $this->db->set('delete_status', 1);
             $this->db->set('delete_datetime', date('d-m-y h:i:s am'));
             $this->db->update('news_post');
             return true;
         }
    }

