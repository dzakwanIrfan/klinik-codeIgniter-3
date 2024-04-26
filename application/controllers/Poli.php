<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PoliModel');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['poli'] = $this->PoliModel->get_all_poli();
        $data['title'] = 'poli';
        $this->load->view('templates/header', $data);
        $this->load->view('poli/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function add() {
        $this->form_validation->set_rules('nama_poli', 'Nama Poli', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'poli';
            $this->load->view('templates/header', $data);
            $this->load->view('poli/add', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = array(
                'nama_poli' => $this->input->post('nama_poli')
            );
            $this->PoliModel->insert_poli($data);
            redirect('poli');
        }
    }

    public function edit($id) {
        $this->form_validation->set_rules('nama_poli', 'Nama Poli', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['poli'] = $this->PoliModel->get_poli_by_id($id);
            $data['title'] = 'poli';
            $this->load->view('templates/header', $data);
            $this->load->view('poli/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = array(
                'nama_poli' => $this->input->post('nama_poli')
            );
            $this->PoliModel->update_poli($id, $data);
            redirect('poli');
        }
    }

    public function delete($id) {
        $this->PoliModel->delete_poli($id);
        redirect('poli');
    }
}
?>
