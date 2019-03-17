<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Search extends CI_Controller{
        public function __construct(){
            parent::__construct();
        }

        public function search_all(){

            $this->load->view('header');
            $this->load->view('leftnav');
            $this->load->view('search_main/index');

        }

        public function posts(){

            if(isset($_POST['keyword'])){
                $data['search'] = $_POST['search'];
                
            }
            $this->load->view('header');
            $this->load->view('leftnav');
            $this->load->view('search_main/index');
            echo $data["search"];
        }

        
    }

?>