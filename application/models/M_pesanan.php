<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_pesanan extends CI_Model
{
    private $table = 'tb_pemesanan';

    public function pesanan($id = '')
    {
        $this->db->select('*')
            ->from($this->table)
            ->join('tb_perumahan', 'tb_perumahan.id_perumahan = tb_pemesanan.perumahan');

         if ($id) {
            $this->db->where('id_pemesanan', $id);
        }

        return $this->db->get();
    }
    
    public function update($id, $data = array())
    {
        $this->db->set($data);
        $this->db->where('id_pemesanan', $id);
        return $this->db->update($this->table);
    }
}
