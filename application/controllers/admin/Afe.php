<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Afe extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->load->model('penerima_model');
        $this->load->model('bantuan_model');
    }
    public function index()
    {

        //ambil data user berdasarkan data login
        $user = $this->penerima_model->listing();
        $this->check_login->check();
        $data = array(
            'title' => 'Afe Coba',
            'isi' => 'admin/afe',
            'user' => $user
        );

        $this->load->view('admin/layout/wrapper', $data);
    }
}
