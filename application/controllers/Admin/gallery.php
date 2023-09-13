<?php
defined('BASEPATH') or exit('No direct script access allowed');

class gallery extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_gallery');
        $this->load->helper('url');
        $this->load->library('upload');

    }

    public function index()
    {
        $data['gallery'] = $this->M_gallery->tampil_data()->result();
        $this->load->view('Admin/List.gallery.php', $data);
    }
    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/upload/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg|jfif'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size'] = 1000000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['gallery']['name'])) {
            if ($this->upload->do_upload('gallery')) {
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
                $tanggal = $this->input->post('tanggal');
                $keterangan = $this->input->post('keterangan');

                //  $tanggal = date('Y-m-d h:i:s');

                $data = array(

                    'tanggal' => $tanggal,
                    'keterangan' => $keterangan,
                    'gambar' => $gambar


                );



                $this->M_gallery->input_data($data, 'tbl_gallery');
                //       echo $this->session->set_flashdata('msg', 'success');
                redirect('Admin/gallery');
            } else {
                // echo $this->session->set_flashdata('msg', 'warning');
                redirect('Admin/gallery');
            }
        } else {

            redirect('Admin/gallery');
        }
    }
    function delete($id_formulir)
    {
        $id_gallery = $this->input->post('id_gallery');
        $this->M_gallery->delete_data($id_gallery);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('Admin/gallery');
    }
}