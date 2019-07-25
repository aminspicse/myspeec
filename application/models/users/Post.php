<?php 

    class Post extends CI_Model
    {
        function savepost($data)
        {
            if($this->db->insert('news_post',$data))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
