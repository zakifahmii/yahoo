<?php
class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPesanan'); // Memuat model ModelPesanan
        $this->load->model('ModelBarang'); // Memuat model ModelBarang
        $this->load->model('ModelTransaksi');
    }
    public function beli($id_barang)
    {
        $barang = $this->ModelBarang->getBarangById($id_barang);

        if ($barang) {
            $data = array(
                'nama' => 'Nama Pelanggan', // Ganti dengan data pelanggan yang sesuai
                'alamat' => 'Alamat Pelanggan', // Ganti dengan data pelanggan yang sesuai
                'no_hp' => 'Nomor HP Pelanggan', // Ganti dengan data pelanggan yang sesuai
                'nm_produk' => $barang['nama_barang'],
                'harga' => $barang['harga'],
                'subtotal' => $this->input->post('jumlah') * $barang['harga'], // Hitung subtotal
                'fto_produk' => $barang['gambar'],
                'status' => 'Pending',
            );

            $this->ModelTransaksi->simpanTransaksi($data);

            redirect('pesanan/konfirmasi/' . $id_barang);
        } else {
            show_error('Barang tidak ditemukan');
        }
    }

    public function konfirmasi($id_barang = null)
    {
        if (!$id_barang) {
            show_error('ID Barang tidak valid');
        }
        // Logic untuk mengatur data yang akan ditampilkan pada halaman konfirmasi
        $data['judul_halaman'] = 'Halaman Konfirmasi Pesanan';
        $data['barang'] = $this->ModelBarang->getBarangById($id_barang);


        // Memuat view untuk halaman konfirmasi dengan data yang telah disiapkan
        $this->load->view('pesanan/konfirmasi', $data);
    }
}
