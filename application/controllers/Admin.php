<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Sistem Pakar';
            $data['user'] = $this->session->userdata('username');
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('admin/index');
            $this->load->view('templates/footer');
        } else {
            $data['title'] = 'Sistem Pakar Diagnosa Kerusakan Motor Injeksi Matic';
            $this->load->view('auth/login', $data);
        }
        
    }
}
