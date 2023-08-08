<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Tambah Data Dokter Baru</h2>
            <p class="dashboard-subtitle">
                Silakan isi data dokter di bawah ini, untuk menambahkan dokter.
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row mt-3">
                <div class="col-12 mt-4 mb-4">
                    <a href="<?= base_url() ?>dokter" class="btn btn-outline-warning"><span><i class="fa-solid fa-arrow-left"></i></span> Kembali</a>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Dokter</h5>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" action="<?= base_url() ?>/dokter/tambah" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <h5>Silakan Isi form disini</h5>
                                    </div>
                                </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom001">NIK</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nik" id="validationCustom001" placeholder="" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Nama</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nama" id="validationCustom002" placeholder="" required>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <label for="validationCustom004">Tempat Lahir</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="tempat_lahir" id="validationCustom004" placeholder="" required>

                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label for="validationCustom003">Tanggal Lahir</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" name="tanggal_lahir" id="validationCustom003" placeholder="Mo" required>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Jenis Kelamin</label>
                                <div class="input-group">
                                    <select class="form-control" name="jenis_kelamin" id="validationCustom220" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="laki-laki">Laki - Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom005">Telepon</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="telepon" id="validationCustom005" placeholder="" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom005">Email</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="email" id="validationCustom005" placeholder="" required>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label>Alamat</label>
                                <div class="input-group">
                                    <textarea class="form-control" name="alamat" id="exampleTextarea" rows="3"></textarea>

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom005">Username</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="username" id="validationCustom005" placeholder="" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom005">Password</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="password" id="validationCustom005" placeholder="" required>

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