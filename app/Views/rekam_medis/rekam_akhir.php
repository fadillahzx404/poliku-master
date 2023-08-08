<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Rekam Medis<b></b></h2>
            <p class="dashboard-subtitle">
                Silakan isi atau edit data rekam medis pasien.
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row mt-3">
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="ms-panel-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="container p-3" style="background-color: #DDE6ED;">
                                                    <label>
                                                        <h5>Anamnesa</h5>
                                                    </label>
                                                    <div class="input-group">
                                                        <label for="">
                                                            <h6><?= $periksa['anamnesa'] ?></h6>
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-2">
                                                <div class="container p-3" style="background-color: #DDE6ED;">
                                                    <label>
                                                        <h5>Diagnosa :</h5>
                                                    </label>
                                                    <div class="input-group">
                                                        <label for="">
                                                            <h6><?= $periksa['keterangan'] ?></h6>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mt-3">
                                                <div class="table-responsive">
                                                    <h5>Data Pemeriksaan</h5>
                                                    <table class="table table-striped thead-primary w-100">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="2">Deskripsi</th>
                                                                <th>Biaya</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="3">Tindakan :</td>
                                                            </tr>
                                                            <?php $no = 1;
                                                            foreach ($periksa_tindakan as $d) : ?>
                                                                <tr>
                                                                    <td width="10%"></td>
                                                                    <td>
                                                                        - <?= $d['nama_tindakan'] ?>
                                                                    </td>
                                                                    <td class="text-right"><?= $d['tarif'] ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                            <tr>
                                                                <td colspan="3">Obat :</td>
                                                            </tr>
                                                            <?php $no = 1;
                                                            foreach ($periksa_obat as $d) : ?>
                                                                <tr>
                                                                    <td width="10%"></td>
                                                                    <td>- <?= $d['nama'] ?></td>
                                                                    <td class="text-right"><?= $d['harga'] ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <form class="needs-validation clearfix" method="post" action="<?= base_url() ?>rekam_medis/rekam_akhir/<?= $periksa['id_periksa'] ?>" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-2">
                                                            <label>Diskon</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="diskon" id="validationCustom002" placeholder="">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-2">




                                                            <label>Tanggal Pemeriksaan</label>
                                                            <div class="input-group">

                                                                <div class="input-group date mt-2">
                                                                    <input type="text" class="form-control" id="datepicker" placeholder="Tahun/Bulan/Hari" name="tgl_periksa" required>
                                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-2">
                                                            <label>Note</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="note" id="validationCustom002" placeholder="">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-2">
                                                            <label>Rekomendasi Perawatan</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="rekomendasi" id="validationCustom002" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <button class="btn btn-warning mt-4 d-inline w-20" type="reset">Reset</button> -->
                                                    <button class="btn btn-success float-right" name="submit" value="submit" type="submit">Submit</button>
                                                </form>
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
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('#tindakan').DataTable();
    });
    $(document).ready(function() {
        $('#obat').DataTable();
    });
</script>
<?= $this->endSection(); ?>