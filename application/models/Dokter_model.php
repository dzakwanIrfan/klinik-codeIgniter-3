<?php
class Dokter_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_dokter($id_dokter = FALSE)
    {
        if ($id_dokter === FALSE)
        {
            $query = $this->db->get('dokter');
            return $query->result_array();
        }

        $query = $this->db->get_where('dokter', array('id_dokter' => $id_dokter));
        return $query->row_array();
    }

    public function set_dokter()
    {
        $this->load->helper('url');

        $data = array(
            'nama_dokter' => $this->input->post('nama_dokter'),
        );

        return $this->db->insert('dokter', $data);
    }

    public function delete_dokter($id_dokter)
    {
        return $this->db->delete('dokter', array('id_dokter' => $id_dokter));
    }
}