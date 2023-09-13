<?php
defined('BASEPATH') or exit('No direct script access allowed');

class formulir extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_formulir');
		$this->load->helper('url');
		$this->load->library('upload');

	}

	public function index()
	{
		$data['formulir'] = $this->M_formulir->tampil_data()->result();
		$this->load->view('Admin/List.formulir.php', $data);
	}
	public function add()
	{
		date_default_timezone_set("Asia/Jakarta");
		$config['upload_path'] = './assets/upload/'; //path folder
		$config['allowed_types'] = 'pdf|docx|doc'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$config['max_size'] = 1000000; //Batas Ukuran

		$this->upload->initialize($config);
		if (!empty($_FILES['dokumen']['name'])) {
			if ($this->upload->do_upload('dokumen')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/upload/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '100%';
				$config['width'] = 500;
				$config['height'] = 450;
				$config['new_image'] = './assets/upload/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$dokumen = $gbr['file_name'];
				$nama_file = $this->input->post('nama_file');
				$keterangan = $this->input->post('keterangan');

				//  $tanggal = date('Y-m-d h:i:s');

				$data = array(
					'dokumen' => $dokumen,
					'nama_file' => $nama_file,
					'keterangan' => $keterangan,


				);



				$this->M_formulir->input_data($data, 'tbl_formulir');
				//       echo $this->session->set_flashdata('msg', 'success');
				redirect('Admin/formulir');
			} else {
				// echo $this->session->set_flashdata('msg', 'warning');
				redirect('Admin/formulir');
			}
		} else {

			redirect('Admin/formulir');
		}
	}
	function delete($id_formulir)
	{
		$id_formulir = $this->input->post('id_formulir');
		$this->M_formulir->delete_data($id_formulir);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('Admin/formulir');
	}

}