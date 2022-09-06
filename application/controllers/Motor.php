<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Motor extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Motor';
        $data['merek'] = $this->motor->getMerek();
        $data['seri'] = $this->motor->getSeri();
        $data['seri_list'] = $this->motor->JoinMerekWithSeri();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('motor/index');
        $this->load->view('templates/footer');
    }

    public function add_seri()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('merek_id', 'Merek', 'required');
        $this->form_validation->set_rules('seri', 'Seri', 'required');

        if ($this->form_validation->run() === FALSE) {
            // $this->session->set_flashdata('error', 'field Merek tidak boleh kosong');
            $data['title'] = 'Add Seri';
            $data['merek'] = $this->motor->getMerek();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('motor/form-seri');
            $this->load->view('templates/footer');  
        } else {
            $this->seri->insert();
            $this->session->set_flashdata('success-seri', 'Data Seri Berhasil Disimpan');
            redirect('motor');
        }
    }

    public function insert()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('merek', 'Merek', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', 'field Merek tidak boleh kosong');
            redirect('motor');
        } else {
            $this->motor->insert();
            $this->session->set_flashdata('success', 'data Merek berhasil disimpan !!!');
            redirect('motor');
        }

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
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Merek', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', 'field Merek tidak boleh kosong');
            redirect('motor/ubah/'.$id);
        } else {
            $this->motor->update($id);
            $this->session->set_flashdata('success', 'data Merek berhasil diubah !!!');
            redirect('motor');
        }
    }

    public function delete($id)
    {
        $this->motor->delete($id);
        redirect('motor');
    }

    public function ubah_seri($id)
    {
        $data['title'] = 'Ubah Data Seri';
        $data['merek'] = $this->motor->getMerek();
        $data['seri'] = $this->seri->getSeriId($id);
        // dump($data);
        // exit;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('motor/ubah-seri');
        $this->load->view('templates/footer');
    }

    public function update_seri($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('merek_id', 'Merek', 'required');
        $this->form_validation->set_rules('seri', 'Seri', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', 'field Merek atau Seri tidak boleh kosong');
            redirect('motor/ubah_seri/'.$id);
        } else {
            $this->seri->update($id);
            $this->session->set_flashdata('success', 'data Merek berhasil diubah !!!');
            redirect('motor');
        }
    }

    public function delete_seri($id)
    {
        $this->seri->delete($id);
        redirect('motor');
    }
}
