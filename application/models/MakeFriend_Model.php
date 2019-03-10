<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class MakeFriend_Model extends CI_Model{
        public function make_friend($request){
            $this->db->insert('make_friends',$request);
        }

        public function friend_filter($parent_id, $sub_id){
            $this->db->select('*');
            $this->db->from('make_friends');
            $this->db->where('parent_id',$parent_id);
            $this->db->where('sub_id', $sub_id);
            $this->db->where('request_status',1);
            $this->db->where('delete_status',0);
            //$this->db->where('request_status',1);
            if($query = $this->db->get()){
                return $query;
            }else{
                return false;
            }
        }
    }
?>