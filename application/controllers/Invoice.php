<?php

class Invoice extends CI_Controller{
    public function index()
    {
        $this->load->model('ModelInvoice');
        $data['invoice'] = $this->ModelInvoice->tampil_data();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('admin/footer');  
    }
    public function detail($id_invoice)
    {
        $data['invoice'] = $this->ModelInvoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->ModelInvoice->ambil_id_pesanan($id_invoice);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('admin/footer');
    }
    
}