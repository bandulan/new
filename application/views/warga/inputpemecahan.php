<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <br>
    <h1 align="center" class="">Pendaftaran Proses Pemecahan Sertifikat</h1>
    <br>
    <div class="row">

        <div class="col-lg-6 mx-auto">

            <a href="<?= base_url(); ?>" class="btn btn-danger mb-2"><i class="fa fa-backward"></i> Kembali</a>
            <form action="" method="post">
                <div class="form-group">
                    <label for="id_pemilik">id_pemilik</label>
                    <input type="number" class="form-control" id="id_pemilik" name="id_pemilik" value="12" readonly>
                </div>

                <!-- <div class="form-group">
                    <label for="nib">NIB</label>
                    <input type="number" class="form-control" id="nib" name="nib" placeholder="NIB">
                </div> -->
                <div class="form-group">
                    <label for="letak">Alamat / Letak Tanah</label>
                    <input type="text" class="form-control" id="letak" name="letak" placeholder="Letak Tanah">
                </div>
                <!-- <div class="form-group">
                    <label for="kel">Desa</label>
                    <input type="text" class="form-control" name="kel" id="kel" placeholder="Desa">
                </div>

                <div class="form-group">
                    <label for="kec">Kecamatan</label>
                    <input type="text" class="form-control" name="kec" id="kec" placeholder="Kecamatan">
                </div>
                <div class="form-group">
                    <label for="kab">Kabupaten</label>
                    <input type="text" class="form-control" name="kab" id="kab" placeholder="Kabupaten">
                </div>
                <div class="form-group">
                    <label for="luas">Luas</label>
                    <input type="number" class="form-control" name="luas" id="luas" placeholder="Luas Awal Tanah">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Pemecahan</label>
                    <textarea class="form-control" rows="5" id="deskripsi" placeholder="Alasan atau deskripsi pemecahan"></textarea>
                </div> -->

                <div class="form_group">

                    <input type="text" class="form-control" name="status" id="status" value="Menunggu Verifikasi" readonly>
                </div>


                <div class="row">
                    <button type="submit" class="btn btn-primary mt-2 mx-auto" name="tambah">Daftar</button>
                </div>


            </form>
        </div>
    </div>
    <br>
    <br>

    <!-- /.card -->

</section>
<!-- /.content -->