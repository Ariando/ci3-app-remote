<?php

class M_saw extends CI_Model
{

    public function get_nilai()
    {
        $this->db->select('nilai.*, alternatif.*');
        $this->db->from('alternatif');
        $this->db->join('nilai', 'alternatif.id_alternatif = nilai.id_alternatif');
        $this->db->order_by('nilai.id_alternatif', 'asc');
        return $this->db->get();
    }
}
