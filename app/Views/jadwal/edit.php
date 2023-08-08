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
                            <form action="<?= base_url() ?>jadwal/edit/<?= $d['id_dokter'] ?>" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Nama Dokter</h5>
                                        <p><?= session()->nama ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Jadwal Anda</h5>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="check_list[]" id="flexCheckDefault1" value="monday"  <?php if(isset($j[0])){ if($j[0] == 'monday') {
                                                echo 'checked';
                                            }} ?>>
                                            <label class="form-check-label" for="flexCheckDefault1">
                                                Senin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="check_list[]" id="flexCheckChecked2" value="tuesday" <?php if(isset($j[1])){ if($j[1] == 'tuesday') {
                                                echo 'checked';
                                            }} ?>>
                                            <label class="form-check-label" for="flexCheckChecked2">
                                                Selasa
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="check_list[]" id="flexCheckChecked3" value="wednesday" <?php if(isset($j[2])){ if($j[2] == 'wednesday') {
                                                echo 'checked';
                                            }} ?>>
                                            <label class="form-check-label" for="flexCheckChecked3">
                                                Rabu
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="check_list[]" id="flexCheckChecked4" value="thursday" <?php if(isset($j[3])){ if($j[3] == 'thursday') {
                                                echo 'checked';
                                            }} ?> >
                                            <label class="form-check-label" for="flexCheckChecked4">
                                                Kamis
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="check_list[]" id="flexCheckChecked5" value="friday" <?php if(isset($j[4])){ if($j[4] == 'friday') {
                                                echo 'checked';
                                            }} ?>>
                                            <label class="form-check-label" for="flexCheckChecked5">
                                                Jumat
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="check_list[]" id="flexCheckChecked6" value="saturday" <?php if(isset($j[5])){ if($j[5] == 'saturday') {
                                                echo 'checked';
                                            }} ?>>
                                            <label class="form-check-label" for="flexCheckChecked6">
                                                Sabtu
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="check_list[]" id="flexCheckChecked7" value="sunday" <?php if(isset($j[6])){ if($j[6] == 'sunday') {
                                                echo 'checked';
                                            }} ?>>
                                            <label class="form-check-label" for="flexCheckChecked7">
                                                Sabtu
                                            </label>
                                        </div>


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