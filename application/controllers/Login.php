<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        cek_sudah_login();
        $this->load->view('login');
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['masuk'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'id' => $row->id,
                    'role' => $row->level,
                    'status' => "online"
                );
                $this->session->set_userdata($params);
                redirect(base_url("Course"));
            } else {
                echo "<script> 
                alert('Login Gagal');
                window.location='" . site_url('login') . "';
                </script>";
            }
        }
    }

    public function insert_guru()
    {
        $this->db->set('role', guru);
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $instansi = $this->input->post('instansi');
        $data = array('username' => $username, 'password' => sha1($password), 'nama' => $nama, 'instansi' => $instansi);
        $insert = $this->insert_m->insertdata('user', $data);
        if ($insert > 0) {
            redirect(base_url('login'));
        } else {
            echo "<script> 
                alert('Gagal Mendaftar');
                window.location='" . site_url('login') . "';
                </script>";
        }
    }

    public function insert_siswa()
    {
        $this->db->set('role', siswa);
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $instansi = $this->input->post('instansi');
        $data = array('username' => $username, 'password' => sha1($password), 'nama' => $nama, 'instansi' => $instansi);
        $insert = $this->insert_m->insertdata('user', $data);
        if ($insert > 0) {
            redirect(base_url('login'));
        } else {
            echo "<script> 
                alert('Gagal Mendaftar');
                window.location='" . site_url('login') . "';
                </script>";
        }
    }

    public function logout()
    {
        $params = array('id', 'role', 'status');
        $this->session->unset_userdata($params);
        redirect(base_url('home'));
    }
}
