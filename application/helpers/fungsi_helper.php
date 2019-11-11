<?php

function cek_sudah_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id', 'status');
    if ($user_session) {
        redirect('course');
    }
}

function cek_belum_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id', 'status');
    if (!$user_session) {
        redirect('login/index');
    }
}
