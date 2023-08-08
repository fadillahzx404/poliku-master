<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Edit Layanan </b></h2>
            <p class="dashboard-subtitle">
                Silakan ubah layanan di bawah ini, untuk merubah layanan.
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

                            <div class="row">
                                <div class="col-6" style="align-self: center;">
                                    <h6>Edit Layanan</h6>
                                </div>

                                <div class="col-6">
                                    <form id="active_change" action="<?= base_url() ?>layanan/change_active" method="POST">
                                        <div class="input-group d-none">
                                            <input type="text" class="form-control" name="id_layanan" value="<?= $d['id_layanan'] ?>">
                                        </div>
                                        <div class="float-right">
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" id="btncheck1" name="changeActivated" autocomplete="off" <?php if ($d['active'] == 1) {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?> value='1' <?php if ($jumlah_active >= 3) {
                                                                                                                                                                    echo 'disabled';
                                                                                                                                                                }  ?>>
                                                <label class="btn btn-outline-success" for="btncheck1" style="border-top-left-radius: 4px;border-bottom-left-radius: 4px;">Active</label>

                                                <input type="radio" class="btn-check" name="changeActivated" id="btncheck2" <?php if ($d['active'] == 2) {
                                                                                                                                echo 'checked';
                                                                                                                            } ?> value='2'>
                                                <label class=" btn btn-outline-danger" for="btncheck2">Not-Active</label>

                                            </div>
                                            <button type="button" class="btn" data-toggle="tooltip" data-placement="bottom" title="Jika data active sudah 3 maka tidak bisa menambah silakan ubah data active menjadi non-active terlebih dahulu">
                                                <i class="fa-solid fa-circle-info"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" action="<?= base_url() ?>layanan/edit/<?= $d['id_layanan']; ?>" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-md-12 mb-3">
                                        <label for="title">Judul layanan</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="title" id="title" placeholder="" value="<?= $d['title']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Deskripsi</label>
                                            <div class="ck-content">
                                                <textarea name="deskripsi" id="editor"><?= $d['deskripsi'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="thumbnail" class="form-label">Pilih Foto Untuk Thumbnail</label>
                                            <input class="form-control" value="" type="file" name="thumbnail" id="thumbnail">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <img src="<?= base_url() ?>public/img/layanan/<?= $d['thumbnail'] ?>" id="output" width="600px" height="400px" />
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
<script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<?= $this->endSection(); ?>