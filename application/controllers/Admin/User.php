<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->helper('url');

	}

	public function index()
	{
		$data['user'] = $this->M_user->tampil_data()->result();
		$this->load->view('Admin/List.user.php', $data);
	}
	public function add()
	{
		$nama_user = $this->input->post('nama_user');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$hak_akses = $this->input->post('hak_akses');

		$data = array(
			'nama_user' => $nama_user,
			'username' => $username,
			'password' => $password,
			'hak_akses' => $hak_akses
		);

		$this->M_user->input_data($data, 'tbl_user');
		redirect('Admin/User');

	}
	public function delete($id_user)
	{
		$id_user = $this->input->post('id_user');
		$this->M_user->delete_data($id_user);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('Admin/User');
	}

	public function update($id_user)
	{
		$id_user = $this->input->post('id_user');
		$nama_user = $this->input->post('nama_user');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$hak_akses = $this->input->post('hak_akses');

		$data = array(
			'nama_user' => $nama_user,
			'username' => $username,
			'password' => $password,
			'hak_akses' => $hak_akses
		);
		$where = array(
			'id_user' => $id_user
		);

		$this->M_user->update_data($where, $data, 'tbl_user');
		redirect('Admin/User');

	}
}