<?php

class Proses extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Persil_model"); //masuk ke model persil
        $this->load->library('form_validation');
        /* $this->load->library('form_validation'); */
    }

    function verifikasiDaftar($id_persil)
    {
        $this->Persil_model->addProses($id_persil);
        redirect('admin/tabelverifikasibaru');
    }

    /*  function inputBayar()
    {
        $data['hitung'] = $this->Tagihan_model->hitung();

        $this->load->view('petugas/header');
        $this->load->view('petugas/tabelwarga', $data);
        $this->load->view('petugas/footer');
    } */
}
