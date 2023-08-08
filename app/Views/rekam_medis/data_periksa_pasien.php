<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Rekam Medis <b><?= $nama_pasien['nama'] ?></b></h2>
            <p class="dashboard-subtitle">
                Data rekam medis di Benings!
            </p>
        </div>
        <div class="dashboard-content">

            <div class="row mt-3">
                <div class="col-12 mt-4 mb-4">
                    <a href="<?= base_url() ?>rekam_medis/dokter" class="btn btn-outline-warning"><span><i class="fa-solid fa-arrow-left"></i></span> Kembali</a>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table-dashboard" class="table table-striped pt-3 pb-3" style="width:100%">

                                    <thead>
                                        <tr class="head-title">
                                            <th width="5%">No</th>
                                            <th width="15%">Tanggal</th>
                                            <th>Tindakan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($periksa as $d) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= tgl_lengkap($d['tgl_periksa']); ?></td>
                                                <td>
                                                    Anamnesa : <b><?= $d['anamnesa']; ?></b>
                                                    <table width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td width="50%"><b>Diagnosa</b></td>
                                                                <td width="50%"><b>Keterangan</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><?= $d['keterangan']; ?></td>
                                                                <td>
                                                                    <i>[Perawatan]</i><br>
                                                                    <?php foreach (perawatan($d['id_periksa']) as $p) : ?>
                                                                        <strong>- <?= $p['nama_tindakan'] ?></strong><br>
                                                                    <?php endforeach; ?>
                                                                    <br>
                                                                    <i>[Obat]</i><br>
                                                                    <?php foreach (obat($d['id_periksa']) as $p) : ?>
                                                                        <strong>- <?= $p['nama'] ?></strong><br>
                                                                    <?php endforeach; ?>
                                                                    <br>
                                                                    <i>[Note]</i><br>
                                                                    <strong><?= $d['note']; ?></strong><br>
                                                                    <i>[Rekomendasi]</i><br>
                                                                    <strong><?= $d['rekomendasi']; ?></strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>