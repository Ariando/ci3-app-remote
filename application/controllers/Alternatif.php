<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'DATA ALTERNATIF';
        $data['alternatif'] = $this->m_alter->get_alter()->result();
        $data['nilai'] = $this->m_alter->get_nilai()->result();
        $data['join_alter_nilai'] = $this->m_alter->get_join_alter_nilai()->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('alternatif/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function edit($id)
    {
        $data['title'] = 'EDIT DATA ALTERNATIF';

        $table = 'nilai';
        $where = array('id_nilai' => $id);
        $data['nilai'] = $this->m_alter->edit($where, $table)->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('alternatif/e_alter.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function update()
    {
        $table = 'nilai';

        $id = $this->input->POST('id_nilai');
        $nilai1 = $this->input->POST('nilai1');
        $nilai2 = $this->input->POST('nilai2');
        $nilai3 = $this->input->POST('nilai3');
        $nilai4 = $this->input->POST('nilai4');
        $nilai5 = $this->input->POST('nilai5');

        $data = array(
            'nilai1' => $nilai1,
            'nilai2' => $nilai2,
            'nilai3' => $nilai3,
            'nilai4' => $nilai4,
            'nilai5' => $nilai5
        );

        $where =  array('id_nilai' => $id);

        $this->m_alter->update($where, $data, $table);
        redirect('alternatif');
    }

    public function nilai($id)
    {
        $data['title'] = 'INPUT DATA NILAI';

        $table = 'nilai';
        $where = array('id_nilai' => $id);

        $wherea = array('id_alternatif' => $id);
        $tablea = 'alternatif';

        $data['alternatif'] = $this->m_alter->getnamakode($wherea, $tablea);
        $data['nilai'] = $this->m_nilai->edit($where, $table);


        $this->load->view('templates/header.php', $data);
        $this->load->view('nilai/index.php', $data);
        $this->load->view('templates/footer.php');
    }
}
