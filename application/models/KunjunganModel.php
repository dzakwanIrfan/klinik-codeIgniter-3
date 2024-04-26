<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KunjunganModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get all kunjungan
    public function get_all_kunjungan() {
        return $this->db->get('kunjungan')->result_array();
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
