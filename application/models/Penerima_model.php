<?php
class Penerima_model extends CI_Model
{
    public function listing()
    {
        $this->db->select('penerima.*,
                            bantuan.nama_bantuan');
        $this->db->from('penerima');
        $this->db->join('bantuan', 'bantuan.id_bantuan = penerima.id_bantuan', 'LEFT');
        $this->db->order_by('id_penerima');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function detail($id_penerima)
    {
        $this->db->select('penerima.*,
        bantuan.nama_bantuan');
        $this->db->from('penerima');
        $this->db->where('id_penerima', $id_penerima);
        $this->db->join('bantuan', 'bantuan.id_bantuan = penerima.id_bantuan', 'LEFT');
        $this->db->order_by('id_penerima');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function tambah($data)
    {
        $this->db->insert('penerima', $data);
    }

    public function edit($data)
    {

        $this->db->where('id_penerima', $data['id_penerima']);
        $this->db->update('penerima', $data);
    }

    public function tahap($tahap)
    {

        $this->db->where('id_tahap', $tahap['id_tahap']);
        $this->db->update('tahap', $tahap);
    }

    public function delete($data)
    {
        $this->db->where('id_penerima', $data['id_penerima']);
        $this->db->delete('penerima', $data);
    }
}
