<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
        <div class="dashboard-heading">
            <h2 class="dashboard-title">List dan Jadwal Booking</h2>
            <p class="dashboard-subtitle">
                Jadwal Booking Dokter <?= session()->nama ?>
            </p>
        </div>
        <div class="dashboard-content">

            <div class="row mt-3">
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h6>List Booking</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table-dashboard" class="table table-striped pt-3 pb-3" style="width:100%">
                                    <thead>
                                        <tr class="head-title">
                                            <th>No</th>
                                            <th>Nama Pasien</th>
                                            <th>Jam</th>
                                            <th>Tanggal Perawatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($booking as $d) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $d['nama_pasien'] ?></td>
                                                <td><?= $d['untuk_jam'] ?></td>
                                                <td><?= $d['untuk_tanggal'] ?></td>
                                                <td>
                                                    
                                                    <a href="<?= base_url(); ?>rekam_medis/data_periksa/<?= $d['id_pasien']; ?>" class="btn btn-warning" style="margin-top: 0px;"><i class="fa-solid fa-briefcase-medical"></i>Periksa</a>
                                                    <!-- <a href='<?= base_url(); ?>/booking/admin_edit/<?= $d['id_booking']; ?>'><i class='fas fa-pencil-alt ms-text-primary'></i></a>
                                            <a href='<?= base_url(); ?>/booking/admin_hapus/<?= $d['id_booking']; ?>' onclick="return confirm('apakah anda ingin hapus data?');"><i class='far fa-trash-alt ms-text-danger'></i></a> -->
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