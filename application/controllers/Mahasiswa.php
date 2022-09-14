<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $data['mahasiswa'] =  $this->m_mhs->tampil_data()->result();
        $data['title'] = 'DATA MAHASISWA';

        $this->load->view('templates/header.php', $data);
        $this->load->view('mahasiswa/v_mhs.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function tambah_data()
    {
        $nama = $this->input->POST('nama');
        $nim = $this->input->POST('nim');
        $alamat = $this->input->POST('alamat');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'alamat' => $alamat,
        );

        $this->m_mhs->input_data($data, 'mhs');
        redirect('mahasiswa');
    }

    public function hapus($id)
    {
        $table = 'mhs';
        $where = array('id' => $id);
        $this->m_mhs->hapus($where, $table);
        redirect('mahasiswa');
    }

    public function edit($id)
    {
        $data['title'] = 'UBAH DATA MAHASISWA';

        $table = 'mhs';
        $where = array('id' => $id);
        $data['mahasiswa'] = $this->m_mhs->edit($where, $table)->result();

        $this->load->view('templates/header.php', $data);
        $this->load->view('mahasiswa/e_mhs.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function update()
    {
        $table = 'mhs';

        $id = $this->input->POST('id');
        $nama = $this->input->POST('nama');
        $nim = $this->input->POST('nim');
        $alamat = $this->input->POST('alamat');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'alamat' => $alamat
        );

        $where =  array(
            'id' => $id
        );

        $this->m_mhs->update($where, $data, $table);
        redirect('mahasiswa');
    }

    public function detail()
    {
        $data['title'] = 'DETAIL MAHASISWA';
        
        $this->load->view('templates/header.php', $data);
        $this->load->view('mahasiswa/d_mhs.php');
        $this->load->view('templates/footer.php');
    }
}
