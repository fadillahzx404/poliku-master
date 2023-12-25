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
                    <a href="<?= base_url() ?>booking/pasien/" class="btn btn-outline-warning"><span><i class="fa-solid fa-arrow-left"></i></span> Kembali</a>
                </div>
                <div class="col-6 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h6>Tambah Booking</h6>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="post" action="<?= base_url() ?>booking/pasien/tambah/<?= $b['id_booking'] ?>" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-md-12">
                                        <h5 class="mb-3">Jadwal Booking Anda</h5>
                                        <div class="mb-3 row">
                                            <label for="staticTanggal" class="col-sm-4 ml-2 col-form-label">Tanggal</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control-plaintext fw-bold" id="staticTanggal" value=": <?= $b['untuk_tanggal'] ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="staticJam" class="col-sm-4 ml-2 col-form-label">Jam</label>
                                            <div class="col-sm-7">
                                                <input type="text" readonly class="form-control-plaintext fw-bold" id="staticJam" value=": <?= $b['untuk_jam'] ?>">
                                            </div>
                                        </div>



                                        <?php
                                        #Logic Explode Jadwal Dokter


                                        $items = array();
                                        foreach ($dj as $array) :

                                            $array1 = explode(',', $array['jadwal']);
                                            $array2 = explode(',', $array['jam_masuk']);



                                            $jadwal = array_combine($array1, $array2);

                                            $a1 = array("id_dokter" => $array['id_dokter'], "nama" => $array['nama']);
                                            $a2 = $jadwal;
                                            $jj = array_merge_recursive($a1, $a2);



                                            $array['hari_jam'] = $jadwal;

                                            $items[] = $array;


                                        ?>
                                        <?php endforeach; ?>

                                        <?php

                                        #Pencocokan Jam

                                        for ($i = 8; $i <= 21; $i++) {
                                            if ($i <= 9) {
                                                $shift_2[] = "0$i:00:00";
                                            } else if ($i <= 15) {
                                                $shift_2[] = "$i:00:00";
                                            } else if ($i >= 15) {
                                                $shift_3[] = "$i:00:00";
                                            }
                                            $shift_3[0] = "15:30:00";
                                        }


                                        $pilih_jam = $b['untuk_jam'];
                                        if (in_array("$pilih_jam", $shift_2)) {
                                            $jam_d = $j_dokter['jam_masuk'] = '2';
                                        } else if (in_array("$pilih_jam", $shift_3)) {
                                            $jam_d = $j_dokter['jam_masuk'] = '3';
                                        }


                                        $t = date('l', strtotime($b['untuk_tanggal']));
                                        $t = strtolower($t);

                                        $jame[] = $jam_d;
                                        $tangg[] = $t;

                                        $result = array_combine($tangg, $jame); ?>


                                        <?php
                                        $iddok = array();
                                        $doknem = array();

                                        foreach ($items as $item) {

                                            if (array_intersect_assoc($result, $item['hari_jam'])) {

                                                $iddok =  $item['id_dokter'];
                                                
                                                $doknem =  $item['nama'];
                                                
                                                
                                            }
                                        }
                                            

                                        ?>
                                        <div class="mb-3 row">
                                            <label for="staticDokter" class="col-sm-4 ml-2 col-form-label">Dokter Gigi</label>
                                            <div class="col-sm-7">
                                                <input type="hidden" id="id_dokter" name="id_dokter" class="form-control" value="<?= $iddok ?>">
                                                <input type="text" readonly class="form-control-plaintext fw-bold" id="dokter" name="dokter" value=": <?= $doknem ?>">
                                            </div>
                                        </div>

                                    </div>


                                    <hr>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary mt-2 d-inline w-20 float-right" name="submit" value="submit" type="submit">Simpan</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>