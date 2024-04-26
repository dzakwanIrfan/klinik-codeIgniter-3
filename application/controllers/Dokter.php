<?php
class Dokter extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dokter_model');
        $this->load->helper('url_helper');
    }
    public function index()
    {
        $data['title'] = 'dokter';
        $data['dokter_dokter'] = $this->dokter_model->get_dokter();
		$this->load->view('templates/header', $data);
		$this->load->view('dokter/index');
		$this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_dokter', 'Nama dokter', 'required');

        $data = array(
            'title' => 'dokter',
            'nama_dokter' => '',
        );

        if ($this->form_validation->run() === FALSE)
        {
            $data['nama_dokter'] = $this->input->post('nama_dokter');

            $this->load->view('templates/header', $data);
            $this->load->view('dokter/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->dokter_model->set_dokter();
            redirect('/dokter/index');
        }
    }

    public function delete($id_dokter)
    {
        $this->dokter_model->delete_dokter($id_dokter);
        redirect('/dokter/index');
    }

    public function edit($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required');

        $data['title'] = 'dokter';

        if ($this->form_validation->run() === FALSE)
        {
            $data['dokter'] = $this->dokter_model->get_dokter($id);

            $this->load->view('templates/header', $data);
            $this->load->view('dokter/edit', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $nama_dokter = $this->input->post('nama_dokter');

            $data = array(
                'nama_dokter' => $nama_dokter,
            );

            $this->db->where('id_dokter', $id);
            $this->db->update('dokter', $data);
            redirect('/dokter/index');
        }
    }
}