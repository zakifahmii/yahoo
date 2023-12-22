<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_Barang extends CI_Controller
{
    public function __construct()
{
    parent::__construct();
    $this->load->model('ModelBarang');
}

    public function index()
    {
        $data['barang'] = $this->ModelBarang->tampil_data()->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_barang= $this->input->post('nama_barang');
        $keterangan = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga      = $this->input->post('harga');
        $stok       = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar != '') {
            // Lanjutkan dengan pengolahan gambar
            $config['upload_path'] = './uploads';
            $config['allowed_types']  = 'jpg|jpeg|png|gif';
        
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal diupload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        
            $data = array(
                'nama_barang' => $nama_barang,
                'keterangan' => $keterangan,
                'kategori' => $kategori,
                'harga' => $harga,
                'stok' => $stok,
                'gambar' => $gambar
            );
        
            $this->ModelBarang->tambah_barang($data, 'tb_barang');
            redirect('data_barang/index');
        }
        
    }
    public function edit($id)
    {
        $where = array('id_brg' =>$id);
        $data['barang'] = $this->ModelBarang->edit_barang($where, 'tb_barang')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('admin/footer');
    }
    public function update()
    {
        $id = $this->input->post('id_brg');
        $nama_barang = $this->input->post('nama_barang');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $data = array(
            'nama_barang' => $nama_barang,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
        );

        $where = array(
            'id_brg' => $id
        );

        $this->ModelBarang->update_data($where, $data, 'tb_barang');
        redirect('data_barang');
    }

    public function hapus($id)
    {
        $where = array('id_brg' => $id);
        $this->ModelBarang->hapus_data($where, 'tb_barang');
        redirect('data_barang');
    }

}
