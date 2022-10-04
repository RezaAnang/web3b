<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Website extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "website 3b";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }
    public function about()
    {
        $data['judul'] = "HALAMAN TENTANG KAMI";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }
}
