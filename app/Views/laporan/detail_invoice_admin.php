<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Pembayaran Pasien <?= $periksa->pasien; ?></h2>
            <p class="dashboard-subtitle">
                Pemabayaran Pasien!
            </p>
        </div>
        <div class="dashboard-content">

            <div class="row mt-3">
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h6>Pembayaran dengan invoice <b><?= $periksa->invoice; ?></b></h6>
                            <?php

                            use PhpParser\Node\Stmt\Echo_;

                            $curl = curl_init();



                            curl_setopt_array($curl, [
                                CURLOPT_URL => "https://api.sandbox.midtrans.com/v2/" . $periksa->invoice . "/status",
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => "",
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 30,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => "GET",
                                CURLOPT_HTTPHEADER => [
                                    "accept: application/json",
                                    "authorization: Basic U0ItTWlkLXNlcnZlci1lYWY0SjhQNW15NGthN2ZWbEFfRExVNkI6"

                                ],
                            ]);

                            $response = curl_exec($curl);
                            $err = curl_error($curl);

                            curl_close($curl);


                            $hasil = json_decode(
                                $response,
                                true
                            );
                            // dd($hasil);


                            // dd($response);
                            ?>
                            <?php if ($periksa->status == "Belum Bayar") { ?>
                                <span class="badge text-bg-warning"><?= $periksa->status; ?></span>
                            <?php } else if ($periksa->status == "Sudah Bayar") { ?>
                                <span class="badge text-bg-success"><?= $periksa->status; ?></span>
                            <?php } ?>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <div class="col-md-10">
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Pasien :</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="<?= $periksa->pasien; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-2">
                                    <div class="col-md-10">
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Dokter :</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="<?= $periksa->dokter; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="col-md-10">
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Tanggal dan Jam Periksa :</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="<?= $periksa->tgl_periksa; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="col-md-10">
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Anamesa: </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="<?= $periksa->keterangan; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="col-md-10">
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Diagnosa :</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="<?= $periksa->rekomendasi; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="col-md-10">
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Note :</label>
                                            <div class="col-sm-7">
                                                <textarea class="form-control" rows="3" readonly><?= $periksa->note; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="col-md-10">
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Total Tagihan :</label>
                                            <div class="col-sm-7">
                                                <?php $all_tindakan = 0;
                                                $p1 = perawatan($periksa->id_periksa) ?>
                                                <?php $all_tindakan += $p1[0]['tarif']; ?>



                                                <?php $all_obat = 0;
                                                $p2 = obat($periksa->id_periksa) ?>
                                                <?php if (isset($p2[0])) {
                                                    $all_obat += $p2[0]['harga'];
                                                } else {
                                                    $all_obat = 0;
                                                }  ?>

                                                <?php nf($subtotal = $all_tindakan + $all_obat); ?>

                                                <h4>Rp. <?= nf($total = $subtotal - $periksa->diskon); ?></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="col-md-10">
                                        <div class="mb-3 row">
                                            <label class="col-sm-12 col-md-4 col-form-label">Metode Pembayaran :</label>
                                            <div class="col-sm-12 col-md-8">
                                                <form id="metode_admin" action="<?= base_url() ?>laporan/admin/m_add" method="POST">
                                                    <div class="input-group d-none">
                                                        <input type="text" class="form-control" name="id_pasien" value="<?= $periksa->id_pasien ?>">
                                                        <input type="text" class="form-control" name="id_periksa" value="<?= $periksa->id_periksa ?>">
                                                        <input type="text" class="form-control" name="invoice" value="<?= $periksa->invoice ?>">
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input tunai" type="radio" name="UbahMetode" <?php if ($periksa->id_pembayaran == 2) {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?> id="tunai" <?php if ($periksa->status == 'Sudah Bayar') {
                                                                                                                                                    echo 'disabled';
                                                                                                                                                } ?> value="2">
                                                        <label class="form-check-label" for="tunai">
                                                            <h5>Tunai</h5>
                                                        </label>
                                                    </div>

                                                    <div class="form-check form-check-inline ml-5">
                                                        <input class="form-check-input non-tunai" type="radio" name="UbahMetode" <?php if ($periksa->id_pembayaran == 3) {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?> id="non-tunai" <?php if ($periksa->status == 'Sudah Bayar') {
                                                                                                                                                            echo 'disabled';
                                                                                                                                                        } ?> value="3">
                                                        <label class="form-check-label" for="non-tunai">
                                                            <h5>Non-Tunai</h5>
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-12 mt-2">
                                    <div class="col-md-10">
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label"></label>
                                            <div class="col-sm-4">

                                                <a href="<?= base_url(); ?>rekam_medis/invoice/<?= $periksa->invoice; ?>" target="_blank" type="button" id="tunai-btn" class="btn btn-success tunai-btn" style="display:none">Simpan invoice ke pdf</a>
                                                <a href="https://app.sandbox.midtrans.com/snap/v2/vtweb/<?= $periksa->token; ?>" target="_blank" type="button" id="non-tunai-btn" class="btn btn-primary non-tunai-btn <?php if ($hasil['status_code'] ==  200) {
                                                                                                                                                                                                                            echo 'disabled';
                                                                                                                                                                                                                        } ?>" style="display:none">Bayar Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($periksa->id_pembayaran == 2) { ?>
                                    <div class="col-12 mt-3">
                                        <div class="col-md-10">
                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label">Status Pembayaran :</label>
                                                <div class="col-sm-8 col-md-6">
                                                    <form id="check_bayar" action="<?= base_url() ?>laporan/admin/check_bayar_add" method="POST">
                                                        <div class="input-group d-none">
                                                            <input type="text" class="form-control" name="id_pasien" value="<?= $periksa->id_pasien ?>">
                                                            <input type="text" class="form-control" name="id_periksa" value="<?= $periksa->id_periksa ?>">
                                                            <input type="text" class="form-control" name="invoice" value="<?= $periksa->invoice ?>">
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input b-bayar" type="radio" name="checkPembayaran" <?php if ($periksa->status == 'Belum Bayar') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?> id="b-bayar" value="Belum Bayar">
                                                            <label class="form-check-label" for="b-bayar">
                                                                <h5>Belum Bayar</h5>
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline ml-0">
                                                            <input class="form-check-input s-bayar" type="radio" name="checkPembayaran" <?php if ($periksa->status == "Sudah Bayar") {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?> id="s-bayar" value="Sudah Bayar">
                                                            <label class="form-check-label" for="s-tunai">
                                                                <h5>Sudah Bayar</h5>
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>