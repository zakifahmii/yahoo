<?php

function cek_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('pesan', '<script>alert("Akses Ditolak!, Anda Belum Login")</script>');
    } else {
        $role_id = $ci->session->userdata('role_id');
    }
}