<?php

class Tagihan_model extends CI_model
{
    public $table = 'tagihan';


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

            'id_pemilik' => 12,
            'status' => 'Belum Dibayar'

        ])->result_array(); //select dari tabel 
    }

    public function getId($id_persil)
    {
        return $this->db->get_where('tagihan', ['id_persil' => $id_persil])->row_array(); //select dari tabel 
    }

    public function bayar($id_persil)
    {
        $data = [
            "status" => 'Lunas'
        ];

        $this->db->where('id_persil', $id_persil);
        $this->db->update('tagihan', $data); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
    }

    public function hitung()
    {
        $result = $this->db->get_where('tagihan', [
            'status' => 'Belum Dibayar',
            'id_pemilik' => 12
        ])->num_rows(); //select dari tabel 
        // $result = $this->db->get('tagihan')->num_rows();

        return $result;
    }

    function total_rows()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
