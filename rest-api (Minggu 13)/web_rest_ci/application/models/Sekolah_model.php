<?php

class Sekolah_model extends CI_Model
{
    public function getSekolah($id = null)
    {
        if ($id == null)
        {
            return $this->db->get('sekolah')->result_array();
        } else
            {
                return $this->db->get_where('sekolah', ['id' => $id]) -> result_array();
            }
    }

    public function deleteSekolah($id)
    {
        $this->db->delete('sekolah', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createSekolah($data)
    {
        $this->db->insert('sekolah', $data);
        return $this->db->affected_rows();
    }

    public function updateSekolah($data, $id)
    {
        $this->db->update('sekolah', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}