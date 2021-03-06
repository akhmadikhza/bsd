<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->check_login->check();
        $this->load->model('pengajuan_model');
    }

    //listing data user
    public function index()
    {
        $active = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $user = $this->pengajuan_model->listing();
        $data = array(
            'title' => 'Pengajuan Bantuan UMKM',
            'user' => $user,
            'active' => $active,
            'isi' => 'admin/pengajuan/list'
        );

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function admin_page()
    {
        $user = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        if ($user['role_id'] == 2) {
            $this->session->set_flashdata('sukses', '<div class="alert alert-danger" role="alert">You dont have permission to access this page !</div>');
            redirect('admin/user');
        }
        $user = $this->pengajuan_model->listing();
        $data = array(
            'title' => 'Admin Data Pengajuan UMKM',
            'user' => $user,
            'isi' => 'admin/pengajuan/list_admin'
        );

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }



    public function tambah()
    {

        $user = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();


        if ($user['status'] == 1) {
            $this->session->set_flashdata('sukses', '<div class="alert alert-warning" role="alert">You have 1 pending request !</div>');
            redirect('admin/pengajuan');
        }

        $this->form_validation->set_rules(
            'address',
            'Alamat',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );

        $this->form_validation->set_rules(
            'job_desc',
            'Deskripsi',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );

        $this->form_validation->set_rules(
            'no_telp',
            'No Telepon',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );

        $this->form_validation->set_rules(
            'rt',
            'RT',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );

        $this->form_validation->set_rules(
            'rw',
            'RT',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );


        $valid = $this->form_validation;

        if ($valid->run()) {
            $config['upload_path']          = './assets/image/pengajuan/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 6024;
            $config['max_width']            = '';
            $config['max_height']           = '';
            $config['remove_spaces']        = TRUE;
            // $config['file_name']            = $user['name'] . '-' . time() . '-' . $_FILES['image']['name'];
            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('image')) {
                $data = array(
                    'title' => 'Add Request',
                    'user' => $user,
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'admin/pengajuan/tambah'
                );
                $this->load->view('admin/layout/wrapper', $data, FALSE);
            } else {
                // $config2['upload_path']          = './assets/image/pengajuan/thumbs/';
                // $config2['allowed_types']        = 'jpeg|jpg|png';
                // $config2['max_size']             = 6024;
                // $config2['max_width']            = '';
                // $config2['max_height']           = '';
                // $config2['remove_spaces']        = TRUE;
                // // $config2['file_name']            = time() . '-' . $_FILES['image2']['name'];
                // $this->load->library('upload', $config2);

                // $this->upload->do_upload('image2');
                $upload_data                 = array('uploads' => $this->upload->data());


                $upload                      = $this->upload->data();
                $data = [
                    'id_user'   => $this->session->userdata('id_user'),
                    'name'   => $this->input->post('name'),
                    'nik' => $this->input->post('nik'),
                    'email' => $this->input->post('email'),
                    'address' => $this->input->post('address'),
                    'rt' => $this->input->post('rt'),
                    'rw' => $this->input->post('rw'),
                    'no_telp' => $this->input->post('no_telp'),
                    'image'        => $upload_data['uploads']['file_name'],
                    'image2'        => 'cobax.jpg',
                    'job_desc' => $this->input->post('job_desc'),
                    'komentar' => '',
                    'status' => 'Pending',
                    'date_created'    => date('Y-m-d H:i:s')
                ];
                var_dump($data);
                die;
                $this->pengajuan_model->tambah($data);
                // $this->pengajuan_model->update_akun();
                $this->session->set_flashdata('sukses', '<div class="alert" style="color:#155724;background-color:#d4edda;border-color: #c3e6cb;">Data was successfully added !</div>');
                redirect(base_url('admin/pengajuan'), 'refresh');
            }
        }

        $data = array(
            'title' => 'Add Request',
            'user' => $user,
            'isi' => 'admin/pengajuan/tambah'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }



    public function detail($id_pengajuan)
    {
        $user = $this->pengajuan_model->detail($id_pengajuan);
        $data = array(
            'title' => $user['name'],
            'user'    => $user,
            'isi' => 'admin/pengajuan/detail'
        );

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function verify($id_pengajuan)
    {
        $this->pengajuan_model->detail($id_pengajuan);
        $data = array(
            'id_pengajuan'    => $id_pengajuan,
            'status'    => 'Accepted'
        );
        $this->pengajuan_model->verify($data);
        $this->session->set_flashdata('sukses', '<div class="alert" style="color:#155724;background-color:#d4edda;border-color: #c3e6cb;">Data was successfully accepted !</div>');
        redirect(base_url('admin/pengajuan/admin_page'), 'refresh');
    }

    public function reject($id_pengajuan)
    {
        $this->pengajuan_model->detail($id_pengajuan);
        $data = array(
            'id_pengajuan'    => $id_pengajuan,
            'status'    => 'Rejected'
        );
        $this->pengajuan_model->reject($data);
        $this->session->set_flashdata('sukses', '<div class="alert" style="color:#721c24;background-color:#f8d7da;border-color: #f5c6cb;">Data has been rejected !</div>');
        redirect(base_url('admin/pengajuan/admin_page'), 'refresh');
    }

    public function komentar($id_pengajuan)
    {
        $user = $this->pengajuan_model->detail($id_pengajuan);

        $this->form_validation->set_rules(
            'komentar',
            'Komentar',
            'required',

            array(
                'required'    => '%s is requred!'
            )
        );

        $valid = $this->form_validation;

        if ($valid->run() ==  FALSE) {

            $data = array(
                'title' => 'Comment Reject',
                'user'    => $user,
                'isi' => 'admin/pengajuan/reject'
            );

            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $data = [
                'id_pengajuan'    => $id_pengajuan,
                'status'    => 'Rejected',
                'komentar' => $this->input->post('komentar'),
            ];

            $this->pengajuan_model->reject($data);
            $this->session->set_flashdata('flash', 'Succes');
            // $this->session->set_flashdata('sukses', '<div class="alert" style="background-color:#d4edda;">User was successfully edited !</div>');
            redirect(base_url('admin/pengajuan/admin_page'), 'refresh');
        }
    }

    public function process($id_pengajuan)
    {
        $this->pengajuan_model->detail($id_pengajuan);
        $data = array(
            'id_pengajuan'    => $id_pengajuan,
            'status'    => 'Process'
        );
        $this->pengajuan_model->process($data);
        $this->session->set_flashdata('sukses', '<div class="alert" style="color:#155724;background-color:#d4edda;border-color: #c3e6cb;">Data was successfully proccessed !</div>');
        redirect(base_url('admin/pengajuan/admin_page'), 'refresh');
    }


    public function delete($id_pengajuan)
    {

        $user = $this->pengajuan_model->detail($id_pengajuan);
        //hapus image
        $old_image = $user['image'];
        if ($old_image != 'default.png') {

            unlink(FCPATH . 'assets/image/pengajuan/' . $old_image);
            // unlink(FCPATH . 'assets/image/pengajuan/thumbs/' . $old_image);
        }

        $data = array('id_pengajuan'    => $user['id_pengajuan']);
        $this->pengajuan_model->delete($data);
        $this->pengajuan_model->set_zero();
        $this->session->set_flashdata('sukses', '<div class="alert" style="color:#721c24;background-color:#f8d7da;border-color: #f5c6cb;">Data was successfully deleted !</div>');
        redirect(base_url('admin/pengajuan'), 'refresh');
    }

    public function hapus_admin($id_pengajuan)

    {
        $user = $this->pengajuan_model->detail($id_pengajuan);
        //hapus image
        $old_image = $user['image'];
        if ($old_image != 'default.png') {

            unlink(FCPATH . 'assets/image/pengajuan/' . $old_image);
            // unlink(FCPATH . 'assets/image/pengajuan/thumbs/' . $old_image);
        }

        $data = array('id_pengajuan'    => $user['id_pengajuan']);
        $this->pengajuan_model->set_zero_admin();
        $this->pengajuan_model->delete($data);
        $this->session->set_flashdata('sukses', '<div class="alert" style="color:#721c24;background-color:#f8d7da;border-color: #f5c6cb;">Data was successfully deleted !</div>');
        redirect(base_url('admin/pengajuan/admin_page'), 'refresh');
    }

    public function akses()
    {

        $user = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        if ($user['role_id'] == 1) {
            redirect('admin/pengajuan/admin_page');
        } else {
            redirect('admin/pengajuan');
        }
    }
}//end of controller
