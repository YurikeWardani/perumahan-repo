<?php
class Lokasi extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model('Lokasi_m');
  }

  public function index(){
    $perumahan = $this->Lokasi_m->getAll2();
    $data['perumahan'] = $perumahan;

    $this->load->view('parts/header', $data);
    $this->load->view('pages/Lokasi_v', $data);
    $this->load->view('parts/footer', $data);
  }
}