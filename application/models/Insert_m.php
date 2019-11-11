<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insert_m extends CI_Model
{
    public function insertdata($table_nama, $data)
    {
        $insert = $this->db->insert($table_nama, $data);
        return $data;
    }
}
