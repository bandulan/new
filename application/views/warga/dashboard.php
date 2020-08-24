<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mx-auto">
            <div class="col-8 col-sm-2">
                <h5>Selamat Datang</h5>
                <p class="text-muted mb-3" id='time'></p>
            </div>



        </div>
        <div class="row">
            <div class="col-8 col-sm-6 mx-auto">
                <h3 class="text-center mb-2">Halaman Utama</h3>
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
                <div class="small-box bg-info">
                    <div class="inner mb-1">
                        <br>
                        <h5 style="text-align: center;">Pendaftaran Sertifikat Baru</h5>



                    </div>
                    <div class="icon">
                        <i class="fas fa-map fa-xs"></i>
                    </div>
                    <div class="row mx-auto">
                        <a href="" class="btn btn-light mx-auto mb-3" data-toggle="modal" data-target="#menubaru">More info </a>
                    </div>

                </div>
                <!-- Modal -->
                <div class="modal fade" id="menubaru" tabindex="-1" role="dialog" aria-labelledby="menubaruTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Info Menu</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align: center;">Menu ini adalah menu pendaftaran pengukuran dan pemetaan bidang tanah yg belum bersertipikat </p>

                                <div class="row mx-auto">

                                    <img src="<?= base_url('img/img/new.svg'); ?>" alt="" class=" img-fluid mx-auto mt-3" style="height: 120px">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="<?= base_url('warga/daftarSertifikat'); ?>" class="btn btn-primary">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- small card -->
                <div class="small-box bg-info">
                    <div class="inner mb-1">
                        <br>
                        <h5 style="text-align: center;">Pendaftaran Pemecahan Sertifikat</h5>



                    </div>
                    <div class="icon">
                        <i class="fas fa-external-link-alt fa-xs"></i>
                    </div>
                    <div class="row mx-auto">
                        <a href="" class="btn btn-light mx-auto mb-3" data-toggle="modal" data-target="#pemecahan">More info </a>
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
                                <p style="text-align: center;">Menu ini adalah menu pemecahan sertifikat </p>

                                <div class="row mx-auto">

                                    <img src="<?= base_url('img/img/pecah.svg'); ?>" alt="" class=" img-fluid mx-auto mt-3" style="height: 150px">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="<?= base_url('warga/daftarPemecahan'); ?>" class="btn btn-primary">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- small card -->
                <div class="small-box bg-info">
                    <div class="inner mb-1">
                        <br>
                        <h5 style="text-align: center;">Pendaftaran Penggabungan Sertifikat</h5>



                    </div>
                    <div class="icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <div class="row mx-auto">
                        <a href="" class="btn btn-light mx-auto mb-3" data-toggle="modal" data-target="#penggabungan">More info </a>
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
                                <p style="text-align: center;">Menu ini adalah menu Penggabungan sertifikat </p>

                                <div class="row mx-auto">

                                    <img src="<?= base_url('img/img/gabung.svg'); ?>" alt="" class=" img-fluid mx-auto mt-3" style="height: 150px">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="" class="btn btn-primary">Masuk</a>
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