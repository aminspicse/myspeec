<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class UserAgentController extends CI_Controller
    {
        public function index()
        {
            echo $_SERVER['REMOTE_ADDR'];
        }
    }