<?php

class M_kriteria extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('kriteria');
    }

    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where)->row_array();
    }

    public function update()
    {
        $table = 'kriteria';

        $data = [
            "kode" => $this->input->post('kode', true),
            "nama" => $this->input->post('nama', true),
            "bobot" => $this->input->post('bobot', true),
            "atribut" => $this->input->post('atribut', true)
        ];
        $this->db->where('id_kriteria', $this->input->post('id'));
        $this->db->update($table, $data);
    }

    public function get_nama()
    {
        $this->db->select('nama');
        return $this->db->get('kriteria');
    }

    public function get_bobot()
    {
        $this->db->select('bobot');
        return $this->db->get('kriteria');
    }

    public function get_kode()
    {
        $this->db->select('kode');
        return $this->db->get('kriteria');
    }

    public function get_bobot_max()
    {
        $this->db->select_sum('bobot');
        return $this->db->get('kriteria');
    }

    public function get_kriteria()
    {
        return $this->db->get('kriteria');
    }

}
