<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rule extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Data Rule';
            $data['rule'] = $this->rule->getAllRule();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('rule/index');
            $this->load->view('templates/footer');
        } else {
            $data['title'] = 'Sistem Pakar Diagnosa Kerusakan Motor Injeksi Matic';
            $this->load->view('auth/login', $data);
        }
    }

    public function tambah()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Tambah Data Rule';
            $data['gejala'] = $this->gejala->getGejala();
            $data['rule'] = $this->rule->getRule();
            $data['kerusakan'] = $this->kerusakan->getKerusakan();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('rule/tambah');
            $this->load->view('templates/footer');
        } else {
            $data['title'] = 'Sistem Pakar Diagnosa Kerusakan Motor Injeksi Matic';
            $this->load->view('auth/login', $data);
        }
    }

    public function ubah($id)
    {
        if ($this->session->userdata('username')) {
            $data['rule'] = $this->rule->getAllRuleId($id);
            $data['title'] = 'Ubah Data Rule';
            $data['gejala'] = $this->gejala->getGejala();
            $data['kerusakan'] = $this->kerusakan->getKerusakan();

            $check = $data['rule'] = $this->rule->getAllRuleId($id);
            // dump($check);
            // exit;
            $kode_parent = $check['parent'];
            $kode_ya = $check['ya'];
            $kode_tidak = $check['tidak'];

            $data['parent'] = $this->rule->getDataParent($kode_parent);
            $data['ya'] = $this->rule->getDataYa($kode_ya);
            $data['tidak'] = $this->rule->getDataTidak($kode_tidak);
            // dump($kode_ya);
            // dump($data['ya']);
            // exit;
            // var_dump($check);
            // var_dump($data['parent']);
            // exit;
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('rule/ubah');
            $this->load->view('templates/footer');
        } else {
            $data['title'] = 'Sistem Pakar Diagnosa Kerusakan Motor Injeksi Matic';
            $this->load->view('auth/login', $data);
        }
    }

    public function insert()
    {

        $this->rule->insert();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil disimpan!</div>');
        redirect('rule');
    }

    public function update($id)
    {
        $this->rule->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil diubah!</div>');
        redirect('rule');
    }

    public function delete($id)
    {
        $this->rule->delete($id);
        redirect('rule');
    }
}
