<?php
class Transaksi_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
        $this->load->model('buku_model');
        $this->load->model('peminjam_model');
    }

    public function get_transaksi($id = FALSE)
    {
        $this->db->select('transaksi.*, buku.judul AS nama_buku, peminjam.nama AS nama_peminjam');
        $this->db->from('transaksi');
        $this->db->join('buku', 'buku.id = transaksi.id_buku');
        $this->db->join('peminjam', 'peminjam.id = transaksi.id_peminjam');

        if ($id !== FALSE) {
            $this->db->where('transaksi.id', $id);
            $query = $this->db->get();
            return $query->row_array();
        }

        $query = $this->db->get();
        return $query->result_array();
    }


    public function set_transaksi()
    {
        $this->load->helper('url');

        $data = array(
            'id_buku' => $this->input->post('id_buku'),
            'id_peminjam' => $this->input->post('id_peminjam'),
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
        );

        return $this->db->insert('transaksi', $data);
    }

    public function delete_transaksi($id)
    {
        return $this->db->delete('transaksi', array('id' => $id));
    }
}