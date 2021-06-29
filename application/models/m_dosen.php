<?php
class m_dosen extends CI_Model
{
    public function getAllDosen()
    {
        return $this->db->get('tbl_dosen')->result_array();
    }

    function tambah($data)
    {
        $this->db->insert('tbl_dosen', $data);
        return TRUE;
    }

    public function edit($id)
    {
        $data = [
            "NIP" => $this->input->post('nip'),
            "Nama" => $this->input->post('name'),
            "Alamat" => $this->input->post('alamat'),
            "TanggalLahir" => $this->input->post('tgllahir'),
            "NomorHP" => $this->input->post('nohp'),
        ];
        $this->db->where('NIP', $id);
        $this->db->update('tbl_dosen', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('tbl_dosen', array('NIP' => $id));
    }
}
