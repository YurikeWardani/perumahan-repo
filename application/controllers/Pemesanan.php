<?php
class Pemesanan extends CI_Controller
{
	public function index()
	{
		$this->load->view('parts/header');
		$this->load->view('pages/Pemesanan_v');
		$this->load->view('parts/footer');
	}
}