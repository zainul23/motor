<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('home/index');
        $this->load->view('includes/footer');
    }

    public function about()
    {
        $this->load->view('includes/header');
        $this->load->view('home/about');
        $this->load->view('includes/footer');   
    }

    public function register()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_checkingUnameReg');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_checkingEmailReg');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('re-password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE) {
            // $this->session->set_flashdata('error', 'field Merek tidak boleh kosong');
            $this->load->view('includes/header');
            $this->load->view('user/register');
            $this->load->view('includes/footer');      
        } else {
            $this->member->insert();
            $this->session->set_flashdata('success', 'Success created account');
            redirect('home/login');
        }
        
    }

    public function checkingUnameReg($username){
        $user = $this->member->getUserName($username);

        if(isset($user)){
            $this->form_validation->set_message('checkingUnameReg','Username has already been taken');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkingEmailReg($email){
        $user = $this->member->getEmail($email);

        if(isset($user)){
            $this->form_validation->set_message('checkingEmailReg','Email has already registered');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function login()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() === FALSE) {
            // $this->session->set_flashdata('error', 'field Merek tidak boleh kosong');
            $this->load->view('includes/header');
            $this->load->view('user/login');
            $this->load->view('includes/footer');      
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password', TRUE);
            // $where['user_username'] = $this->input->post('username', TRUE);

			// $user = $this->user->get_by($where);
            $user = $this->member->getEmail1($email);
            // dump(count($user));
            // exit;
            //check 
            if ($user == NULL) {
                // empty result
                $this->session->set_flashdata('error', 'Email Tidak Terdaftar');
                $this->load->view('includes/header');
                $this->load->view('user/login');
                $this->load->view('includes/footer'); 
            } else {
                if (password_verify($password, $user['password'])) {
                    $id = $user['id'];
                    $nama = $user['nama'];
                    $username = $user['uname'];
                    do_login($id, $username,[
                        'level' => 'user',
                        'name' => $nama
                    ]);
                    // if ($this->session->userdata('uType') == 4) {
                    // dump($this->session->userdata);
                    // exit;
                    // no error
                    redirect_no_cache(base_url('home'));
                } else {
                    $this->session->set_flashdata('error', 'Password atau Email yang anda input Salah');
                    $this->load->view('includes/header');
                    $this->load->view('user/login');
                    $this->load->view('includes/footer'); 
                }
            }
        }
    }

    public function logout(){
        // $this->session->unset_userdata('UId');
        // $this->session->unset_userdata('uType');
        $this->session->sess_destroy();
        redirect('home', 'refresh');
    }
}