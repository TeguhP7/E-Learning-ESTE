<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampil_materi extends CI_Controller
{
    function get_data_by_id()
    {
        $this->db->select('*');
        $this->db->from('upload_guru');
        $this->db->where('id_kelas', $_POST['kode_id']);
        $query = $this->db->get('materi');
        return $query;
        echo $query;
    }

    // function get_data_by_id($materi)
    // {
    //     $materi = $this->db->get_where('upload_guru', ['id_kelas'])->row_array();
    //     return $materi;
    //     echo $materi;
    // }

    // function get_mhs_by_id($id_kelas)
    // {
    //     $id_kelas = $this->db->select('id_kelas');
    //     $koneksi = connect_to_db();
    //     $sql = "SELECT * FROM upload_guru WHERE id_kelas =" . $id_kelas;
    //     $query = mysqli_query($koneksi, $sql);
    //     return mysqli_fetch_array($query);
    //     echo mysqli_fetch_array($query);
    // }
}
