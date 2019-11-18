<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{

    public function upload()
    {
        $this->load->model('materi_up');
        $id_kelas = $this->input->post('kode_id');
        $nama_kelas = $this->input->post('kelas');
        $materi = $this->input->post('materi');
        $video = $this->input->post('video');
        $dokumen = $this->input->post('dokumen');
        $data_materi = array('id_kelas' => $id_kelas, 'nama_kelas' => $nama_kelas, 'materi' => $materi, 'video' => $video, 'dokumen' => $dokumen);
        $insertt = $this->materi_up->insertmateri('upload_guru', $data_materi);
        if ($insertt > 0) {
            echo "<script> 
                alert('Berhasil Memasukkan Data');
                window.location='" . site_url('courseindex') . "';
                </script>";
        } else {
            echo "<script> 
                alert('Gagal Memasukkan Data');
                window.location='" . site_url('courseindex') . "';
                </script>";
        }
    }
}
