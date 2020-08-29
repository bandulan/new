<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mx-auto">
            <div class="col-8 col-sm-2">

                <p class="text-muted mb-3" id='time'></p>
            </div>



        </div>
        <div class="row">
            <div class="col-8 col-sm-6 mx-auto">
                <h3 class="text-center mb-2">Selamat Datang</h3>
                <img src="<?= base_url('img/img/biruu.svg'); ?>" class="mx-auto img-fluid d-flex" style="height: 180px;">
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">

    <!-- Default box -->


    <div class="container-fluid">

        <div class="row col-lg-8 col-10 mx-auto mt-3">

            <div class="col-lg-4">
                <!-- small card -->
                <div class="small-box ">
                    <div class="inner mb-1">
                        <br>
                        <h6 style="text-align: center;" class="text-bold text-uppercase">Pendaftaran Pengukuran dan Pementaan Bidang Tanah</h6>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file fa-xs"></i>
                    </div>
                    <div class="row mx-auto">
                        <a href="" class="btn btn-primary mx-auto mb-3" data-toggle="modal" data-target="#daftar">More info </a>
                    </div>

                </div>
                <!-- Modal -->
                <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="menubaruTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Info</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row mx-auto">

                                    <img src="<?= base_url('img/img/docc.svg'); ?>" alt="" class=" img-fluid mx-auto mt-3" style="height: 200px">
                                </div>
                                <div class="col-7 alert bg-lightblue mx-auto mt-3">
                                    <p class="text">Menu ini adalah menu untuk melakukan pendaftaran pengukuran untuk pembuatan sertifikat baru. Klik masuk untuk lanjutkan</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="<?= base_url('warga/pendaftaran'); ?>" class="btn btn-primary">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- small card -->
                <div class="small-box ">
                    <div class="inner mb-1">
                        <br>
                        <h6 style="text-align: center;" class="text-bold text-uppercase">Pendaftaran Pelayanan Pemecahan Sertifikat</h6>



                    </div>
                    <div class="icon">
                        <i class="fas fa-file fa-xs"></i>
                    </div>
                    <div class="row mx-auto">
                        <a href="" class="btn btn-primary mx-auto mb-3" data-toggle="modal" data-target="#pemecahan">More info </a>
                    </div>

                </div>
                <!-- Modal -->
                <div class="modal fade" id="pemecahan" tabindex="-1" role="dialog" aria-labelledby="menubaruTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Info</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row mx-auto">

                                    <img src="<?= base_url('img/img/pecah.svg'); ?>" alt="" class=" img-fluid mx-auto mt-3" style="height: 200px">
                                </div>
                                <div class="col-7 alert bg-lightblue mx-auto mt-3">
                                    <p class="text">Menu ini adalah menu untuk melakukan pendaftaran pemecahan sertifikat. Klik masuk untuk lanjutkan</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="<?= base_url('warga/pemecahan'); ?>" class="btn btn-primary">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- small card -->
                <div class="small-box ">
                    <div class="inner mb-1">
                        <br>
                        <h6 style="text-align: center;" class="text-bold text-uppercase">Pendaftaran Pelayanan Penggabungan Sertifikat</h6>



                    </div>
                    <div class="icon">
                        <i class="fas fa-file"></i>
                    </div>
                    <div class="row mx-auto">
                        <a href="" class="btn btn-primary mx-auto mb-3" data-toggle="modal" data-target="#penggabungan">More info </a>
                    </div>


                </div>
                <!-- Modal -->
                <div class="modal fade" id="penggabungan" tabindex="-1" role="dialog" aria-labelledby="menubaruTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Info</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row mx-auto">

                                    <img src="<?= base_url('img/img/pecah.svg'); ?>" alt="" class=" img-fluid mx-auto mt-3" style="height: 200px">
                                </div>
                                <div class="col-7 alert bg-lightblue mx-auto mt-3">
                                    <p class="text">Menu ini adalah menu untuk melakukan pendaftaran pemecahan sertifikat. Klik masuk untuk lanjutkan</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="#" class="btn btn-primary">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- small card -->
                <div class="small-box ">
                    <div class="inner mb-1">
                        <br>
                        <h6 style="text-align: center;" class="text-bold text-uppercase">Pendaftaran Pelayanan Pemisahan Sertifikat </h6>



                    </div>
                    <div class="icon">
                        <i class="fas fa-file"></i>
                    </div>
                    <div class="row mx-auto">
                        <a href="" class="btn btn-primary mx-auto mb-3" data-toggle="modal" data-target="#penggabungan">More info </a>
                    </div>


                </div>
                <!-- Modal -->
                <div class="modal fade" id="penggabungan" tabindex="-1" role="dialog" aria-labelledby="menubaruTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Info</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row mx-auto">

                                    <img src="<?= base_url('img/img/pecah.svg'); ?>" alt="" class=" img-fluid mx-auto mt-3" style="height: 200px">
                                </div>
                                <div class="col-7 alert bg-lightblue mx-auto mt-3">
                                    <p class="text">Menu ini adalah menu untuk melakukan pendaftaran pemecahan sertifikat. Klik masuk untuk lanjutkan</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="#" class="btn btn-primary">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- small card -->
                <div class="small-box ">
                    <div class="inner mb-1">
                        <br>
                        <h6 style="text-align: center;" class="text-bold text-uppercase">Pendaftaran Pelayanan Pengembalian Batas Sertifikat</h6>



                    </div>
                    <div class="icon">
                        <i class="fas fa-file"></i>
                    </div>
                    <div class="row mx-auto">
                        <a href="" class="btn btn-primary mx-auto mb-3" data-toggle="modal" data-target="#penggabungan">More info </a>
                    </div>


                </div>
                <!-- Modal -->
                <div class="modal fade" id="penggabungan" tabindex="-1" role="dialog" aria-labelledby="menubaruTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Info</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row mx-auto">

                                    <img src="<?= base_url('img/img/pecah.svg'); ?>" alt="" class=" img-fluid mx-auto mt-3" style="height: 200px">
                                </div>
                                <div class="col-7 alert bg-lightblue mx-auto mt-3">
                                    <p class="text">Menu ini adalah menu untuk melakukan pendaftaran pemecahan sertifikat. Klik masuk untuk lanjutkan</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="#" class="btn btn-primary">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- small card -->
                <div class="small-box ">
                    <div class="inner mb-1">
                        <br>
                        <h6 style="text-align: center;" class="text-bold text-uppercase">Pendaftaran Pelayanan Risalah Pertimbangan Teknis Pertanahan</h6>



                    </div>
                    <div class="icon">
                        <i class="fas fa-file"></i>
                    </div>
                    <div class="row mx-auto">
                        <a href="" class="btn btn-primary mx-auto mb-3" data-toggle="modal" data-target="#penggabungan">More info </a>
                    </div>


                </div>
                <!-- Modal -->
                <div class="modal fade" id="penggabungan" tabindex="-1" role="dialog" aria-labelledby="menubaruTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Info</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row mx-auto">

                                    <img src="<?= base_url('img/img/pecah.svg'); ?>" alt="" class=" img-fluid mx-auto mt-3" style="height: 200px">
                                </div>
                                <div class="col-7 alert bg-lightblue mx-auto mt-3">
                                    <p class="text">Menu ini adalah menu untuk melakukan pendaftaran pemecahan sertifikat. Klik masuk untuk lanjutkan</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="#" class="btn btn-primary">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.card -->
        </div>




    </div>


    <!--   <div class="row pt-5 pb-3 justify-content-end">

        <div class="col-lg-4 col-8 mx-auto">
            <img src="<?= base_url('img/img/home2.svg'); ?>" alt="" class=" img-fluid mt-3 mb-3">
        </div>
    </div> -->



    <!-- /.card -->

</section>

<!-- /.content -->