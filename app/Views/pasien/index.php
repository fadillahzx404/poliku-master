<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Pasien</h2>
            <p class="dashboard-subtitle">
                Data Pasien di Benings!
            </p>
        </div>
        <div class="dashboard-content">
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
            <div class="row mt-3">
                <div class="col-md-6 mb-3">
                    <a href="pasien/tambah" type="button" class="btn btn-warning">
                        <span>
                            <i class="fa-solid fa-user-plus"></i>
                        </span>
                        Tambah Pasien
                    </a>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h5>Data Pasien</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table-dashboard" class="table table-striped pt-3 pb-3" style="width:100%">
                                    <thead>
                                        <tr class="head-title">
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Telepon</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Akun</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($pasien as $p) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $p['nik'] ?></td>
                                                <td><?= $p['nama'] ?></td>
                                                <td><?= $p['tempat_lahir'] ?>, <?= $p['tanggal_lahir'] ?></td>
                                                <td><?= $p['jenis_kelamin'] ?></td>
                                                <td><?= $p['telepon'] ?></td>
                                                <td><?= $p['email'] ?></td>
                                                <td><?= $p['alamat'] ?></td>
                                                <td>
                                                    <?= $p['username'] ?><br>
                                                    <?= $p['password'] ?>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Aksi
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                                            <li><a class="dropdown-item" href="<?= base_url(); ?>pasien/edit/<?= $p['id_pasien']; ?>"><span><i class="fa-solid fa-pen-to-square icon-list"></i></span>Ubah</a></li>
                                                            <li>
                                                                <div class="dropdown-divider"></div>
                                                            </li>
                                                            <li><a class="dropdown-item btn-hapus" href="<?= base_url(); ?>pasien/hapus/<?= $p['id_pasien']; ?>"><span><i class="fa-solid fa-trash icon-list"></i></span>Hapus</a></li>
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