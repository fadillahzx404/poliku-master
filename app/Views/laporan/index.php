<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Laporan</h2>
            <p class="dashboard-subtitle">
                Laporan Bening!
            </p>
        </div>
        <div class="dashboard-content">

            <div class="row mt-3">
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h5>Laporan</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table-dashboard" class="table table-striped pt-3 pb-3" style="width:100%">
                                    <thead>
                                        <tr class="head-title">
                                            <th width="5%">No</th>
                                            <th width="10%">Tanggal</th>
                                            <th width="15%">Dokter Jaga</th>
                                            <th width="15%">Nama Pasien</th>
                                            <th>Tindakan</th>
                                            <th>Jenis Pembayaran</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($periksa as $d) : ?>
                                            <tr >
                                                <td><?= $no++; ?></td>
                                                <td><?= tgl_lengkap($d['tgl_periksa']); ?></td>
                                                <td><?= $d['dokter']; ?></td>
                                                <td><?= $d['pasien']; ?></td>
                                                <td>
                                                    <table width="100%">
                                                        <tbody>
                                                            <tr>
                                                                <td width="50%"><b>Jenis Tindakan</b></td>
                                                                <td width="50%" class="text-right"><b>Tarif</b></td>
                                                            </tr>
                                                            <?php foreach (perawatan($d['id_periksa']) as $p) : ?>
                                                                <tr>
                                                                    <td><?= $p['nama_tindakan'] ?></td>
                                                                    <td class="text-right">
                                                                        <?= nf($p['tarif']) ?>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td><?= $d['m_pembayaran']; ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Aksi
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item" href="<?= base_url(); ?>laporan/cetak_laporan/<?= $d['id_periksa']; ?>"><span><i class="fa-solid fa-file-pdf icon-list"></i></span>Simpan PDF</a></li>
                                                            <li><div class="dropdown-divider"></div></li>
                                                            <li><a class="dropdown-item btn-hapus" href="<?= base_url(); ?>booking/admin/hapus/<?= $d['id_periksa']; ?>"><span><i class="fa-solid fa-trash icon-list"></i></span>Hapus</a></li>
                                                        </ul>
                                                    </div>
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