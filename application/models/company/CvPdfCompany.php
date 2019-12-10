<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CvPdfCompany extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function fetch_user($user_id)
    {
        $this->db->select('*')
        ->from('users')
        ->where('user_id',$user_id)
        ->where('delete_status',0);
        return $this->db->get();
        /*if($qry->num_rows() > 0)
        {
            return $this->db->get();
        }
        else
        {
            return false;
        }
        */
    }
}