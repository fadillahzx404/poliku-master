<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Tambah Data Obat Baru</h2>
            <p class="dashboard-subtitle">
                Silakan isi data obat di bawah ini, untuk menambahkan obat.
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row mt-3">
                <div class="col-12 mt-4 mb-4">
                    <a href="<?= base_url() ?>obat" class="btn btn-outline-warning"><span><i class="fa-solid fa-arrow-left"></i></span> Kembali</a>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Obat</h5>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" action="<?= base_url() ?>obat/tambah" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <h5>Silakan Isi form disini</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom002">Nama</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nama" id="validationCustom002" placeholder="" req>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom001">Harga</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="harga" id="validationCustom001" placeholder="" req>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="validationCustom004">Stok</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="stok" id="validationCustom004" placeholder="" req>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="validationCustom003">Expired</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" name="expired" id="validationCustom003" placeholder="Mo" req>

                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-warning mt-4 d-inline w-20" type="reset">Reset</button>
                                <button class="btn btn-primary mt-4 d-inline w-20" name="submit" value="submit" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>