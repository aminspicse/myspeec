<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Count_Visitor extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('admin/Visitor_Count');
        }
        public function index(){
            echo "Total Visitor = ". $this->Visitor_Count->visitor();
            echo "<br>";
            echo "Unique Visitor = ". $this->Visitor_Count->unique_visit();
            echo "<br>";
            echo "Live = ". $this->Visitor_Count->live();
        }
    }