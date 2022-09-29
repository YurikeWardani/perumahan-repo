<?php

class Suratpesan extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Suratpesan_m');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("Loginuser"));
		}
	}

	public function index(){
	    
		$marketing = $this->Suratpesan_m->getAll();
		$data['marketing'] = $marketing;

		$perumahan = $this->Suratpesan_m->getAll2();
		$data['perumahan'] = $perumahan;

		$produk = $this->Suratpesan_m->getAll3();
		$data['produk'] = $produk;

		$this->load->view('pages/Suratpesan_v', $data);
		$this->load->view('parts/footer', $data);
	}
	
	public function simpan(){
	    $nama_marketing = $this->input->post('nama_marketing');
	    $nama_pembeli = $this->input->post('nama_pembeli');
	    $no_identitas = $this->input->post('no_identitas');
	    $alamat = $this->input->post('alamat');
	    $no_hp = $this->input->post('no_hp');
	    $nama_perumahan = $this->input->post('nama_perumahan');
	    $tipe = $this->input->post('tipe');
	    $no_blok = $this->input->post('no_blok');
	    $skema = $this->input->post('skema_bayar');
	    $tanggal_itj = $this->input->post('tanggal_itj');
	    $sbg_berikut = $this->input->post('sbg_berikut');
	    $tgl_input = date('Y-m-d');
	    
	    $data = array(
	        'nama_marketing' => $nama_marketing,
	        'nama_pembeli' => $nama_pembeli,
	        'no_ktp' => $no_identitas,
	        'alamat_lengkap' => $alamat,
	        'no_hp' => $no_hp,
	        'perumahan' => $nama_perumahan,
	        'tipe' => $tipe,
	        'no_blok' => $no_blok,
	        'skema_pembayaran' => $skema,
	        'tanggal_itj' => $tanggal_itj,
	        'sbg_berikut' => $sbg_berikut,
	        'tgl_input' => $tgl_input,
	    );
	    
	    $result = $this->Suratpesan_m->simpan($data);
	    
	    if($result == true){
	        // $this->session->set_flashdata('msg', 'Data berhasil di input');
	        // redirect('Suratpesan', 'refresh');
	        $this->session->set_flashdata('success_register','<i class="bi bi-info-circle"> </i>   Pemesanan Anda telah terkirim, data akan segera diproses!');
			redirect('Suratpesan');
	    }else{
	    	$this->session->set_flashdata('error','<i class="bi bi-exclamation-triangle"> </i>  Pemesanan Anda gagal, silahkan mencoba kembali!');
			redirect('Suratpesan');
	        // $this->session->set_flashdata('msg', 'Data gagal di input');
	        // redirect('Suratpesan', 'refresh');
	    }
	    
	}
}