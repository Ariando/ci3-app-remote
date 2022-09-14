<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saw extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'PERHITUNGAN SAW';

		$data['alternatif'] = $this->m_alter->get_nilai()->result();
		$data['nama_k'] = $this->m_kriteria->get_nama()->result();
		$data['kode_k'] = $this->m_kriteria->get_kode()->result();
		$data['nilai'] = $this->m_saw->get_nilai()->result_array();
		$data['kriteria'] = $this->m_kriteria->get_kriteria()->result();

		$this->load->view('templates/header.php', $data);
		$this->load->view('saw/index.php', $data);
		$this->load->view('templates/footer.php');
	}
}
