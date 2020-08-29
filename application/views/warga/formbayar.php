<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <br>
    <h1 align="center" class="">Form Pembayaran</h1>
    <br>
    <div class="row">

        <div class="col-lg-6 mx-auto">

            <a href="<?= base_url('warga/tabeltagihan'); ?>" class="btn btn-danger"><i class="fa fa-backward"></i> Kembali</a>
            <form action="" method="post">

                <label for="id_persil">ID Persil</label>
                <input class="form-control" type="text" name="id_persil" id="id_persil" value="<?= $tagihan['id_persil']; ?>" readonly>

                <label for="id_pemilik">ID Pemilik</label>
                <input class="form-control" type="text" name="id_pemilik" id="id_pemilik" value="<?= $tagihan['id_pemilik']; ?>" readonly>

                <label for="kegiatan">Kegiatan</label>
                <input type="text" class="form-control" name="kegiatan" id="kegiatan" value="<?= $tagihan['kegiatan']; ?>" readonly>



                <div class="form-group">
                    <label for="status">Status Pembayaran</label>
                    <input type="text" class="form-control" id="status" name="status" value="Lunas" readonly>
                </div>

                <label for="harga">Jumlah Tagihan</label>
                <input type="number" class="form-control" name="harga" id="harga" value="<?= $tagihan['harga']; ?>" readonly>

                <button type="submit" class="btn btn-primary mt-3" name="tambah">Input Tagihan</button>
            </form>
        </div>
    </div>
    <br>
    <br>

    <!-- /.card -->

</section>
<!-- /.content -->