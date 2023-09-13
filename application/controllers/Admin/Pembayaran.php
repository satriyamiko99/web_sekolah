<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembayaran extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pembayaran');
        $this->load->helper('url');

    }

    public function index()
    {
        $data['pembayaran'] = $this->M_pembayaran->tampil_data()->result();
        $this->load->view('Admin/List.pembayaran.php', $data);
    }
    public function add()
    {
        $Nisn = $this->input->post('Nisn');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $struk = $this->input->post('struk');

        $data = array(
            'Nisn' => $Nisn,
            'nama' => $nama,
            'kelas' => $kelas,
            'jenis_kelamin' => $jenis_kelamin,
            'struk' => $struk,
        );

        $this->M_pembayaran->input_data($data, 'tbl_pembayaran');
        redirect('Admin/pembayaran');

    }
    public function delete($id_pembayaran)
    {
        $id_pembayaran = $this->input->post('id_pembayaran');
        $this->M_pembayaran->delete_data($id_pembayaran);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('Admin/pembayaran');
    }
    public function update()
    {
        $id_pembayaran = $this->input->post('id_pembayaran');
        $Nisn = $this->input->post('Nisn');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $struk = $this->input->post('struk');

        $data = array(
            'Nisn' => $Nisn,
            'nama' => $nama,
            'kelas' => $kelas,
            'jenis_kelamin' => $jenis_kelamin,
            'struk' => $struk,
        );
        $where = array(
            'id_pembayaran' => $id_pembayaran
        );


        $this->M_pembayaran->update_data($where, $data, 'tbl_pembayaran');
        redirect('Admin/pembayaran');

    }

}