<?php

class Beranda_m extends CI_Model
{
	public function getAll1(){
		return $this->db->get('tb_slider');
	}

	public function getAll2(){
		$this->db->order_by('harga_produk', 'desc');
		$this->db->select('*')
		->from('tb_produk')
		->join('tb_perumahan', 'tb_perumahan.id_perumahan = tb_produk.id_perumahan');
		return $this->db->get();
	}

	public function getAll3(){
		return $this->db->get('tb_sosmed');
	}
}