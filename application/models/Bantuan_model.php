<?php
class Bantuan_model extends CI_Model
{

    public function listing()
    {
        $this->db->select('*');
        $this->db->from('bantuan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function receiver()
    {
        $this->db->select('*');
        $this->db->from('bantuan');
        // $this->db->limit(5, 'ASC');
        return $this->db->get()->result_array();
    }



    public function detail($id_bantuan)
    {
        $this->db->select('*');
        $this->db->from('bantuan');
        $this->db->where('id_bantuan', $id_bantuan);
        $this->db->order_by('id_bantuan');
        $query = $this->db->get();
        return $query->row_array();
    }




    public function tambah($data)
    {
        $this->db->insert('bantuan', $data);
    }


    public function edit($data)
    {
        $this->db->where('id_bantuan', $data['id_bantuan']);
        $this->db->update('bantuan', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_bantuan', $data['id_bantuan']);
        $this->db->delete('bantuan', $data);
    }
}
