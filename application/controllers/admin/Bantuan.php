<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bantuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login->check();
        $user = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        if ($user['role_id'] == 2) {
            $this->session->set_flashdata('sukses', '<div class="alert alert-danger" role="alert">You dont have permission to access this page !</div>');
            redirect('admin/user');
        }

        $this->load->model('bantuan_model');
    }
    public function index()
    {

        $bantuan = $this->bantuan_model->listing();

        //we must validation form first


        $this->form_validation->set_rules(
            'nama_bantuan',
            'Nama Bantuan',
            'required|is_unique[bantuan.nama_bantuan]',

            array(
                'required'    => '%s This fill is requred!',
                'is_unique'    => '%s <strong>' . $this->input->post('nama_bantuan') .
                    '</strong> is exist.Try another one!'
            )
        );




        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'title' => 'Daftar Bantuan  (' . count($bantuan) . ')',
                'bantuan' => $bantuan,
                'isi' => 'admin/bantuan/list'
            );

            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;

            $data = array(
                'nama_bantuan'    => $i->post('nama_bantuan')
            );
            $this->bantuan_model->tambah($data);
            $this->session->set_flashdata('flash', 'Added');
            // $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">Data has been succesfully added!</div>');
            redirect(base_url('admin/bantuan'), 'refresh');
        }
    }



    public function edit($id_bantuan)
    {
        $bantuan = $this->bantuan_model->detail($id_bantuan);

        //we must validation form first
        //the form must validation first be wethe detail 



        $this->form_validation->set_rules(
            'nama_bantuan',
            'Nama bantuan',
            'required',
            array('required'    => '%s harus diisi')
        );






        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'title' => 'Edit bantuan',
                'bantuan' => $bantuan,
                'isi' => 'admin/bantuan/edit'
            );

            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = array(
                'id_bantuan'    => $id_bantuan,
                'nama_bantuan'    => $i->post('nama_bantuan'),

            );
            $this->bantuan_model->edit($data);
            $this->session->set_flashdata('flash', 'Changed');
            // $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">Data has been succesfully updated!</div>');
            redirect(base_url('admin/bantuan'), 'refresh');
        }
    }

    public function delete($id_bantuan)
    {
        $this->check_login->check();
        $bantuan = $this->bantuan_model->detail($id_bantuan);
        $data = array('id_bantuan'    => $bantuan['id_bantuan']);
        $this->bantuan_model->delete($data);
        $this->session->set_flashdata('flash', 'Deleted');
        // $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">Data was succesfully deleted!</div>');
        redirect('admin/bantuan');
    }
}
