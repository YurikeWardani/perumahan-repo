<?php

class Suratpesan_m extends CI_Model
{
	public function getAll(){
		return $this->db->get('tb_marketing');
	}

	public function getAll2(){
		return $this->db->get('tb_perumahan');
	}

	public function getAll3(){
		return $this->db->get('tb_produk');
	}
	
	public function simpan($data){
	    return $this->db->insert('tb_pemesanan', $data);
	}
}