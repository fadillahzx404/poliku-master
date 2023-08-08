<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Tambah Data Layanan Baru</h2>
            <p class="dashboard-subtitle">
                Silakan isi data layanan di bawah ini, untuk menambahkan layanan baru.
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row mt-3">
                <div class="col-12 mt-4 mb-4">
                    <a href="<?= base_url() ?>layanan" class="btn btn-outline-warning"><span><i class="fa-solid fa-arrow-left"></i></span> Kembali</a>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah layanan</h5>
                        </div>
                        <div class="card-body">
                            <?php if ($validation->hasError('title')) { ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php echo $validation->getError('title'); ?>
                                    </ul>
                                </div>
                            <?php } ?>
                            <form class="needs-validation" method="post" action="<?= base_url() ?>layanan/tambah_layanan" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="title">Judul layanan</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" name="title" id="title" placeholder="">


                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Deskripsi</label>
                                            <div class="ck-content">
                                                <textarea name="deskripsi" id="editor"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="thumbnail" class="form-label">Pilih Foto Untuk Thumbnail</label>
                                            <input class="form-control" type="file" name="thumbnail" id="thumbnail">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <img id="output" width="600px" height="400px" style="display: none;" />
                                </div>

                                <button class="btn btn-success float-right mt-4 d-inline w-20" name="submit" value="submit" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    thumbnail.onchange = evt => {
        const [file] = thumbnail.files
        document.getElementById("output").style.display = "block";
        if (file) {
            output.src = URL.createObjectURL(file)
        }
    }
</script>
<?= $this->endSection(); ?>