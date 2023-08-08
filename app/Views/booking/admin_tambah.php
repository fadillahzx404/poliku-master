<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Tambah Data Booking Baru</h2>
            <p class="dashboard-subtitle">
                Silakan isi data booking di bawah ini, untuk menambahkan jadwal booking.
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row mt-3">
                <div class="col-12 mt-4 mb-4">
                    <a href="<?= base_url() ?>booking/admin" class="btn btn-outline-warning"><span><i class="fa-solid fa-arrow-left"></i></span> Kembali</a>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h6>Tambah Booking</h6>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" action="<?= base_url() ?>/booking/admin/tambah" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Nama Pasien</label>
                                        <div class="input-group">
                                            <select class="form-control" name="id_pasien" id="validationCustom220" required>
                                                <option value="">Pilih Pasien</option>
                                                <?php foreach ($pasien as $d) : ?>
                                                    <option value="<?= $d['id_pasien'] ?>"><?= $d['nama'] ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Dokter Gigi</label>
                                        <div class="input-group">
                                            <select class="form-control" name="id_dokter" id="validationCustom220" required>
                                                <option value="">Pilih Dokter</option>
                                                <?php foreach ($dokter as $d) : ?>
                                                    <option value="<?= $d['id_dokter'] ?>"><?= $d['nama'] ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom005">Jam Perawatan</label>
                                        <div class="input-group time mt-2">
                                            <input type="text" id="timepicker1" name="untuk_jam" class="form-control">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-clock"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="date">Tanggal Perawatan</label>
                                        <div class="input-group date mt-2">
                                            <input type="text" class="form-control" id="datepicker" placeholder="Tahun/Bulan/Hari" name="untuk_tanggal">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <button class="btn btn-warning mt-4 d-inline w-20" type="reset">Reset</button>
                                <button class="btn btn-primary mt-4 d-inline w-20" name="submit" value="submit" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>