<?php

class Produk_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_m');
	}

	public function index()
	{
		$produk = $this->Produk_m->getAll2();
		$data['produk'] = $produk;

		$perumahan = $this->Produk_m->getAll();
		$data['perumahan'] = $perumahan;

		$this->load->view('parts/header', $data);
		$this->load->view('pages/Produk_v', $data);
		$this->load->view('parts/footer', $data);
	}

	public function detailproduk($id)
	{
		$perumahan = $this->Produk_m->getAll();
		$data['perumahan'] = $perumahan;

		$produk = $this->Produk_m->getAll2();
		$data['produk'] = $produk;

		$this->load->model('Produk_m');
		$detail = $this->Produk_m->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('parts/header', $data);
		$this->load->view('pages/Produkdetail', $data);
		$this->load->view('parts/footer', $data);
	}

	public function produkrumah($id_perumahan)
	{
		$produk = $this->Produk_m->getAll2($id_perumahan, 'id_perumahan');
		$data['produk'] = $produk;

		$this->load->model('Produk_m');
		$detail = $this->Produk_m->detail_data();
		$data['detail'] = $detail;

		$this->load->view('parts/header', $data);
		$this->load->view('pages/Produkrumah', $data);
		$this->load->view('parts/footer', $data);
	}
}
