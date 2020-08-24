<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Persil_model');
        $this->load->model('Tagihan_model');
        $this->load->library('form_validation');
    }

    public function ada()
    {
        $tot = $this->Tagihan_model->hitung();
        $result['tot'] = $tot;

        echo json_encode($result);
    }
    public function get_tot()
    {
        $tot = $this->Tagihan_model->hitung();
        $result['tot'] = $tot;
        $result['msg'] = "Berhasil direfresh secara realtime";
        echo json_encode($result);
    }

    public function index()
    {
        $this->load->view('warga/templates/header');
        $this->load->view('warga/dashboard');
        $this->load->view('warga/templates/footer');
    }

    public function profile()
    {
        $this->load->view('warga/templates/header');
        $this->load->view('warga/profile');
        $this->load->view('warga/templates/footer');
    }

    //PENDAFTARAN SERTIFIKAT BARU
    public function daftarSertifikat()
    {
        $this->form_validation->set_rules('alamat_persil', 'Alamat', 'required');  //set validasi di form tambah
        if ($this->form_validation->run() == FALSE) {              //kalau data yang di input tidak benar, masuk ke form tambah

            $this->load->view('warga/templates/header.php');
            $this->load->view("warga/daftar_sertifikat");                      //form tambah
            $this->load->view("warga/templates/footer");
        } else {                                                    // kalau validasi benar
            $this->Persil_model->daftarSertifikat();
            // $this->session->set_flashdata('flash', 'ditambahkan');    //set notif berhasil
            redirect('warga');                                   //redirect ke controller mahasiswa
        }
    }

    //LIHAT TAGIHAN

    public function tabeltagihan()
    {
        $this->load->model("Tagihan_model"); //masuk ke model persil
        $data["tagihan"] = $this->Tagihan_model->tagihanwarga(); //get  function $persil yang dipanggil di index.php

        $this->load->view('warga/templates/header');
        $this->load->view('warga/tabeltagihan', $data);
        $this->load->view('warga/templates/footer');
    }

    public function inputbayar($id_persil)
    {
        $data["tagihan"] = $this->Tagihan_model->getId($id_persil);
        $this->form_validation->set_rules('harga', 'Harga', 'required');  //set validasi di form tambah
        if ($this->form_validation->run() == FALSE) {              //kalau data yang di input tidak benar, masuk ke form tambah

            $this->load->view('warga/templates/header.php');
            $this->load->view("warga/formtagihan", $data);                      //form tambah
            $this->load->view("warga/templates/footer");
        } else {                                                    // kalau validasi benar
            $this->Tagihan_model->bayar($id_persil);
            // $this->session->set_flashdata('flash', 'ditambahkan');    //set notif berhasil
            redirect('warga/tabeltagihan');                                   //redirect ke controller mahasiswa
        }
    }


    //INPUT PEMECAHAN
    public function daftarPemecahan()
    {
        $this->form_validation->set_rules('alamat_persil', 'Alamat', 'required');  //set validasi di form tambah
        if ($this->form_validation->run() == FALSE) {              //kalau data yang di input tidak benar, masuk ke form tambah

            $this->load->view('warga/templates/header.php');
            $this->load->view("warga/daftar_pemecahan");                      //form tambah
            $this->load->view("warga/templates/footer");
        } else {                                                    // kalau validasi benar
            $this->Persil_model->daftarSertifikat();
            // $this->session->set_flashdata('flash', 'ditambahkan');    //set notif berhasil
            redirect('warga');                                   //redirect ke controller mahasiswa
        }
    }


    //lihat proses
    public function proses()
    {
        $data["persil"] = $this->Persil_model->getpersilbyidWarga(); //get  function $mahasiswa yang dipanggil di index.php
        $this->load->view('warga/templates/header');
        $this->load->view('warga/proses', $data);
        $this->load->view('warga/templates/footer');
    }



    //TAGIHAN




    /* public function tes()
    {
        $this->load->view('warga/templates/header');
        $this->load->view('warga/daftar_sertifikat');
        $this->load->view('warga/templates/footer');
    } */
}
