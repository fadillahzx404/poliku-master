<?= $this->extend('sidebar'); ?>


<!-- Body Content Wrapper -->
<?= $this->section('page-content'); ?>
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Dashboard</h2>
            <p class="dashboard-subtitle">
                Selamat datang baca panduan di bawah ini!
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row card-dashboard">
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="d-flex">
                                <i class="fa-solid fa-hospital-user" style="align-self: center;margin-right:10px;color: #9191a9;"></i>
                                <span class="dashboard-card-title">Pasien</span>
                            </div>
                            <div class="dashboard-card-subtitle">
                                <?php echo $sum_pasien ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="d-flex">

                                <i class="fa-solid fa-square-check" style="align-self: center;margin-right:10px;color: #9191a9;"></i>
                                <span class="dashboard-card-title">Transaksi Berhasil</span>
                            </div>
                            <div class="dashboard-card-subtitle">
                                <?php echo $sum_selesai ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="d-flex">

                                <i class="fa-solid fa-file-circle-xmark" style="align-self: center;margin-right:10px;color: #9191a9;"></i>
                                <span class="dashboard-card-title">Transaksi Gagal</span>
                            </div>
                            <div class="dashboard-card-subtitle">
                                <?php echo $sum_gagal ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 mt-2">
                    <h5 class="mb-3">
                        Rekap Pasien
                    </h5>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>