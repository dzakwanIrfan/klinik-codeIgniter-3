<?php
class Pasien extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pasien_model');
        $this->load->helper('url_helper');
        $this->load->model('User_model');
    }
    public function index()
    {
        $data['title'] = 'pasien';
        $data['pasien_pasien'] = $this->pasien_model->get_pasien();
		$this->load->view('templates/header', $data);
		$this->load->view('pasien/index');
		$this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('id_user', 'Id User', 'required');

        $data = array(
            'title' => 'pasien',
            'nama' => '',
            'tanggal_lahir' => '',
            'alamt' => '',
            'id_user' => ''
        );

        if ($this->form_validation->run() === FALSE)
        {
            $data['nama'] = $this->input->post('nama');
            $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
            $data['alamat'] = $this->input->post('alamat');
            $data['users'] = $this->User_model->get_all_users();

            $this->load->view('templates/header', $data);
            $this->load->view('pasien/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->pasien_model->set_pasien();
            redirect('/pasien/index');
        }
    }

    public function delete($id)
    {
        $this->db->delete('pasien', array('id_pasien' => $id));
        redirect('/pasien/index');
    }

    public function edit($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('id_user', 'Id User', 'required');

        $data = array(
            'title' => 'pasien',
            'nama' => '',
            'tanggal_lahir' => '',
            'alamt' => '',
            'id_user' => ''
        );

        if ($this->form_validation->run() === FALSE)
        {
            $data['pasien'] = $this->pasien_model->get_pasien($id);
            $data['users'] = $this->User_model->get_all_users();

            $this->load->view('templates/header', $data);
            $this->load->view('pasien/edit', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $id_user = $this->input->post('id_user');

            $data = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'tanggal_lahir' => $tanggal_lahir,
                'id_user' => $id_user,
            );

            $this->db->where('id_pasien', $id);
            $this->db->update('pasien', $data);
            redirect('/pasien/index');
        }
    }
}