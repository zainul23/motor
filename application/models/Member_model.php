<?php

class Member_model extends CI_model
{
    public function getUser()
    {
        $this->db->select('*');
        $this->db->from('user_login');
        return $this->db->get()->row_array();
    }

    public function getUserName($uname)
    {
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where('uname', $uname);
        return $this->db->get()->row_array();
    }

    public function count_user()
    {
        $this->db->select('COUNT(*) as total_user');
        $this->db->from('user_login');
        return $this->db->get()->row_array();
    }

    public function getEmail($email)
    {
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where('email', $email);
        return $this->db->get()->row_array();
    }

    public function getEmail1($email)
    {
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where('email', $email);
        return $this->db->get()->row_array();
    }

    public function getId()
    {
        $this->db->select_max('id', 'id');
        $query = $this->db->get('user')->row_array();

        $data = $query['id'];
        $kode = (int) substr($data, 0);
        $kode++;

        return $kode;
    }

    public function insert()
    {
        $data = [
            'uname' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => password_hash(($this->input->post('password')), PASSWORD_DEFAULT),
        ];

        $this->db->insert('user_login', $data);
    }

    public function update($id, $kode)
    {
        $data = [
            'kerusakan_kode' => $kode
        ];

        $this->db->update('user', $data, ['id' => $id]);
    }
}
