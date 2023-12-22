<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->ModelAdmin->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer');
    }
}
