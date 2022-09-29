<?php

class Logingagal extends CI_Controller
{
	public function index(){
		$this->load->view('parts/header');
		$this->load->view('pages/Logingagal_v');
		$this->load->view('parts/footer');
	}
}