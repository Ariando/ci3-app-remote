<?php

class M_nilai extends CI_Model
{

    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where)->row_array();
    }

    public function update()
    {
        $table = 'nilai';

        $data = [
            "kode" => $this->input->post('kode', true),
            "nama" => $this->input->post('nama', true)
            
        ];
        $this->db->where('id_alternatif', $this->input->post('id'));
        $this->db->update($table, $data);
    }

    public function ubah()
    {
        $table = 'nilai';

        $id = $this->input->POST('id_nilai');
        $n1 = $this->input->post('nilai1');
        $n2 = $this->input->post('nilai2');
        $n3 = $this->input->post('nilai3');
        $n4 = $this->input->post('nilai4');
        $n5 = $this->input->post('nilai5');


        $data = array(
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'n4' => $n4,
            'n5' => $n5
        );

        $where =  array(
            'id' => $id
        );

        $this->m_nilai->update($where, $data, $table);
        redirect('alternatif');
    }
}
