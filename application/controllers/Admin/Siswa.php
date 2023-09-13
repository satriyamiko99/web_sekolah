<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_siswa');
		$this->load->helper('url');

	}

	public function index()
	{
		$data['siswa'] = $this->M_siswa->tampil_data()->result();
		$this->load->view('Admin/List.siswa.php', $data);
	}
	public function add()
	{
		$Nisn = $this->input->post('Nisn');
		$nama = $this->input->post('nama');
		$tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$no_telphone = $this->input->post('no_telphone');



		$data = array(
			'Nisn' => $Nisn,
			'nama' => $nama,
			'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'asal_sekolah' => $asal_sekolah,
			'no_telphone' => $no_telphone,

		);

		$this->M_siswa->input_data($data, 'tbl_siswa');
		redirect('Admin/siswa');

	}

	function delete($id_siswa)
	{
		$id_siswa = $this->input->post('id_siswa');
		$this->M_siswa->delete_data($id_siswa);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirepublicct('Admin/siswa');
	}
	public function update($id_siswa)
	{
		$Nisn = $this->input->post('Nisn');
		$nama = $this->input->post('nama');
		$tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$no_telphone = $this->input->post('no_telphone');



		$data = array(
			'Nisn' => $Nisn,
			'nama' => $nama,
			'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'asal_sekolah' => $asal_sekolah,
			'no_telphone' => $no_telphone,

		);
		$where = array(
			'id_siswa' => $id_siswa
		);

		$this->M_siswa->input_data($where, $data, 'tbl_siswa');
		redirect('Admin/siswa');

	}
	public function uppdate()
	{
		$Nisn = $this->input->post('Nisn');
		$nama = $this->input->post('nama');
		$tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$no_telphone = $this->input->post('no_telphone');



		$data = array(
			'Nisn' => $Nisn,
			'nama' => $nama,
			'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'asal_sekolah' => $asal_sekolah,
			'no_telphone' => $no_telphone,

		);

		$this->M_siswa->input_data($data, 'tbl_siswa');
		redirect('Admin/siswa');

	}

}