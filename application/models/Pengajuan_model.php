<?php
class Pengajuan_model extends CI_Model
{
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->order_by('id_pengajuan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambah($data)
    {
        $this->db->insert('pengajuan', $data);
    }

    public function edit($data)
    {

        $this->db->where('id_user', $data['id_user']);
        $this->db->update('pengajuan', $data);
    }
    public function detail($id_pengajuan)
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->where('id_pengajuan', $id_pengajuan);
        $this->db->order_by('id_pengajuan');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function delete($data)
    {
        $this->db->where('id_pengajuan', $data['id_pengajuan']);
        $this->db->delete('pengajuan', $data);
    }

    public function verify($data)
    {

        $this->db->where('id_pengajuan', $data['id_pengajuan']);
        $this->db->update('pengajuan', $data);
    }

    public function reject($data)
    {

        $this->db->where('id_pengajuan', $data['id_pengajuan']);
        $this->db->update('pengajuan', $data);
    }

    public function process($data)
    {

        $this->db->where('id_pengajuan', $data['id_pengajuan']);
        $this->db->update('pengajuan', $data);
    }




    public function get_akun($data)
    {

        $this->sesi = $this->session->userdata('email');
        $this->db->where('email', $this->sesi);
        return $this->db->get('user');
    }

    public function update_akun()
    {

        $this->db->set('status', 1);
        $this->db->where('email', $this->session->userdata('email'));
        return $this->db->update('user');
    }

    public function set_zero()
    {

        $this->db->set('status', 0);
        $this->db->where('email', $this->session->userdata('email'));
        return $this->db->update('user');
    }

    public function set_zero_admin()
    {

        $this->db->set('status', 0);
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->update('user');
    }
}
