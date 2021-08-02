<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Route extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->check_login->check();
        $this->load->model('user_model');
    }

    public function index()
    {
        $user = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        if ($user['role_id'] == 1) {
            redirect('admin/admin');
        } else {
            redirect('admin/user');
        }
    }
}
