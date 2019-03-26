<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Search extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Search_Nav_Model');
        }

        public function search_all(){
 
            $this->load->view('header',array('search' => ''));
            $this->load->view('leftnav');
            $this->load->view('search_main/index');

        } 

        public function posts(){  

            if(isset($_GET['keyword'])){
                $data['search'] = $_GET['search'];
                
            } 
            $data['search_posts'] = $this->Search_Nav_Model->Search_Post($data['search']); 
            $this->load->view('header',$data);
            $this->load->view('leftnav');
            $this->load->view('search_main/index',$data);
            $this->load->view('search_main/posts',$data);
            //echo $data["search"];
        }

        public function friends(){
            if(isset($_GET['keywords'])){
                $data['search'] = $_GET['search'];
                
            } 
            $data['search_friends'] = $this->Search_Nav_Model->Search_Friends($data['search']); 
            $this->load->view('header',$data);
            $this->load->view('leftnav');
            $this->load->view('search_main/index',$data);
            $this->load->view('search_main/friend',$data);
        }

        
    }

?>