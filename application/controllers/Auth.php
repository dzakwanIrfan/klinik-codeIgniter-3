<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index() 
    {
        if ($this->session->userdata('logged_in')) {
            redirect('/');
        }
        $this->load->view('auth/login');
    }

    public function login() 
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->user_model->login($username, $password);
        if ($user) {
            $session_data = array(
                'id_user' => $user['id_user'],
                'username' => $user['username'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($session_data);
            redirect('dashboard'); 
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah.');
            redirect('login');
        }
    }

    public function logout() 
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('logged_in');
        redirect('login'); 
    }
}
