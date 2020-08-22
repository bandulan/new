<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Persil Yang Sedang Diproses
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
                            <th style="text-align: center;">ID Pemilik</th>
                            <th style="text-align: center;">Alamat</th>
                            <th style="text-align: center;">Kegiatan</th>
                            <th style="text-align: center;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($persil as $p) : ?>
                            <tr>
                                <td><?= $p['id_pemilik']; ?></td>
                                <td><?= $p['alamat_persil']; ?></td>
                                <td><?= $p['kegiatan']; ?></td>
                                <td><?= $p['verifikasi']; ?></td>


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