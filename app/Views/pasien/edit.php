<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Edit Data Pasien <b><?= $p['nama'] ?></b></h2>
            <p class="dashboard-subtitle">
                Silakan ubah data pasien di bawah ini, untuk merubah data pasien.
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row mt-3">
                <div class="col-12 mt-4 mb-4">
                    <a href="<?= base_url() ?>pasien" class="btn btn-outline-warning"><span><i class="fa-solid fa-arrow-left"></i></span> Kembali</a>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h5>Edit Pasien</h5>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" action="<?= base_url() ?>pasien/edit/<?= $p['id_pasien']; ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <h5>Silakan Isi form disini</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom001">NIK</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nik" id="validationCustom001" placeholder="" required value="<?= $p['nik']; ?>">

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom002">Nama</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="nama" id="validationCustom002" placeholder="" required value="<?= $p['nama']; ?>">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <label for="validationCustom004">Tempat Lahir</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="tempat_lahir" id="validationCustom004" placeholder="" required value="<?= $p['tempat_lahir']; ?>">

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="validationCustom003">Tanggal Lahir</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" name="tanggal_lahir" id="validationCustom003" placeholder="Mo" required value="<?= $p['tanggal_lahir']; ?>">

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Jenis Kelamin</label>
                                        <div class="input-group">
                                            <select class="form-control" name="jenis_kelamin" id="validationCustom220" req>
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="laki-laki" <?php if ($p['jenis_kelamin'] == 'laki-laki') {
                                                                                echo 'selected';
                                                                            } ?>>Laki - Laki</option>
                                                <option value="perempuan" <?php if ($p['jenis_kelamin'] == 'perempuan') {
                                                                                echo 'selected';
                                                                            } ?>>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom005">Telepon</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="telepon" id="validationCustom005" placeholder="" required value="<?= $p['telepon']; ?>">

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom005">Email</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="email" id="validationCustom005" placeholder="" required value="<?= $p['email']; ?>">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label>Alamat</label>
                                        <div class="input-group">
                                            <textarea class="form-control" name="alamat" id="exampleTextarea" rows="3"><?= $p['alamat']; ?></textarea>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom005">Username</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="username" id="validationCustom005" placeholder="" required value="<?= $p['username']; ?>">

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom005">Password</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="password" id="validationCustom005" placeholder="" required value="<?= $p['password']; ?>">

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