<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class User_Agent extends CI_Controller{
        public function index(){
            echo $_SERVER['REMOTE_ADDR'];
        }
    }