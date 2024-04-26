<?php
class Transaksi extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('transaksi_model');
        $this->load->model('peminjam_model');
        $this->load->model('buku_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['title'] = 'transaksi';
        $data['transaksi_transaksi'] = $this->transaksi_model->get_transaksi();
		$this->load->view('templates/header', $data);
		$this->load->view('transaksi/index', $data);
		$this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->transaksi_model->delete_transaksi($id);
        redirect('/transaksi/index');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_peminjam', 'Nama Peminjam', 'required');
        $this->form_validation->set_rules('id_buku', 'Nama Buku', 'required');
        $this->form_validation->set_rules('tanggal_pinjam', 'Tanggal Pinjam', 'required');
        $this->form_validation->set_rules('tanggal_kembali', 'Tanggal Kembali', 'required');

        $data = array(
            'title' => 'transaksi',
            'id_peminjam' => '',
            'id_buku' => '',
            'tanggal_pinjam' => '',
            'tanggal_kembali' => '',
        );

        if ($this->form_validation->run() === FALSE)
        {
            $data['id_peminjam'] = $this->input->post('id_peminjam');
            $data['id_buku'] = $this->input->post('id_buku');
            $data['tanggal_pinjam'] = $this->input->post('tanggal_pinjam');
            $data['tanggal_kembali'] = $this->input->post('tanggal_kembali');
            $data['peminjam_peminjam'] = $this->peminjam_model->get_peminjam();
            $data['buku_buku'] = $this->buku_model->get_buku();

            $this->load->view('templates/header', $data);
            $this->load->view('transaksi/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->transaksi_model->set_transaksi();
            redirect('/transaksi/index');
        }
    }

    public function edit($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_peminjam', 'Nama Peminjam', 'required');
        $this->form_validation->set_rules('id_buku', 'Nama Buku', 'required');
        $this->form_validation->set_rules('tanggal_pinjam', 'Tanggal Pinjam', 'required');
        $this->form_validation->set_rules('tanggal_kembali', 'Tanggal Kembali', 'required');

        $data['title'] = 'transaksi';

        if ($this->form_validation->run() === FALSE)
        {
            $data['transaksi'] = $this->transaksi_model->get_transaksi($id);
            $data['peminjam_peminjam'] = $this->peminjam_model->get_peminjam();
            $data['buku_buku'] = $this->buku_model->get_buku();

            $this->load->view('templates/header', $data);
            $this->load->view('transaksi/edit', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $id_peminjam = $this->input->post('id_peminjam');
            $id_buku = $this->input->post('id_buku');
            $tanggal_pinjam = $this->input->post('tanggal_pinjam');
            $tanggal_kembali = $this->input->post('tanggal_kembali');

            $data = array(
                'id_peminjam' => $id_peminjam,
                'id_buku' => $id_buku,
                'tanggal_pinjam' => $tanggal_pinjam,
                'tanggal_kembali' => $tanggal_kembali,
            );

            $this->db->where('id', $id);
            $this->db->update('transaksi', $data);
            redirect('/transaksi/index');
        }
    }
}