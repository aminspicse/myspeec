<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CvPdf extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function fetch_data_for_view_admin($table, $key_name, $user_id)
    { 
        /* fetch user data for view
            $table = table name which table's will fetched data
            $key_name  = table primary key name
            $key_value = primary key value
            $user_id = user tables id it's a foreign key 
        */
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('user_id',$user_id);
        $this->db->where('delete_status',0);
        $this->db->order_by($key_name,'desc');
        return $this->db->get();
    }

}