<?php

$conn   = mysqli_connect("localhost", "root", "", "bpn"); //koneksi (servername,username,pass,dbname)
$r      = mysqli_query($conn, "SELECT * FROM warga WHERE id_warga='1'");    //pilih tabel

//tes koneksi


?>


<!-- Main content -->

<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mx-auto">
            <div class="col">
                <h1>Profile Warga</h1>
                <a href="<?= base_url('warga'); ?>" class="btn btn-primary mt-3"><i class="fa fa-angle-left"></i>&nbsp; Kembali</a>
                <!-- <a href="javascript:history.back()" class="btn btn-primary mt-3"><i class="fa fa-angle-left"></i>&nbsp; Kembali</a> -->


            </div>
        </div><!-- /.container-fluid -->
</section>
<section class="content">



    <!-- Default box -->


    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-lg-3 mx-auto">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h4 style="text-align: center;">Profil Warga</h4>
                    </div>
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="https://via.placeholder.com/300" height="300px">
                        </div>

                        <h3 class="profile-username text-center"></h3>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>ID Warga</b> <a class="float-right"></a>
                            </li>
                            <li class="list-group-item">
                                <b>NIK</b> <a class="float-right"></a>
                            </li>
                            <li class="list-group-item">
                                <b>NO KK</b> <a class="float-right"></a>
                            </li>
                            <li class="list-group-item">
                                <b>Alamat</b> <a class="float-right"></a>
                            </li>
                            <li class="list-group-item">
                                <b>Agama</b> <a class="float-right"></a>
                            </li>
                            <li class="list-group-item">
                                <b>Pekerjaan</b> <a class="float-right"></a>
                            </li>
                            <li class="list-group-item">
                                <b>Tempat Lahir</b> <a class="float-right"></a>
                            </li>
                            <li class="list-group-item">
                                <b>Umur</b> <a class="float-right"></a>
                            </li>

                        </ul>


                    </div>
                    <a href="#" class="btn btn-large btn-primary">Edit Profile</a>
                    <!-- /.ca clasrd-body -->
                </div>

            </div>
            <!-- <div class="col-lg-9">

                <div class="col table-responsive">
                    <h3>Persil Yang Dimiliki</h3>
                    <table class="table table-bordered mx-auto" id="dataa">
                        <thead>
                            <tr>
                                <th style="text-align: center;">NIB</th>
                                <th style="text-align: center;">Alamat</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <?php
                        $id = 1;
                        $sql = mysqli_query($conn, "SELECT * FROM `persil` WHERE `id_pemilik`='$id'");


                        ?>
                        <tbody>
                            <?php foreach ($sql as $s) :  ?>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;">

                                        <a href="" class="btn btn-success btn-sm"><i class="fa fa-user"> </i> &nbsp; Detail</a>

                                </tr>




                            <?php endforeach;  ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card -->
        </div> -->
    </div>
    <!-- /.card -->

</section>

<!-- /.content -->