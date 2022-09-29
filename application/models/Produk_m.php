<?php

class Produk_m extends CI_Model
{
	public function getAll()
	{
		return $this->db->get('tb_perumahan');
	}

	public function getAll2($value = null, $key = 'id_produk')
	{
		$this->db->select('*')
			->from('tb_produk')
			->order_by('harga_produk', 'DESC');

		if ($value) {
			$this->db->where($key, $value);
		}

		return $this->db->get();
	}

	public function detail_data($id = NULL)
	{
		// Old
		// $query = $this->db->get_where('tb_produk', array('id_produk' => $id))->row();
		// return $query;

		// New
		$this->db->select('a.*, b.nama_perumahan')
			->from('tb_produk a')
			->join('tb_perumahan b', 'b.id_perumahan = a.id_perumahan')
			->where('a.id_produk', $id);

		return $this->db->get()->row();
	}
}
