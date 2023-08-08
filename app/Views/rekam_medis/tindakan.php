<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>

<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Rekamann Medis</h2>
            <p class="dashboard-subtitle">
                Silakan isi data tindakan dan data Obat.
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row mt-3">
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-body">
                            <div class="ms-panel-body">
                                <div class="row">
                                    <div class="col-md-6 mb-5">
                                        <div class="container" style="background-color: #e9ecef;border-radius: 8px;">
                                            <label>Anamnesa</label>
                                            <div class="input-group">
                                                <label for=""><b><?= $periksa['anamnesa'] ?></b></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="container" style="background-color:#e9ecef;border-radius: 8px;">
                                            <label>Diagnosa :</label>
                                            <div class="input-group">
                                                <label for=""><b><?= $periksa['keterangan'] ?></b></label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <div class="col-md-12">
                                                <h6>Data Tindakan
                                                </h6>
                                                <button type="button" class="btn btn-warning btn-sm mb-4" data-bs-toggle="modal" data-bs-target="#tindakan_add">
                                                    <i class="fa fa-plus-circle"></i> Tambah Data tindakan
                                                </button>
                                            </div>
                                            <!-- Button trigger modal -->

                                            <div class="modal fade" id="tindakan_add" tabindex="-1" role="dialog" aria-labelledby="tindakan_add" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-warning">
                                                            <h3 class="modal-title">Pilih Tindakan</h3>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <form method="post" action="<?= base_url() ?>rekam_medis/tindakan_add">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="id_periksa" value="<?= $periksa['id_periksa'] ?>">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label>Tindakan</label>
                                                                        <div class="input-group">
                                                                            <select class="form-select" name="tindakan" required>
                                                                                <option value="">Pilih Tindakan</option>
                                                                                <?php foreach ($tindakan as $d) : ?>
                                                                                    <option value="<?= $d['id_tarif'] ?>"><?= $d['nama_tindakan'] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <table id="tindakan" class="table table-striped thead-primary w-100">
                                                <thead>
                                                    <tr>
                                                        <th width="5%"></th>
                                                        <th>Tindakan</th>
                                                        <th>Biaya</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($periksa_tindakan as $d) : ?>
                                                        <tr>
                                                            <td>
                                                                <a href="<?= base_url() ?>rekam_medis/tindakan_min/<?= $periksa['id_periksa'] ?>/<?= $d['id_periksa_tindakan'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda ingin hapus data?');"><i class="fa-solid fa-minus"></i></a>
                                                            </td>
                                                            <td><?= $d['nama_tindakan'] ?></td>
                                                            <td><?= $d['tarif'] ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <div class="col-md-12">

                                                <h6>Data Obat </h6>
                                                <button data-bs-toggle="modal" data-bs-target="#obat_add" class="btn btn-warning btn-sm mb-4"><i class="fa fa-plus-circle"></i> Tambah Data Obat</button>
                                            </div>
                                            <div class="modal fade" id="obat_add" tabindex="-1" role="dialog" aria-labelledby="obat_add" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-warning">
                                                            <h3 class="modal-title">Pilih Obat</h3>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <form method="post" action="<?= base_url() ?>rekam_medis/obat_add">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="id_periksa" value="<?= $periksa['id_periksa'] ?>">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label>Obat</label>
                                                                        <div class="input-group">
                                                                            <select class="form-control" name="obat" required>
                                                                                <option value="">Pilih Obat</option>
                                                                                <?php foreach ($obat as $d) : ?>
                                                                                    <option value="<?= $d['id_obat'] ?>"><?= $d['nama'] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <table id="obat" class="table table-striped thead-primary w-100">
                                                <thead>
                                                    <tr>
                                                        <th width="5%"></th>
                                                        <th>Obat</th>
                                                        <th>Harga</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($periksa_obat as $d) : ?>
                                                        <tr>
                                                            <td>
                                                                <a href="<?= base_url() ?>rekam_medis/obat_min/<?= $periksa['id_periksa'] ?>/<?= $d['id_periksa_obat'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda ingin hapus data?');"><i class="fa-solid fa-minus"></i></a>
                                                            </td>
                                                            <td><?= $d['nama'] ?></td>
                                                            <td><?= $d['harga'] ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <a href="<?= base_url() ?>rekam_medis/rekam_akhir/<?= $periksa['id_periksa'] ?>" class="btn btn-success float-right mt-3">Lanjutkan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>