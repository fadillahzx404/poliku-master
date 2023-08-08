<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Edit Jadwal Booking <b><?= $d['nama_pasien'] ?></b></h2>
            <p class="dashboard-subtitle">
                Silakan ubah jadwal booking di bawah ini, untuk merubah jadwal booking.
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
                            <h6>Edit Booking</h6>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" action="<?= base_url() ?>/booking/admin/edit/<?= $d['id_booking']; ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Nama Pasien</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nama" id="validationCustom001" placeholder="" value="<?= $d['nama_pasien']; ?> " disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Dokter Gigi</label>
                                        <div class="input-group">
                                            <select class="form-control" name="id_dokter" id="validationCustom220" required>
                                                <option value="">Pilih Dokter</option>
                                                <?php foreach ($dokter as $dok) : ?>
                                                    <option value="<?= $dok['id_dokter'] ?>" <?php if ($dok['id_dokter'] == $d['id_dokter']) {
                                                                                                    echo 'selected';
                                                                                                } ?>><?= $dok['nama'] ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom003">Tanggal Perawatan</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" name="untuk_tanggal" value="<?= $d['untuk_tanggal'] ?>" id="validationCustom003" placeholder="Mo" required>

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom005">Jam Perawatan</label>
                                        <div class="input-group">
                                            <input type="time" class="form-control" name="untuk_jam" value="<?= $d['untuk_jam'] ?>" id="validationCustom005" placeholder="" required>

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