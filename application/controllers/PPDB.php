<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PPDB extends CI_Controller
{

    public function index()
    {
        $this->load->view('Front/List.PPDB.php');
    }
}