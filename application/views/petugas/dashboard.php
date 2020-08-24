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
                <img src="<?= base_url('img/img/admin.svg'); ?>" class="mx-auto img-fluid d-flex" style="width: 300px;">
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">



    <!-- Default box -->


    <div class="container-fluid">

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
        <div class="row col-11 mx-auto mt-3">
            <div class="col-lg-4">
                <!-- small card -->
                <div class="small-box bg-success">
                    <div class="inner"><br>
                        <h3><?= $row_w; ?></h3>

                        <p>Jumlah Warga Terdaftar</p><br>
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
                <!-- small card -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <br>
                        <h3><?= $row_p; ?></h3>

                        <p>Jumlah Persil Terdaftar</p>
                        <br>
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
                <!-- small card -->
                <div class="small-box bg-primary">
                    <div class="inner"><br>
                        <h3><?= $row_v; ?></h3>

                        <p>Jumlah Persil Terverifikasi</p><br>
                    </div>
                    <div class="icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>



            <!-- /.card -->
        </div>


    </div>


    <!-- /.card -->

</section>

<!-- /.content -->