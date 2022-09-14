<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function index()
    {
        $data['kriteria'] = $this->m_kriteria->tampil_data()->result();
        $data['title'] = 'KRITERIA';

        $this->load->view('templates/header.php', $data);
        $this->load->view('kriteria/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function edit($id)
    {
        $data['title'] = 'UBAH DATA KRITERIA';

        $table = 'kriteria';
        $where = array('id_kriteria' => $id);

        $data['kriteria'] = $this->m_kriteria->edit($where, $table);

        $this->load->view('templates/header.php', $data);
        $this->load->view('kriteria/ubah.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function update()
    {
        
        $this->m_kriteria->update();
        redirect('kriteria');
    }
}
