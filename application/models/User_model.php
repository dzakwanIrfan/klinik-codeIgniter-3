<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($username, $password) 
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
        if ($query->num_rows() == 1) {
            return $query->row_array(); 
        } else {
            return false; 
        }
    }

    public function get_al_users()
    {
        return $this->db->get('users')->result_array();
    }

}
