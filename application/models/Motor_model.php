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

    public function JoinMerekWithSeri()
    {
        $query = $this->db->query("
            SELECT m.nama as merek, s.nama, s.id
            FROM merek as m
            INNER JOIN seri as s ON m.id = s.merek_id
        ")->result_array();
        return $query;
    }

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
