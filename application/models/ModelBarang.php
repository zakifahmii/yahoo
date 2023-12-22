<?php

class ModelBarang extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_barang')->result();
    }

    public function getItemByID($id)
    {
        return $this->db->get_where('tb_barang', array('id_brg' => $id))->row_array();
    }
    // Di dalam model ModelBarang
    public function getBarangById($id_brg)
    {
        return $this->db->get_where('tb_barang', ['id_brg' => $id_brg])->row_array();
    }

    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
