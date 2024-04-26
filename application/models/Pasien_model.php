<?php
class Pasien_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_pasien($id_pasien = FALSE)
    {
        if ($id_pasien === FALSE)
        {
            $query = $this->db->get('pasien');
            return $query->result_array();
        }

        $query = $this->db->get_where('pasien', array('id_pasien' => $id_pasien));
        return $query->row_array();
    }

    public function set_pasien()
    {
        $this->load->helper('url');

        $data = array(
            'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'id_user' => $this->input->post('id_user'),
        );

        return $this->db->insert('pasien', $data);
    }
}