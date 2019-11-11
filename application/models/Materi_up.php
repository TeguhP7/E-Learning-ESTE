<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi_up extends CI_Model
{
    public function insertmateri($table_nama, $data_materi)
    {
        $this->db->insert($table_nama, $data_materi);
        return $data_materi;
    }
}
