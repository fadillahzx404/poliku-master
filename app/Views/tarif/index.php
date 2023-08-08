<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Tarif</h2>
            <p class="dashboard-subtitle">
                Harga tarif serta tindakan!
            </p>
        </div>
        <div class="dashboard-content">

            <div class="row mt-3">
                <div class="col-md-6 mb-3">
                    <a href="<?= base_url() ?>tarif/tambah" type="button" class="btn btn-warning">
                        <span>
                            <i class="fa-solid fa-user-plus"></i>
                        </span>
                        Tambah Tarif
                    </a>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h5>Data Tarif</h5>
                        </div>
                        <div class="card-body">
                            <table id="table-dashboard" class="table table-striped pt-3 pb-3" style="width:100%">
                                <thead>
                                    <tr class="head-title">
                                        <th>No</th>
                                        <th>UPF</th>
                                        <th>Nama Tindakan</th>
                                        <th>Perawatan</th>
                                        <th>Tarif</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tarif as $d) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $d['upf'] ?></td>
                                            <td><?= $d['nama_tindakan'] ?></td>
                                            <td><?= $d['perawatan'] ?></td>
                                            <td><?= $d['tarif'] ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Aksi
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="<?= base_url(); ?>tarif/edit/<?= $d['id_tarif']; ?>"><span><i class="fa-solid fa-pen-to-square icon-list"></i></span>Ubah</a></li>
                                                        <li><div class="dropdown-divider"></div></li>
                                                        <li><a class="dropdown-item btn-hapus" href="<?= base_url(); ?>tarif/hapus/<?= $d['id_tarif']; ?>"><span><i class="fa-solid fa-trash icon-list"></i></span>Hapus</a></li>
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
<?= $this->endSection(); ?>