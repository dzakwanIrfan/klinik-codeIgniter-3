<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KunjunganModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get all kunjungan
    public function get_all_kunjungan() {
        $this->db->select('kunjungan.*, pasien.nama AS nama_pasien, dokter.nama_dokter, poli.nama_poli, users.username AS nama_user');
        $this->db->from('kunjungan');
        $this->db->join('pasien', 'pasien.id_pasien = kunjungan.id_pasien');
        $this->db->join('dokter', 'dokter.id_dokter = kunjungan.id_dokter');
        $this->db->join('poli', 'poli.id_poli = kunjungan.id_poli');
        $this->db->join('users', 'users.id_user = kunjungan.id_user');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Get kunjungan by id
    public function get_kunjungan_by_id($id) {
        return $this->db->get_where('kunjungan', array('id_kunjungan' => $id))->row_array();
    }

    // Insert kunjungan
    public function insert_kunjungan($data) {
        $this->db->insert('kunjungan', $data);
        return $this->db->insert_id();
    }

    // Update kunjungan
    public function update_kunjungan($id, $data) {
        $this->db->where('id_kunjungan', $id);
        return $this->db->update('kunjungan', $data);
    }

    // Delete kunjungan
    public function delete_kunjungan($id) {
        return $this->db->delete('kunjungan', array('id_kunjungan' => $id));
    }

}
?>
