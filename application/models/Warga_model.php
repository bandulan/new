<?php

class Warga_model extends CI_model
{
    public function allwarga()
    {
        $query = $this->db->get("warga"); //select * dari tabel 
        return $query->result_array();
    }
}
