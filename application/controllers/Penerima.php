<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerima extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        // $this->check_login->check();
        // $user = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        // if ($user['role_id'] == 2) {
        //     $this->session->set_flashdata('sukses', '<div class="alert alert-danger" role="alert">You dont have permission to access this page !</div>');
        //     redirect('admin/user');
        // }
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
            'receiver' => $this->bantuan_model->receiver(),
        );

        $this->load->view('penerima', $data);
    }
    public function bantuan($slug_bantuan)
    {
        $bantuan         = $this->bantuan_model->read($slug_bantuan);
    }
}
