<?php

class M_mhs extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('mhs');
    }

    public function input_data($data)
    {
        $this->db->insert('mhs', $data);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
