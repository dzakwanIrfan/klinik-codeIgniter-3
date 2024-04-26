<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }
	public function index()
	{
		$data['title'] = 'beranda';
		$this->load->view('templates/header', $data);
		$this->load->view('main');
		$this->load->view('templates/footer');
	}
}
