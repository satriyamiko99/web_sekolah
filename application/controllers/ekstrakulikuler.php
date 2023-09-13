<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekstrakulikuler extends CI_Controller
{

    public function index()
    {
        $this->load->view('Front/List.ekstrakulikuler.php');
    }
}