<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerima extends CI_Controller
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
        $this->load->model('penerima_model');
        $this->load->model('bantuan_model');
    }

    //listing data user
    public function index()
    {

        $user = $this->penerima_model->listing();
        $data = array(
            'title' => 'Data Penerima(' . count($user) . ')',
            'user' => $user,
            'isi' => 'admin/penerima/list'
        );

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function tambah()
    {

        $bantuan = $this->bantuan_model->listing();
        $this->form_validation->set_rules(
            'id_bantuan',
            'Jenis Bantuan',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );



        $this->form_validation->set_rules(
            'kk',
            'Kartu Keluarga',
            'required|is_unique[penerima.kk]',

            array(
                'required'    => '%s is requred!',
                'is_unique'    => '%s <strong>' . $this->input->post('kk') .
                    '</strong> is exist.Try another one!'
            )
        );



        $this->form_validation->set_rules(
            'nik',
            'NIK',
            'required|is_unique[penerima.nik]|min_length[16]|max_length[16]',

            array(
                'required'    => '%s is requred!',
                'is_unique'    => '%s <strong>' . $this->input->post('nik') .
                    '</strong> is exist.Try another one!',
                'min_length'    => '%s too short!',
                'max_length'    => '%s max 16 characters!'
            )
        );


        $this->form_validation->set_rules(
            'nama_penerima',
            'Nama Penerima',
            'required|is_unique[penerima.nama_penerima]',

            array(
                'required'    => '%s is requred!',
                'is_unique'    => '%s <strong>' . $this->input->post('nama_penerima') .
                    '</strong> is exist.Try another one!'
            )
        );

        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );


        $this->form_validation->set_rules(
            'jk',
            'Jenis Kelamin',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );

        $this->form_validation->set_rules(
            'pekerjaan',
            'Pekerjaan',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );

        $this->form_validation->set_rules(
            'tgl_penerima',
            'Tanggal Penerimaan',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );







        $valid = $this->form_validation;

        if ($valid->run() == false) {
            $data = array(
                'title' => 'Add Penerima',
                'bantuan' => $bantuan,
                'isi' => 'admin/penerima/tambah'
            );

            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $data = [
                'id_bantuan' => $this->input->post('id_bantuan'),
                'kk' => $this->input->post('kk'),
                'nik' => $this->input->post('nik'),
                'nama_penerima' => $this->input->post('nama_penerima'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'tgl_penerima' => $this->input->post('tgl_penerima'),
                'date_created' => date('Y-m-d H:i:s')
            ];
            $this->penerima_model->tambah($data);
            $this->session->set_flashdata('flash', 'Added');
            // $this->session->set_flashdata('sukses', '<div class="alert" style="background-color:#d4edda;">User was successfully added !</div>');
            redirect('admin/penerima');
        }
    }


    public function edit($id_penerima)
    {
        $penerima = $this->penerima_model->detail($id_penerima);
        $bantuan = $this->bantuan_model->listing();

        //validasi first
        $valid = $this->form_validation;

        $this->form_validation->set_rules(
            'kk',
            'Kartu Keluarga',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );

        $this->form_validation->set_rules(
            'nik',
            'NIK',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );


        $this->form_validation->set_rules(
            'nama_penerima',
            'Nama Penerima',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );

        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );


        $this->form_validation->set_rules(
            'jk',
            'Jenis Kelamin',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );

        $this->form_validation->set_rules(
            'pekerjaan',
            'Pekerjaan',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );



        if ($valid->run() ==  FALSE) {

            $data = array(
                'title' => 'Edit Data Penerima',
                'penerima'    => $penerima,
                'bantuan'     => $bantuan,
                'isi' => 'admin/penerima/edit'
            );

            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $data = [
                'id_penerima'    => $id_penerima,
                'id_bantuan'    => $this->input->post('id_bantuan'),
                'kk' => $this->input->post('kk'),
                'nik' => $this->input->post('nik'),
                'nama_penerima' => $this->input->post('nama_penerima'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'tgl_penerima' => $this->input->post('tgl_penerima'),
            ];

            $this->penerima_model->edit($data);
            $this->session->set_flashdata('flash', 'Edited');
            // $this->session->set_flashdata('sukses', '<div class="alert" style="background-color:#d4edda;">User was successfully edited !</div>');
            redirect(base_url('admin/penerima'), 'refresh');
        }
    }

    public function delete($id_penerima)
    {

        $penerima = $this->penerima_model->detail($id_penerima);
        $data = array('id_penerima'    => $penerima['id_penerima']);
        $this->penerima_model->delete($data);
        $this->session->set_flashdata('flash', 'Deleted');
        // $this->session->set_flashdata('sukses', '<div class="alert" style="background-color:#f8d7da;">User was successfully deleted !</div>');
        redirect('admin/penerima');
    }
}
