<?php

class Tagihan_model extends CI_model
{
    public function index()
    {
        $query = $this->db->get("tagihan"); //select * dari tabel 
        return $query->result_array();
    }

    /* public function getTagihan()
    {
        return $this->db->get_where('tagihan', ['id_warga' => 12])->result_array(); //select dari tabel 
    } */

    public function inputtagihan()
    {
        $data = [
            "id_persil" => $this->input->post('id_persil', true),
            "kegiatan" => $this->input->post('kegiatan', true),
            "harga" => $this->input->post('harga', true),
            "status" => $this->input->post('status', true),
            "id_pemilik" => $this->input->post('id_pemilik', true)
        ];

        $this->db->insert('tagihan', $data); //insert to tabel persil
    }

    public function tagihanwarga()
    {
        return $this->db->get_where('tagihan', [

            'id_pemilik' => 12

        ])->result_array(); //select dari tabel 
    }
}
