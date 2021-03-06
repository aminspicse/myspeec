<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivitiesController extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); 

        if($this->session->userdata('user_id') == false)
        {
            redirect(base_url('login'), $this->session->set_flashdata('msg', 'You Need To SignIn. if you have no account <a href="'.base_url('SignUp').'">Click to SignUp</a>'));
        }
        $this->load->model('users/Activities');
    } 

    public function loginactivities()
    {
        
        $this->load->view('users/header',array('keyword' => '', 'title' =>'Login Activities', 'score' => '','others' =>''));
        $this->load->view('users/profile/profile_leftnav');
        $this->load->view('users/loginactivities/login');
    }

    public function fetch_loginactivities()
    { 
        $output = '';
        $qry = $this->Activities->Log_query($this->input->post('limit'),$this->input->post('start'));
        if($qry->num_rows() > 0)
        {
            foreach ($qry->result() as $row) 
            {
                if($row->accuracy == 1)
                {
                    $pass_status = "<a class='text-success'> Correct Password</a>";
                }
                else
                {
                    $pass_status = "<a href=".base_url('changepassword')." class='text-danger'> Someone try to Biolate your Password</a>";
                }
                $output .= '
                    <div class="post_data bg-white">
                      <p>'.$row->mobile.', '. $row->os.', '. $row->browser. ', '.$row->agent_string.',<b> '.$row->try_time.'</b>,'.$row->country.', '.$row->city. $pass_status.'</p>  
                      
                    </div>
                ';
            }
        }

        echo $output;
    }
}