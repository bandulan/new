<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Persil
                </h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">




    <div class="container-fluid">



        <div class="row">

            <div class="col-lg-12 table-responsive mx-auto">


                <table id="dataa" class="col-sm-12table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;">id persil</th>

                            <th style="text-align: center;">id pemilik</th>
                            <th style="text-align: center;">Alamat</th>
                            <th style="text-align: center;">Kegiatan</th>

                            <th style="text-align: center;">Status</th>
                            <th style="text-align: center;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($persil as $p) : ?>
                            <tr>
                                <td><?= $p['id_persil']; ?></td>
                                <td><?= $p['id_pemilik']; ?></td>
                                <td><?= $p['alamat_persil']; ?></td>
                                <td><?= $p['kegiatan']; ?></td>
                                <td><?= $p['verifikasi']; ?></td>
                                <td style="text-align: center;">
                                    <a href="<?= base_url('admin/formtagihan/');  ?><?= $p['id_persil'] ?>" class="btn btn-info btn-sm"><i class="fas fa-money-bill"></i> </i> &nbsp; Input Tagihan</a>


                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>




            <!-- /.card -->
        </div>


    </div>


    <!-- /.card -->

</section>

<!-- /.content -->