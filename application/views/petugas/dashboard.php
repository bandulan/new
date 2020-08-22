<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1>Selamat Datang
                </h1>





                <h4 class="text-muted" id='time'></h4>
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
        <div class="row col-11 mx-auto mt-5">
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