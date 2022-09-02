<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{
    public function index()
    {
        if (!empty($this->session->userdata['logged_in'])) {
            $data['title'] = 'Konsultasi';
            $data['merek'] = $this->motor->getMerek();
            $data['seri'] = $this->motor->getSeri();
            // var_dump(base_url());
            $this->load->view('includes/header');
            $this->load->view('konsultasi/index', $data);
            $this->load->view('includes/footer');
        } else {
            redirect('home/login');
        }
        
    }

    public function add()
    {
        $awal = 'G01';

        $this->user->insert();
        redirect('konsultasi/pertanyaan/' . $awal);
    }

    public function pertanyaan($kode)
    {
        if (!empty($this->session->userdata['logged_in'])) {
            $this->db->select('*');
            $this->db->from('rule');
            $this->db->join('gejala', 'gejala.id_gejala = rule.gejala_id');
            $this->db->where('kode_gejala', $kode);
    
            $data['pertanyaan'] = $this->db->get()->row_array();
            $this->load->view('includes/header');
            // $this->load->view('konsultasi/index', $data);
            $this->load->view('konsultasi/pertanyaan', $data);
            $this->load->view('includes/footer');
        } else {
            redirect('home/login');
        }
    }

    public function olah()
    {
        $kode = $this->input->post('jawab');
        $huruf = substr($kode, 0, 1);
        $id = $this->user->getId() - 1;

        if ($huruf == 'K') {
            $this->user->update($id, $kode);
            redirect('konsultasi/hasil');
        } else {
            redirect('konsultasi/pertanyaan/' . $kode);
        }
    }

    public function hasil()
    {
        $data['title'] = 'hasil';
        $id = $this->user->getId() - 1;
        $data['hasil'] = $this->user->getHasil($id);
        $kode = $data['hasil']['kode_kerusakan'];
        $data['gejala'] = $this->gejala->getGejalaKerusakan($kode);
        // dump($data['gejala']);
        // exit;
        $this->load->view('includes/header');
        // $this->load->view('konsultasi/index', $data);
        $this->load->view('konsultasi/hasil', $data);
        $this->load->view('includes/footer');
    }
}
