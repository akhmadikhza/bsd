<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Filter extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->load->model('penerima_model');
        $this->load->model('bantuan_model');
    }

    //listing data user
    public function index()
    {

        $user = $this->penerima_model->listing();
        $users = $this->penerima_model->listing();
        $data = array(
            'title' => 'Data Penerima(' . count($user) . ')',
            'user' => $user,
            'users' => $users
        );

        $this->load->view('filter', $data);
    }
}
