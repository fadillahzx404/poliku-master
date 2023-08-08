<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Tambah Data Tarif</h2>
            <p class="dashboard-subtitle">
                Silakan isi data tidakan serta tarif di bawah ini.
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row mt-3">
                <div class="col-12 mt-4 mb-4">
                    <a href="<?= base_url() ?>tarif" class="btn btn-outline-warning"><span><i class="fa-solid fa-arrow-left"></i></span> Kembali</a>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Obat</h5>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" action="<?= base_url() ?>tarif/tambah" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Isi form tindakan dan tarif</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom002">UPF</label>
                                        <div class="input-group mt-2">
                                            <input type="text" class="form-control" name="upf" id="validationCustom002" placeholder="" req>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom002">Nama Tindakan</label>
                                        <div class="input-group mt-2">
                                            <input type="text" class="form-control" name="nama_tindakan" id="validationCustom002" placeholder="" req>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom002">Perawatan</label>
                                        <div class="input-group mt-2">
                                            <input type="text" class="form-control" name="perawatan" id="validationCustom002" placeholder="" req>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom002">Tarif</label>
                                        <div class="input-group mt-2">
                                            <input type="text" class="form-control" name="tarif" id="validationCustom002" placeholder="" req>

                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-warning mt-4 d-inline w-20" type="reset">Reset</button>
                                <button class="btn btn-success mt-4 d-inline w-20" name="submit" value="submit" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>