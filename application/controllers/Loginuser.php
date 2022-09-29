<?php 

class Loginuser extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Loginuser_m');

	}

	function index(){
		$this->load->view('parts/header');
		$this->load->view('pages/Pemesanan_v');
		$this->load->view('parts/footer');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Loginuser_m->cek_login("tb_marketing",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("Suratpesan"));

		}else{
			$this->session->set_flashdata('error','<i class="bi bi-exclamation-triangle"> </i>  Username dan Password salah!');
			redirect('Pemesanan');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Loginuser'));
	}
}?>