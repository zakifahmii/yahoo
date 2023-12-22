<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $username = $this->session->userdata('username');
        $nama = $this->session->userdata('nama');

        $data['user_data'] = $this->ModelUser->getDataByUsername($username);
        $data['user_data'] = $this->ModelUser->getDataByUsername($nama);
        $this->load->view('tampilan/header', $data); // Mengirimkan $data ke header
        $this->load->view('user/beranda', $data); // Mengirimkan $data ke view user/beranda
        $this->load->view('tampilan/footer');
    }
}
