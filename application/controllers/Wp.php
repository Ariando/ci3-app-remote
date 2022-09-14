<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wp extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'PERHITUNGAN WP';
		$data['alternatif'] = $this->m_alter->get_nilai()->result();
		$data['nama_k'] = $this->m_kriteria->get_nama()->result();
		$data['kode_k'] = $this->m_kriteria->get_kode()->result();
		$data['bobot'] = $this->m_kriteria->get_bobot()->result();
		$data['bobot_max'] = $this->m_kriteria->get_bobot_max()->result();
		$data['nilai'] = $this->m_wp->get_nilai()->result_array();
		$data['kriteria'] = $this->m_kriteria->get_kriteria()->result();

		$this->load->view('templates/header.php', $data);
		$this->load->view('wp/index.php', $data);
		$this->load->view('templates/footer.php');
	}
}
