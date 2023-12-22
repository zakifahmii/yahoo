<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    // Controller
    public function beranda()
    {
        $this->load->model('ModelBarang'); // Memuat model ModelBarang
        $data['barang'] = $this->ModelBarang->tampil_data()->result_array(); // Kirim data barang ke view beranda.php
    }

    public function index()
    {
        $this->load->view('tampilan/header1');
        $this->load->view('beranda/index');
        $this->load->view('tampilan/footer');
    }
    // Controller
}
