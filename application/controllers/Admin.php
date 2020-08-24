<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Persil_m');
        $this->load->library('form_validation');
        /* $this->load->library('form_validation'); */
    }


    //DASHBOARD
    public function index()
    {
        $this->load->view('petugas/header');
        $this->load->view('petugas/dashboard');
        $this->load->view('petugas/footer');
    }


    //TABEL PERSIL
    public function allpersil()
    {
        $this->load->model("Persil_model"); //masuk ke model persil
        $data["persil"] = $this->Persil_model->getAllPersil(); //get  function $persil yang dipanggil di index.php
        $this->load->view('petugas/header');
        $this->load->view('petugas/tabelpersil', $data);
        $this->load->view('petugas/footer');
    }

    public function detailpersil($id_persil)
    {
        $this->load->model("Persil_model"); //masuk ke model persil
        $data['persil'] = $this->Persil_model->getById($id_persil);
        $this->load->view('petugas/header');
        $this->load->view('petugas/detailpersil', $data);
        $this->load->view('petugas/footer');
    }


    //VERIFIKASI PENDAFTARAN
    public function tabelverifikasibaru()
    {
        $this->load->model("Persil_model"); //masuk ke model persil
        $data["persil"] = $this->Persil_model->belumverifikasi(); //get  function $persil yang dipanggil di index.php
        $this->load->view('petugas/header');
        $this->load->view('petugas/tabelverifikasi', $data);
        $this->load->view('petugas/footer');
    }


    //VERIFIKASI
    public function detailverifikasi($id_persil)
    {
        $this->load->model("Persil_model"); //masuk ke model persil
        $data['persil'] = $this->Persil_model->getById($id_persil);

        $this->load->view('petugas/header');
        $this->load->view('petugas/detailverifikasi', $data);
        $this->load->view('petugas/footer');
    }

    function edit($id_persil)
    {
        $this->load->model("Persil_model"); //masuk ke model persil

        $this->Persil_model->verifikasi($id_persil);
        echo "<script>alert('Verifikasi berhasil'); window.location=('../tabelverifikasibaru');</script>";

        redirect('proses/verifikasiDaftar/' . $id_persil);
    }


    //PROSES
    /* function proses($id_persil)
    {
        $this->load->model("Persil_model"); //masuk ke model persil
        //$data['persil'] = $this->Persil_model->addProses($id_persil);


        // kalau validasi benar
        $this->Persil_model->addProses($id_persil);
        // $this->session->set_flashdata('flash', 'ditambahkan');    //set notif berhasil

        redirect('admin/tabeltagihan');
    } */


    //PEMECAHAN
    public function tabelpemecahan()
    {
        $this->load->model("Persil_model"); //masuk ke model persil
        $data["persil"] = $this->Persil_model->tabelpemecahan(); //get  function $persil yang dipanggil di index.php
        $this->load->view('petugas/header');
        $this->load->view('petugas/tabelpersil', $data);
        $this->load->view('petugas/footer');
    }


    //ALL WARGA
    public function tabelwarga()
    {
        $this->load->model("Warga_model"); //masuk ke model persil
        $data["warga"] = $this->Warga_model->allwarga(); //get  function $persil yang dipanggil di index.php
        $this->load->view('petugas/header');
        $this->load->view('petugas/tabelwarga', $data);
        $this->load->view('petugas/footer');
    }


    //TAGIHAN
    public function tabeltagihan()
    {
        $this->load->model("Persil_model"); //masuk ke model persil
        $data["persil"] = $this->Persil_model->tabeltagihan(); //get  function $persil yang dipanggil di index.php

        $this->load->view('petugas/header');
        $this->load->view('petugas/tabeltagihan', $data);
        $this->load->view('petugas/footer');
    }

    public function formtagihan($id_persil)
    {
        $this->load->model("Persil_model"); //masuk ke model 
        $this->load->model("Tagihan_model"); //masuk ke model 
        $data['persil'] = $this->Persil_model->getById($id_persil);

        $this->form_validation->set_rules('harga', 'Harga', 'required');  //set validasi di form tambah
        if ($this->form_validation->run() == FALSE) {              //kalau data yang di input tidak benar, masuk ke form tambah

            $this->load->view('petugas/header.php');
            $this->load->view("petugas/formtagihan", $data);                      //form tambah
            $this->load->view("petugas/footer");
        } else {                                                    // kalau validasi benar
            $this->Tagihan_model->inputtagihan();
            redirect('proses/inputBayar/' . $id_persil);

            //redirect('admin/tabeltagihan');                                   //redirect ke controller mahasiswa
        }
    }

    /*  public function prosestagihan($id_persil)
    {

        $this->load->model("Tagihan_model"); //masuk ke model persil

        $this->Tagihan_model->verifikasi($id_persil);
        //$this->load->model("Tagihan_model"); //masuk ke model persil
        //$data["warga"] = $this->Warga_model->allwarga(); //get  function $persil yang dipanggil di index.php

        $insert_id = $this->db->insert_id();

			//set notif berhasil
			//redirect('warga');                                   //redirect ke controller mahasiswa
			echo "<script>alert('data lokasi berhasil dimasukkan, silahkan masukkan informasi kamar. id lokasi= . $insert_id;'); window.location=('p_detail.php?id_lokasi=" . $insert_id . "') </script>";
    } */
}
