<?php

class M_alter extends CI_Model
{

    public function get_alter()
    {
        return $this->db->get('alternatif');
    }

    public function get_nilai()
    {
        return $this->db->get('nilai');
    }

    public function get_join_alter_nilai()
    {
        $this->db->select('*');
        $this->db->from('alternatif');
        $this->db->join('nilai', 'alternatif.id_alternatif = nilai.id_alternatif');
        $query = $this->db->get();
        return $query;
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
