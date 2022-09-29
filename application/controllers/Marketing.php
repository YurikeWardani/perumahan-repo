<?php
class Marketing extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Marketing_m');
	}

	public function index(){
		$sosmed = $this->Marketing_m->getAll();
		$data['sosmed'] = $sosmed;

		$this->load->view('parts/header', $data);
		$this->load->view('pages/Marketing_v', $data);
		$this->load->view('parts/footer', $data);
	}
}