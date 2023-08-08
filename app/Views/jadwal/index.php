<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Jadwal Dokter <b><?= session()->nama ?></b></h2>
            <p class="dashboard-subtitle">
                Silakan sesuaikan jadwal anda Dokter!
            </p>
        </div>
        <div class="dashboard-content">

            <div class="row mt-3">
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6" style="align-self: center;">
                                    <h6>Edit Jadwal</h6>
                                </div>

                                <div class="col-6">
                                    <div class="float-right">
                                        <a href="<?= base_url() ?>jadwal/edit/<?= $dokter['id_dokter']; ?>" class="btn btn-primary text-white">Ubah Jadwal</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5>Nama Dokter</h5>

                                        <h3><span class="badge bg-warning text-dark"><?= session()->nama ?></span></h6>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Hari Masuk</h5>

                                        <?php foreach ($j as $d) : ?>
                                            <p class="mt-3"><?= trim($d); ?></p>
                                        <?php endforeach; ?>


                                    </div>
                                    <div class="col-md-3">
                                        <h5>Jam Masuk</h5>
                                        <?php $jam = explode(",", $dokter['jam_masuk']);

                                        foreach ($jam as $d) :

                                        ?>
                                            <?php

                                            if ($d == '1') {
                                                $d = str_replace('1', 'Belum Ditentukan', $d);
                                            }
                                            if ($d == '2') {
                                                $d = str_replace('2', '09:00 - 15:00', $d);
                                            }
                                            if ($d == '3') {
                                                $d = str_replace('3', '15:00 - 21:00', $d);
                                            }

                                            ?>

                                            <p class="mt-3"><?= $d; ?></p>
                                        <?php endforeach; ?>



                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
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
                                        <?php foreach ($dokteran as $d) : ?>

                                            <tr>
                                                <td><?= $d['nama'] ?></td>




                                                <td>

                                                    <?php $hari = explode(",", $d['jadwal']);

                                                    foreach ($hari as $day) :

                                                    ?>

                                                        <?php


                                                        if ($day == 'monday') {
                                                            $day = 'Senin';
                                                        }
                                                        if ($day == 'tuesday') {
                                                            $day = 'Selasa';
                                                        }
                                                        if ($day == 'wednesday') {
                                                            $day = 'Rabu';
                                                        }
                                                        if ($day == 'thursday') {
                                                            $day = 'Kamis';
                                                        }
                                                        if ($day == 'friday') {
                                                            $day = 'Jumat';
                                                        }
                                                        if ($day == 'saturday') {
                                                            $day = 'Sabtu';
                                                        }
                                                        if ($day == 'sunday') {
                                                            $day = 'Minggu';
                                                        }

                                                        ?>


                                                        <p class="mt-3">
                                                            <li><?= $day; ?></li>
                                                        </p>


                                                    <?php endforeach; ?>
                                                </td>
                                                <td>
                                                    <?php $jam = explode(",", $d['jam_masuk']);

                                                    foreach ($jam as $d) :

                                                    ?>
                                                        <?php

                                                        if ($d == '1') {
                                                            $d = str_replace('1', 'Belum Ditentukan', $d);
                                                        }
                                                        if ($d == '2') {
                                                            $d = str_replace('2', '09:00 - 15:00', $d);
                                                        }
                                                        if ($d == '3') {
                                                            $d = str_replace('3', '16:00 - 21:00', $d);
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

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>