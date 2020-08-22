<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tagihan
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

                            <th style="text-align: center;">Kegiatan</th>
                            <th style="text-align: center;">Jumlah</th>
                            <th style="text-align: center;">Deskripsi</th>
                            <th style="text-align: center;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tagihan as $p) : ?>
                            <tr>
                                <td><?= $p['kegiatan']; ?></td>
                                <td><?= $p['jumlah']; ?></td>
                                <td><?= $p['deskripsi']; ?></td>
                                <td><?= $p['status']; ?></td>


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