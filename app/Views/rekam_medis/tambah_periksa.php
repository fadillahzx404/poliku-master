<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Rekaman Medis</h2>
            <p class="dashboard-subtitle">
                Silakan isi data Amnesia Dan Diagnosa.
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row mt-3">
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-body">
                            <form class="needs-validation clearfix" method="post" action="<?= base_url() ?>/rekam_medis/tambah_periksa/<?= $id_pasien ?>" enctype="multipart/form-data">
                                <input type="hidden" name="id_pasien" value="<?= $id_pasien ?>">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label>Anamnesa</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="anamnesa" id="validationCustom002" placeholder="" required>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label>Diagnosa</label>
                                        <div class="input-group">
                                            <select class="form-control" name="id_diagnosa" id="validationCustom220" required>
                                                <option value="">Pilih Diagnosa</option>
                                                <?php foreach ($diagnosa as $d) : ?>
                                                    <option value="<?= $d['id_diagnosa'] ?>"><?= $d['keterangan'] ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <!-- <button class="btn btn-warning mt-4 d-inline w-20" type="reset">Reset</button> -->
                                <button class="btn btn-success mt-3" name="submit" value="submit" type="submit">Lanjutkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>