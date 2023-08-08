<?= $this->include('header') ?>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Edit Diagnosa</h6>
                    <a href="<?= base_url() ?>/diagnosa" class="ms-text-primary">Data Diagnosa
                    </a>
                </div>
                <div class="ms-panel-body">
                    <form class="needs-validation" method="post" action="<?= base_url() ?>/diagnosa/edit/<?= $d['id_diagnosa']; ?>" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom002">Nama Diagnosis</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="keterangan" value="<?= $d['keterangan']; ?>" id="validationCustom002" placeholder="" req>

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
<?= $this->include('footer') ?>