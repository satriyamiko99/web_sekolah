<?php
defined('BASEPATH') or exit('No direct script access allowed');

class guru extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_guru');
		$this->load->helper('url');

	}

	public function index()
	{
		$data['guru'] = $this->M_guru->tampil_data()->result();
		$this->load->view('Admin/List.guru.php', $data);
	}
	public function add()
	{
		$nip = $this->input->post('nip');
		$nama_guru = $this->input->post('nama_guru');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$mata_pelajaran = $this->input->post('mata_pelajaran');



		$data = array(
			'nip' => $nip,
			'nama_guru' => $nama_guru,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'mata_pelajaran' => $mata_pelajaran,

		);

		$this->M_guru->input_data($data, 'tbl_guru');
		redirect('Admin/guru');

	}
	public function delete($id_guru)
	{
		$id_guru = $this->input->post('id_guru');
		$this->M_guru->delete_data($id_guru);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('Admin/guru');
	}
	public function update($id_guru)
	{
		$nip = $this->input->post('nip');
		$nama_guru = $this->input->post('nama_guru');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$mata_pelajaran = $this->input->post('mata_pelajaran');



		$data = array(
			'nip' => $nip,
			'nama_guru' => $nama_guru,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'mata_pelajaran' => $mata_pelajaran,

		);
		$where = array(
			'id_guru' => $id_guru
		);


		$this->M_guru->input_data($data, 'tbl_guru');
		redirect('Admin/guru');

	}
}