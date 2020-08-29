<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <br>
    <h1 align="center" class="">Daftar Sertifikat</h1>
    <br>
    <div class="row">

        <div class="col-lg-6 col-11 mx-auto">

            <a href="<?= base_url('warga'); ?>" class="btn btn-danger mb-2"><i class="fa fa-backward"></i> Kembali</a>
            <form action="" method="post">


                <input class="form-control" type="text" name="id_pemilik" id="id_pemilik" value="12" hidden>


                <input type="text" class="form-control" name="kegiatan" id="kegiatan" value="Pendaftaran Baru" hidden>


                <input type="text" class="form-control" name="verifikasi" id="verifikasi" value="Menunggu Verifikasi" hidden>

                <div class="form-group">
                    <label for="alamat_persil">Alamat</label>
                    <input type="text" class="form-control" id="alamat_persil" name="alamat_persil" placeholder="Alamat Persil" required>
                </div>

                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <select id="kecamatan" name="kecamatan" class="form-control">
                        <option selected>Pilih Kecamatan...</option>
                        <option value="One">One</option>
                        <option value="Two">Two</option>
                        <option value="Three">Three</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="kelurahan">Kelurahan</label>
                    <select id="kelurahan" name="kelurahan" class="form-control">
                        <option selected>Pilih Kelurahan...</option>
                        <option value="One">One</option>
                        <option value="Two">Two</option>
                        <option value="Three">Three</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="batas_utara">Batas Utara</label>
                    <input class="form-control" type="text" name="batas_utara" id="batas_utara" placeholder="Tetangga / Batas Sebelah Utara">
                </div>

                <div class="form-group">
                    <label for="batas_selatan">Batas Selatan</label>
                    <input class="form-control" type="text" name="batas_selatan" id="batas_selatan" placeholder="Tetangga / Batas Sebelah Selatan">
                </div>

                <div class="form-group">
                    <label for="batas_timur">Batas Timur</label>
                    <input class="form-control" type="text" name="batas_timur" id="batas_timur" placeholder="Tetangga / Batas Sebelah Timur">
                </div>

                <div class="form-group">
                    <label for="batas_barat">Batas Barat</label>
                    <input class="form-control" type="text" name="batas_barat" id="batas_barat" placeholder="Tetangga / Batas Sebelah Barat">
                </div>
                <div class="form-group">
                    <label for="luas">Luas Tanah</label>
                    <input class="form-control" type="number" name="luas" id="luas" placeholder="Luas Berdasarkan Sertifikat">
                </div>

                <button type="submit" class="btn btn-primary float-right" name="tambah">Daftar</button>
            </form>
        </div>
    </div>
    <br>
    <br>

    <!-- /.card -->

</section>
<!-- /.content -->