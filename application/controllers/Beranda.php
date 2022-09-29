<?php
class Beranda extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Beranda_m');
	}

	public function index(){
		$slider = $this->Beranda_m->getAll1();
		$data['slider'] = $slider;

		$produk = $this->Beranda_m->getAll2();
		$data['produk'] = $produk;

		$sosmed = $this->Beranda_m->getAll3();
		$data['sosmed'] = $sosmed;

		$this->load->view('parts/header', $data);
		$this->load->view('pages/Beranda_v', $data);
		$this->load->view('parts/footer', $data);
	}
}