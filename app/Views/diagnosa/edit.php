<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Edit Diagnosa </b></h2>
            <p class="dashboard-subtitle">
                Silakan ubah diagnosa di bawah ini, untuk merubah diagnosa.
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row mt-3">
                <div class="col-12 mt-4 mb-4">
                    <a href="<?= base_url() ?>diagnosa" class="btn btn-outline-warning"><span><i class="fa-solid fa-arrow-left"></i></span> Kembali</a>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h6>Edit Diagnosa</h6>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" action="<?= base_url() ?>/diagnosa/edit/<?= $d['id_diagnosa']; ?>" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom002">Nama Diagnosis</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="keterangan" value="<?= $d['keterangan']; ?>" id="validationCustom002" placeholder="" req>

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