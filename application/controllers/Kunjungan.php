<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('KunjunganModel');
        $this->load->model('Pasien_model');
        $this->load->model('Dokter_model');
        $this->load->model('PoliModel');
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['kunjungan'] = $this->KunjunganModel->get_all_kunjungan();
        $data['title'] = 'kunjungan';
        $this->load->view('templates/header', $data);
        $this->load->view('kunjungan/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function add() {
        $data['pasien'] = $this->Pasien_model->get_pasien();
        $data['dokter'] = $this->Dokter_model->get_dokter();
        $data['poli'] = $this->PoliModel->get_all_poli();
        $data['users'] = $this->User_model->get_all_users();

        $this->form_validation->set_rules('id_pasien', 'ID Pasien', 'required');
        $this->form_validation->set_rules('id_dokter', 'ID Dokter', 'required');
        $this->form_validation->set_rules('tanggal_kunjungan', 'Tanggal Kunjungan', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
        $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
        $this->form_validation->set_rules('id_user', 'ID User', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'kunjungan';
            $this->load->view('templates/header', $data);
            $this->load->view('kunjungan/add', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = array(
                'id_pasien' => $this->input->post('id_pasien'),
                'id_dokter' => $this->input->post('id_dokter'),
                'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
                'keluhan' => $this->input->post('keluhan'),
                'id_poli' => $this->input->post('id_poli'),
                'id_user' => $this->input->post('id_user')
            );
            $this->KunjunganModel->insert_kunjungan($data);
            redirect('kunjungan');
        }
    }

    public function edit($id) {
        $data['pasien'] = $this->Pasien_model->get_pasien();
        $data['dokter'] = $this->Dokter_model->get_dokter();
        $data['poli'] = $this->PoliModel->get_all_poli();
        $data['users'] = $this->User_model->get_all_users();
        $data['kunjungan'] = $this->KunjunganModel->get_kunjungan_by_id($id);

        $this->form_validation->set_rules('id_pasien', 'ID Pasien', 'required');
        $this->form_validation->set_rules('id_dokter', 'ID Dokter', 'required');
        $this->form_validation->set_rules('tanggal_kunjungan', 'Tanggal Kunjungan', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
        $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
        $this->form_validation->set_rules('id_user', 'ID User', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'kunjungan';
            $this->load->view('templates/header', $data);
            $this->load->view('kunjungan/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = array(
                'id_pasien' => $this->input->post('id_pasien'),
                'id_dokter' => $this->input->post('id_dokter'),
                'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
                'keluhan' => $this->input->post('keluhan'),
                'id_poli' => $this->input->post('id_poli'),
                'id_user' => $this->input->post('id_user')
            );
            $this->KunjunganModel->update_kunjungan($id, $data);
            redirect('kunjungan');
        }
    }

    public function delete($id) {
        $this->KunjunganModel->delete_kunjungan($id);
        redirect('kunjungan');
    }
}
?>
