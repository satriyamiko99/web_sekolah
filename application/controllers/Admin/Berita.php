<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Berita');
        $this->load->helper('url');
        $this->load->library('upload');

    }

    public function index()
    {
        $data['Berita'] = $this->M_Berita->tampil_data()->result();
        $this->load->view('Admin/List.Berita.php', $data);
    }
    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/upload/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg|jfif'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size'] = 1000000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['gambar']['name'])) {
            if ($this->upload->do_upload('gambar')) {
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

                $gambar = $gbr['file_name'];
                $judul = $this->input->post('judul');
                $tanggal = $this->input->post('tanggal');
                $deskripsi = $this->input->post('deskripsi');

                //  $tanggal = date('Y-m-d h:i:s');

                $data = array(
                    'gambar' => $gambar,
                    'judul' => $judul,
                    'tanggal' => $tanggal,
                    'deskripsi' => $deskripsi,

                );

                $this->M_Berita->input_data($data, 'tbl_Berita');
                //       echo $this->session->set_flashdata('msg', 'success');
                redirect('Admin/Berita');
            } else {
                // echo $this->session->set_flashdata('msg', 'warning');
                redirect('Admin/Berita');
            }
        } else {

            redirect('Admin/Berita');
        }
    }
    public function delete($id_Berita)
    {
        $id_Berita = $this->input->post('id_Berita');
        $this->M_Berita->delete_data($id_Berita);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('Admin/Berita');
    }
}