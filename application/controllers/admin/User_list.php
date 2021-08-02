<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_list extends CI_Controller
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

		$this->load->model('user_model');
	}


	//listing data user
	public function index()
	{

		$user = $this->user_model->listing();
		$data = array(
			'title' => 'Data User(' . count($user) . ')',
			'user' => $user,
			'isi' => 'admin/user/list'
		);

		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	public function edit($id_user)
	{
		$user = $this->user_model->detail($id_user);

		//validasi first
		$valid = $this->form_validation;



		$valid->set_rules(
			'name',
			'Name',
			'required|trim|min_length[4]|max_length[520]',
			array(
				'required'		=> '%s is required!',
				'min_length'	=> '%s too short!',
				'max_length'	=> '%s max 20 characters!'
			)
		);

		if ($valid->run() ==  FALSE) {

			$data = array(
				'title' => 'Edit User Administator: ' . $user['name'],
				'user'	=> $user,
				'isi' => 'admin/user/edit'
			);

			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_user'	=> $id_user,
				'name'	=> htmlspecialchars($this->input->post('name', true)),
				'email'	=> htmlspecialchars($this->input->post('email', true)),
				'role_id'	=> $this->input->post('role_id'),
				'is_active'	=> $this->input->post('is_active')
			);
			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data was succesfully updated!');
			redirect(base_url('admin/user_list'), 'refresh');
		}
	}

	public function delete($id_user)
	{

		$user = $this->user_model->detail($id_user);
		//hapus image
		$old_image = $user['image'];
		if ($old_image != 'default.png') {

			unlink(FCPATH . 'assets/image/profile/' . $old_image);
			unlink(FCPATH . 'assets/image/profile/thumbs/' . $old_image);
		}

		$data = array('id_user'	=> $user['id_user']);
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data was successfully deleted!');
		redirect('admin/user_list');
	}

	public function user_token()
	{
		$user_token = $this->user_model->user_token();
		$data = array(
			'title' => 'Data User Token(' . count($user_token) . ')',
			'user_token' => $user_token,
			'isi' => 'admin/user/user_token'
		);

		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function delete_token($id)
	{
		$user_token = $this->user_model->detail_token($id);
		$data = array('id'	=> $user_token['id']);
		$this->user_model->delete_token($data);
		$this->session->set_flashdata('sukses', 'Data has been deleted!');
		redirect('admin/user_list/user_token');
	}
}
