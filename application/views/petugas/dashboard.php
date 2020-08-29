<!-- Main content -->
<?php
/*  $conn = mysqli_connect("localhost", "root", "", "bpn"); */

$conn = mysqli_connect("localhost", "root", "", "bpn");


$warga = mysqli_query($conn, "SELECT * FROM warga");
$persil = mysqli_query($conn, "SELECT * FROM persil");
$verif = mysqli_query($conn, "SELECT * FROM persil WHERE verifikasi='sudah'");
$row_w = mysqli_num_rows($warga);
$row_p = mysqli_num_rows($persil);
$row_v = mysqli_num_rows($verif);


?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mx-auto">
            <div class="col-8 col-sm-2">
                <h5>Selamat Datang</h5>
                <p class="text-muted mb-3" id='time'></p>
            </div>

        </div>
        <div class="row col-12 col-lg-10 mx-auto">
            <div class="col-12 col-lg-4">
                <div class="info-box">
                    <span class="info-box-icon bg-primary">
                        <i class="far fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total User </span>
                        <span class="info-box-number">14</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-lg-4">
                <div class="info-box">
                    <span class="info-box-icon bg-primary"><i class="far fa-map"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Permohonan</span>
                        <span class="info-box-number">20</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-lg-4">
                <div class="info-box">
                    <span class="info-box-icon bg-primary"><i class="fas fa-tasks"></i></span>

                    <div class="info-box-content d-flex flex-column">
                        <p class="info-box-text">Total Permohonan Terverifikasi</p>
                        <p class="info-box-number">10</p>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-8 col-sm-6 mx-auto">
                <h3 class="text-center mb-2">Halaman Utama</h3>
                <img src="<?= base_url('img/img/admin.svg'); ?>" class="mx-auto img-fluid d-flex" style="width: 300px;">
            </div>
        </div> -->
    </div><!-- /.container-fluid -->
</section>
<section class="content">

    <!-- Default box -->
    <div class="container-fluid">


        <!--   <div class="row col-8 mx-auto mt-3">
            <div class="col-lg-4">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $row_w; ?></h3>

                        <p>Jumlah Warga Terdaftar</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="small-box bg-warning">
                    <div class="inner">

                        <h3><?= $row_p; ?></h3>

                        <p>Jumlah Persil Terdaftar</p>

                    </div>
                    <div class="icon">
                        <i class="fas fa-map"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3><?= $row_v; ?></h3>

                        <p>Jumlah Persil Terverifikasi</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

        </div> -->


        <div class="row col-8 mx-auto mt-3">

            <div class="row">


                <div class="col-lg-4">
                    <!-- small card -->
                    <div class="small-box bg-primary">
                        <div class="inner mb-1">
                            <br>
                            <h5 style="text-align: center;" class="text-light">Permohonan Sertifikat Baru</h5> <br>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="row mx-auto">
                            <a href="" class="btn btn-light mx-auto mb-3" data-toggle="modal" data-target="#penggabungan">More info </a>
                        </div>


                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- small card -->
                    <div class="small-box bg-primary">
                        <div class="inner mb-1">
                            <br>
                            <h5 style="text-align: center;">Permohonan Penggabungan Sertifikat</h5>



                        </div>
                        <div class="icon">
                            <i class="fas fa-folder"></i>
                        </div>
                        <div class="row mx-auto">
                            <a href="" class="btn btn-light mx-auto mb-3" data-toggle="modal" data-target="#penggabungan">More info </a>
                        </div>


                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- small card -->
                    <div class="small-box bg-primary">
                        <div class="inner mb-1">
                            <br>
                            <h5 style="text-align: center;">Permohonan Pemecahan Sertifikat</h5>



                        </div>
                        <div class="icon">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <div class="row mx-auto">
                            <a href="" class="btn btn-light mx-auto mb-3" data-toggle="modal" data-target="#penggabungan">More info </a>
                        </div>


                    </div>
                </div>
            </div>


        </div>


        <!-- /.card -->

</section>

<!-- /.content -->