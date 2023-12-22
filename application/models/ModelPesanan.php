<?php
class ModelPesanan extends CI_Model
{
    public function simpanPembelian($data)
    {
        $this->db->insert('tb_pesanan', $data);
    }
    public function tampil_data()
    {
        return $this->db->get('tb_barang')->result();
    }
}
