<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Inventory extends CI_Model 
{
	var $table = 'tb_inventory';

	public function tampil()
    {
        return $this->db->get($this->table);
    }

    public function buat($data)
	{		
		return $this->db->insert($this->table, $data);
	}

	public function perbarui($data, $where)
	{
		return $this->db->update($this->table, $data, $where);
	}

	public function hapus($where)
	{
		return $this->db->delete($this->table, $where);
	}
}