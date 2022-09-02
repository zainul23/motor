<?php

class Seri_model extends CI_model
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

    public function getSeriId($id)
    {
        return $this->db->get_where('seri', array('id' => $id))->row_array();
    }

    public function insert()
    {
        $data = [
            'nama' => $this->input->post('seri'),
            'merek_id' => $this->input->post('merek_id')
        ];

        $this->db->insert('seri', $data);
    }

    public function delete($id)
    {
        $this->db->delete('seri', ['id' => $id]);
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->input->post('seri'),
            'merek_id' => $this->input->post('merek_id')
        ];

        $this->db->update('seri', $data, ['id' => $id]);
    }
}
