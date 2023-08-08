{{-- <div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Data Rekam Medis</h6>
                    <!-- <a href="<?= base_url() ?>/rekam_medis/tambah" class="ms-text-primary">Tambah Rekam Medis</a> -->
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="rekam_medis" class="table table-striped thead-primary w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Rekam Medis</th>
                                    <th>Nama Pasien</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rekam_medis as $d) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?php echo sprintf("%04s", $d['id_rekam_medis']) ?></td>
                                        <td><?= $d['nama'] ?></td>
                                        <td><?= $d['alamat'] ?></td>
                                        <td><?= $d['telepon'] ?></td>
                                        <td><?= $d['jenis_kelamin'] ?></td>
                                        <td>
                                            <!-- <a href='<?= base_url(); ?>/rekam_medis/edit/#<?= $d['id_rekam_medis']; ?>'><i class='fas fa-pencil-alt ms-text-primary'></i></a>
                                            <a href='<?= base_url(); ?>/rekam_medis/hapus/#<?= $d['id_rekam_medis']; ?>' onclick="return confirm('apakah anda ingin hapus data?');"><i class='far fa-trash-alt ms-text-danger'></i></a> -->
                                            <div class="dropdown float-right">
                                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: top, left; top: 19px; left: -142px;">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="<?= base_url(); ?>/rekam_medis/periksa/<?= $d['id_pasien']; ?>">
                                                            <div class="media-body">
                                                                <span>Periksa</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="<?= base_url(); ?>/rekam_medis/data_periksa_pasien/<?= $d['id_pasien']; ?>">
                                                            <div class="media-body">
                                                                <span>Rekam Medis</span>
                                                            </div>
                                                        </a>
                                                    </li>
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
</div> --}}

<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Rekam Medis</h2>
            <p class="dashboard-subtitle">
                Data Rekam Medis di Benings!
            </p>
        </div>
        <div class="dashboard-content">
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
            <div class="row mt-3">
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h5>Data Rekam Medis Pasien</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table-dashboard" class="table table-striped pt-3 pb-3" style="width:100%">
                                    <thead>
                                        <tr class="head-title">
                                            <th>No</th>
                                            <th>Rekam Medis</th>
                                            <th>Nama Pasien</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($rekam_medis as $d) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?php echo sprintf("%04s", $d['id_rekam_medis']) ?></td>
                                                <td><?= $d['nama'] ?></td>
                                                <td><?= $d['alamat'] ?></td>
                                                <td><?= $d['telepon'] ?></td>
                                                <td><?= $d['jenis_kelamin'] ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-outline-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true">
                                                            Aksi
                                                        </button>
                                                        <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item d-inline" href="<?= base_url(); ?>rekam_medis/periksa/<?= $d['id_pasien']; ?>">Periksa</a></li>
                                                            <li><a class="dropdown-item d-inline" href="<?= base_url(); ?>rekam_medis/data_periksa/<?= $d['id_pasien']; ?>">Rekam Medis</a></li>

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