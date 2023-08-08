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
                    <a href="<?= base_url() ?>booking/tambah_jam" class="btn btn-outline-warning"><span><i class="fa-solid fa-arrow-left"></i></span> Kembali</a>
                </div>
                <div class="col-12 mt-4 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h6>Jadwal Dokter</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table-dashboard" class="table table-striped pt-3 pb-3" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama Dokter</th>
                                            <th>Hari Masuk</th>
                                            <th>Jam Masuk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($dokter as $d) : ?>
                                            <?php $jadwal = explode(",", $d['jadwal']);

                                            ?>
                                            <tr>
                                                <td><?= $d['nama'] ?></td>




                                                <td>
                                                    <?php foreach ($jadwal as $j) : ?>


                                                        <?php

                                                        if ($j == 'sunday') {
                                                            $j = str_replace('sunday', 'Minggu', $j);
                                                        }
                                                        if ($j == 'monday') {
                                                            $j = str_replace('monday', 'Senin', $j);
                                                        }
                                                        if ($j == 'tuesday') {
                                                            $j = str_replace('tuesday', 'Selasa', $j);
                                                        }
                                                        if ($j == 'wednesday') {
                                                            $j = str_replace('wednesday', 'Rabu', $j);
                                                        }
                                                        if ($j == 'thursday') {
                                                            $j = str_replace('thursday', 'Kamis', $j);
                                                        }
                                                        if ($j == 'friday') {
                                                            $j = str_replace('friday', 'Jum`at', $j);
                                                        }
                                                        if ($j == 'saturday') {
                                                            $j = str_replace('saturday', 'Sabtu', $j);
                                                        }
                                                        ?>
                                                        <p class="mt-3"><li><?= $j; ?></li></p>
                                                        
                                                    <?php endforeach; ?>
                                                </td>
                                                <td>
                                            <?php $jam = explode(",", $d['jam_masuk']);

                                            foreach ($jam as $d) : 
                                            
                                            ?>
                                            <?php

                                            if($d == '1'){
                                                $d = str_replace('1','Belum Ditentukan',$d);
                                            }
                                            if($d == '2'){
                                                $d = str_replace('2','09:00 - 15:00',$d);
                                            }
                                            if($d == '3'){
                                                $d = str_replace('3','16:00 - 21:00',$d);
                                            }
                                            
                                            ?>
 
                                            <p class="mt-3"><?= $d; ?></p>
                                        <?php endforeach; ?>    
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h6>Tambah Booking Untuk Tanggal</h6>
                        </div>
                        <div class="card-body">
                            <form id="tambah_jam" name="tambah_jam" action="<?= base_url() ?>booking/tambah_jam" method="post" enctype="multipart/form-data">
                                <div class="row">



                                    <div class="col-md-6">
                                        <label for="datepicker">Tanggal Perawatan</label>
                                        <div class="input-group date mt-2">
                                            <input type="text" class="form-control" id="datepicker" placeholder="Tahun/Bulan/Hari" name="untuk_tanggal">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="timepicker1">Jam Perawatan</label>
                                        <div class="input-group time mt-2">
                                            <input type="text" id="timepicker1" name="untuk_jam" class="form-control">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-clock"></i></span>
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