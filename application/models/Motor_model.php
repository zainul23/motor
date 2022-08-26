<?php

class Motor_model extends CI_model
{
    public function getMerek()
    {
        return $this->db->get('merek')->result_array();
    }

    public function getSeri()
    {
        return $this->db->get('seri')->result_array();
    }

    // public function insert($parameter)
    // {
    //     if ($parameter == 1) {
    //     } else {
    //     }
    // }

    public function getMotorId($id)
    {
        return $this->db->get_where('merek', array('id' => $id))->row_array();
    }

    public function insert()
    {
        $data = [
            'nama' => $this->input->post('merek')
        ];

        $this->db->insert('merek', $data);
    }

    public function delete($id)
    {
        $this->db->delete('merek', ['id' => $id]);
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->input->post('nama')
        ];

        $this->db->update('merek', $data, ['id' => $id]);
    }
}
