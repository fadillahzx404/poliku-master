<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Edit Data obat <b><?= $o['nama'] ?></b></h2>
            <p class="dashboard-subtitle">
                Silakan ubah data obat di bawah ini, untuk merubah data obat.
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
                            <h5>Edit Obat</h5>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" action="<?= base_url() ?>/obat/edit/<?= $o['id_obat']; ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom002">Nama</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nama" value="<?= $o['nama']; ?>" id="validationCustom002" placeholder="" req>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom001">Harga</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="harga" value="<?= $o['harga']; ?>" id="validationCustom001" placeholder="" req>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="validationCustom004">Stok</label>
                                        <div class="input-group">
                   a                         <input type="text" class="form-control" name="stok" value="<?= $o['stok']; ?>" id="validationCustom004" placeholder="" req>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="validationCustom003">Expired</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" name="expired" value="<?= $o['expired']; ?>" id="validationCustom003" placeholder="Mo" req>

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