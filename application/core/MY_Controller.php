<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_login(); // Panggil fungsi cek_login di sini
    }

    private function cek_login()
    {
        // Logika cek login Anda di sini
        // Contoh: jika belum login, redirect ke halaman login
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }
}
