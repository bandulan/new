<!-- Main content -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Warga
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

                            <th style="text-align: center;">KTP</th>
                            <th style="text-align: center;">Nama</th>
                            <th style="text-align: center;">Alamat</th>
                            <th style="text-align: center;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($warga as $p) : ?>
                            <tr>

                                <td><?= $p['ktp']; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td><?= $p['alamat']; ?></td>
                                <td style="text-align: center;">
                                    <a href="<?= base_url('admin/detailpersil/');  ?><?= $p['id_warga'] ?>" class="btn btn-success btn-sm"><i class="fa fa-user"> </i> &nbsp; Detail</a>


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