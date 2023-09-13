<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekstrakulikuler extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Ekstrakulikuler');
        $this->load->helper('url');
        $this->load->library('upload');

    }

    public function index()
    {
        $data['Ekstrakulikuler'] = $this->M_Ekstrakulikuler->tampil_data()->result();
        $this->load->view('Admin/List.Ekstrakulikuler.php', $data);
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
                $tanggal = $this->input->post('tanggal');
                $keterangan = $this->input->post('keterangan');

                //  $tanggal = date('Y-m-d h:i:s');

                $data = array(

                    'tanggal' => $tanggal,
                    'keterangan' => $keterangan,
                    'gambar' => $gambar


                );



                $this->M_Ekstrakulikuler->input_data($data, 'tbl_Ekstrakulikuler');
                //       echo $this->session->set_flashdata('msg', 'success');
                redirect('Admin/Ekstrakulikuler');
            } else {
                // echo $this->session->set_flashdata('msg', 'warning');
                redirect('Admin/Ekstrakulikuler');
            }
        } else {

            redirect('Admin/Ekstrakulikuler');
        }
    }
    public function delete($id_Ekstrakulikuler)
    {
        $id_Ekstrakulikuler = $this->input->post('id_Ekstrakulikuler');
        var_dump($id_Ekstrakulikuler);
        die;
        $this->M_Ekstrakulikuler->delete_data($id_Ekstrakulikuler);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('Admin/Ekstrakulikuler');
    }
}