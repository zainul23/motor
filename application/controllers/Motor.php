<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Motor extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Motor';
        $data['merek'] = $this->motor->getMerek();
        $data['seri'] = $this->motor->getSeri();
        // $data= array('asas','dss');
        // var_dump($data);
        // exit;
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('motor/index');
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $this->motor->insert();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show col-sm-2"
        role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>Data berhasil disimpan!</div>');
        redirect('motor');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Data Gejala';
        $data['motor'] = $this->motor->getMotorId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('motor/ubah');
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $this->motor->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success bg-success text-white border-0 fade show col-sm-12"
        role="alert"> Data berhasil diubah!</div>');
        redirect('motor');
    }

    public function delete($id)
    {
        $this->motor->delete($id);
        redirect('motor');
    }
}
