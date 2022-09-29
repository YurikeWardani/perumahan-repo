<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_produk extends CI_Model
{
    private $table = 'tb_produk';

    public function produk($id = '')
    {
        $this->db->select('a.*, b.nama_perumahan')
            ->from($this->table . ' a')
            ->join('tb_perumahan b', 'b.id_perumahan = a.id_perumahan');

        if ($id) {
            $this->db->where('id_produk', $id);
        }
        return $this->db->get();
    }

    public function insert($data = array())
    {
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id_produk', $id);
        return $this->db->delete($this->table);
    }

    public function update($id, $data = array())
    {
        $this->db->set($data);
        $this->db->where('id_produk', $id);
        return $this->db->update($this->table);
    }
}
