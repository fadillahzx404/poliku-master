
<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Rekam Medis<b> <?= $pasien['nama']?></b></h2>
            <p class="dashboard-subtitle">
                Silakan isi atau edit data rekam medis pasien.
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row mt-3">
                <div class="col-12 mt-4 mb-4">
                    <a href="<?= base_url() ?>rekam_medis/dokter" class="btn btn-outline-warning"><span><i class="fa-solid fa-arrow-left"></i></span> Kembali</a>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h5>Data Rekam Medis</h5>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation clearfix" method="post" action="<?= base_url() ?>rekam_medis/rekam_medis_save" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>Nama Pasien</label>
                                <div class="input-group">
                                    <select class="form-control" name="id_pasien" id="validationCustom220" required>
                                        <!-- <option value="">Pilih Pasien</option> -->
                                        <option value="<?= $pasien['id_pasien'] ?>"><?= $pasien['nama'] ?></option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Berat Badan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="berat_badan" value="<?= $medis['berat_badan'] ?>" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Saturasi Oksigen</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="saturasi_oksigen" value="<?= $medis['saturasi_oksigen'] ?>" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Suhu Badan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="suhu_badan" value="<?= $medis['suhu_badan'] ?>" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Golongan Darah</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="golongan_darah" value="<?= $medis['golongan_darah'] ?>" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Diabetes</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="diabetes" value="<?= $medis['diabetes'] ?>" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Haemopilia</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="haemopilia" value="<?= $medis['haemopilia'] ?>" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Tekanan Darah</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="tekanan_darah" value="<?= $medis['tekanan_darah'] ?>" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Sakit Jantung</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="sakit_jantung" value="<?= $medis['sakit_jantung'] ?>" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Riwayat Penyakit Lain</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="riwayat_penyakit_lain" value="<?= $medis['riwayat_penyakit_lain'] ?>" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Alergi Obat</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="alergi_obat" value="<?= $medis['alergi_obat'] ?>" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Alergi Makanan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="alergi_makanan" value="<?= $medis['alergi_makanan'] ?>" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Keterangan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="keterangan" value="<?= $medis['keterangan'] ?>" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                        </div>
                        <!-- <button class="btn btn-warning mt-4 d-inline w-20" type="reset">Reset</button> -->
                        <button class="btn btn-success float-right" name="submit" value="submit" type="submit">Simpan</button>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>