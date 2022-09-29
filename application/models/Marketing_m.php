<?php

class Marketing_m extends CI_Model
{
	public function getAll(){
		return $this->db->get('tb_sosmed');
	}

}