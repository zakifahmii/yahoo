<?php
// Di dalam folder application/models/ModelTransaksi.php

class ModelTransaksi extends CI_Model
{

    public function simpanTransaksi($data)
    {
        // Simpan transaksi ke dalam database
        $this->db->insert('transaksi', $data);
        return $this->db->insert_id(); // Mengembalikan ID dari transaksi yang baru disimpan
    }

    public function ubahStatusTransaksi($id_transaksi, $status)
    {
        // Ubah status transaksi di dalam database berdasarkan ID transaksi
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi', array('status' => $status));
    }

    public function getRiwayatTransaksi($id_pelanggan)
    {
        // Mendapatkan riwayat transaksi dari database berdasarkan ID pelanggan
        $this->db->where('id_pelanggan', $id_pelanggan);
        $query = $this->db->get('transaksi');
        return $query->result_array(); // Mengembalikan array dari riwayat transaksi
    }
}
