<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Edit Jadwal Dokter <b><?= session()->nama ?></b></h2>
            <p class="dashboard-subtitle">
                Silakan sesuaikan jadwal anda Dokter!
            </p>
        </div>
        <div class="dashboard-content">

            <div class="row mt-3">
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">


                            <h6>Edit Jadwal</h6>




                        </div>
                        <div class="card-body">
                            <form action="<?= base_url() ?>jadwal/jam/<?= $d['id_dokter'] ?>" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5>Nama Dokter</h5>
                                        <p><?= session()->nama ?></p>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Hari Masuk</h5>

                                        <?php foreach ($j as $d) : ?>
                                            <p class="mt-3"><?= trim($d); ?></p>
                                        <?php endforeach; ?>


                                    </div>
                                    <div class="col-md-3">
                                        <h5>Jam Masuk</h5>
                                        <?php foreach ($j as $b) : ?>
                                            <select class="form-select form-select-sm mb-3" name="pilih_jam[]" aria-label=" Default select example">
                                                <option value="1">Pilih Jam Masuk</option>
                                                <option value="2">09:00 - 15:00</option>
                                                <option value="3">16:00 - 21:00</option>
                                            </select>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success float-right ml-2">Simpan</button>
                                <a href="" class="btn btn-danger float-right ">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>