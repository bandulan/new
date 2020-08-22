<?php

class Persil_model extends CI_model
{
    public function getAllPersil()
    {
        return $this->db->get_where('persil', [

            'kegiatan' => 'Pendaftaran Baru'
        ])->result_array(); //select dari tabel 
    }

    public function belumverifikasi()
    {
        return $this->db->get_where('persil', [

            'verifikasi' => 'Menunggu Verifikasi'

        ])->result_array(); //select dari tabel 
    }

    public function getById($id_persil)
    {
        return $this->db->get_where('persil', ['id_persil' => $id_persil])->row_array(); //select dari tabel 
    }

    public function daftarSertifikat()
    {
        $data = [
            "verifikasi" => $this->input->post('verifikasi', true),
            "id_pemilik" => $this->input->post('id_pemilik', true),
            "alamat_persil" => $this->input->post('alamat_persil', true),
            "kegiatan" => $this->input->post('kegiatan', true),
        ];

        $this->db->insert('persil', $data); //insert to tabel persil
    }

    public function getpersilbyidWarga() //warga - proses
    {
        return $this->db->get_where('persil', ['id_pemilik' => 12])->result_array(); //select dari tabel 
    }

    public function verifikasi($id_persil)
    {
        $data = ["verifikasi" => 'Berhasil Diverifikasi'];

        $this->db->where('id_persil', $id_persil);
        $this->db->update('persil', $data); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
    }

    //PEMECAHAN

    public function tambahPemecahan()
    {
        $data = [

            "id_pemilik" => $this->input->post('id_pemilik', true),
            "nib" => $this->input->post('nib', true),
            "status" => $this->input->post('status', true)

        ];

        $this->db->insert('pemecahan', $data); //insert to tabel persil
    }

    public function tabelpemecahan()
    {
        return $this->db->get_where('persil', [

            'kegiatan' => 'Pemecahan Sertifikat'
        ])->result_array(); //select dari tabel 
    }




    //tagihan
    //load tabel 
    public function tabeltagihan()
    {
        return $this->db->get_where('persil', [

            'verifikasi' => 'Berhasil Diverifikasi'

        ])->result_array(); //select dari tabel 
    }
}
