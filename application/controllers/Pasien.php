<?php
class Pasien extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pasien_model');
        $this->load->helper('url_helper');
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
        $this->db->delete('pasien', array('id' => $id));
        redirect('/pasien/index');
    }

    public function edit($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('judul', 'Judul pasien', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang pasien', 'required');
        $this->form_validation->set_rules('isbn', 'ISBN pasien', 'required|min_length[13]|numeric');

        $data = array(
            'title' => 'pasien',
            'judul' => '',
            'pengarang' => '',
            'isbn' => ''
        );

        if ($this->form_validation->run() === FALSE)
        {
            $data['pasien'] = $this->pasien_model->get_pasien($id);

            $this->load->view('templates/header', $data);
            $this->load->view('pasien/edit', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $judul = $this->input->post('judul');
            $pengarang = $this->input->post('pengarang');
            $isbn = $this->input->post('isbn');

            $data = array(
                'judul' => $judul,
                'pengarang' => $pengarang,
                'isbn' => $isbn,
            );

            $this->db->where('id', $id);
            $this->db->update('pasien', $data);
            redirect('/pasien/index');
        }
    }
}