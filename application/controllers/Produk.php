<?php
class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelBarang');
    }
    public function index()
    {
        $data['barang'] = $this->ModelBarang->tampil_data();
        $this->load->view('tampilan/header');
        $this->load->view('produk/index', $data);
        $this->load->view('tampilan/footer');
    }
}
