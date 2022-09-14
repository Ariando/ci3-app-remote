<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Topsis extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'PERHITUNGAN TOPSIS';

        $this->load->view('templates/header.php', $data);
        $this->load->view('topsis/index.php', $data);
        $this->load->view('templates/footer.php');
    }
}
