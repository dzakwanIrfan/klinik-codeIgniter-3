<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PoliModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Get all poli
    public function get_all_poli() {
        return $this->db->get('poli')->result_array();
    }

    // Get poli by id
    public function get_poli_by_id($id) {
        return $this->db->get_where('poli', array('id_poli' => $id))->row_array();
    }

    // Insert poli
    public function insert_poli($data) {
        $this->db->insert('poli', $data);
        return $this->db->insert_id();
    }

    // Update poli
    public function update_poli($id, $data) {
        $this->db->where('id_poli', $id);
        return $this->db->update('poli', $data);
    }

    // Delete poli
    public function delete_poli($id) {
        return $this->db->delete('poli', array('id_poli' => $id));
    }

}
?>
