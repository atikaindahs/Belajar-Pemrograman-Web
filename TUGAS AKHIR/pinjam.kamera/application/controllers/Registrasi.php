<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user', 'user');
        $this->load->model('M_member', 'member');
    }

    public function index()
    {
        if (!$this->session->userdata('login')) {
            $this->load->view('registrasi/index');
        } else {
            redirect(site_url('dashboard'), 'refresh');
        }
    }

    public function proses()
    {
        $nama     = $this->input->post('nama');
        $alamat   = $this->input->post('alamat');
        $no_hp    = $this->input->post('no_hp');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data_member = [
            'nama'   => $nama,
            'alamat' => $alamat,
            'no_hp'  => $no_hp,
        ];

        $data_user = [
            'username' => $username,
            'pass'     => $password,
            'role'     => 'member'
        ];

        $this->user->insert($data_user);
        $this->member->insert($data_member);
        redirect('Login');
    }
}
