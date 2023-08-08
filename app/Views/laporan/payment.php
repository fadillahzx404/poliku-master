<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Pembayaran</h2>
            <p class="dashboard-subtitle">
                Berikut data pembayaran pasien <?= session()->nama ?>
            </p>
        </div>
        <div class="dashboard-content">

            <div class="row mt-3">
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h6>Pembayaran</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table-dashboard" class="table table-striped pt-3 pb-3" style="width:100%">

                                    <thead>
                                        <tr class="head-title">
                                            <th width="5%">No</th>
                                            <th width="15%">Invoice</th>
                                            <!-- <th width="15%">Pasien</th> -->
                                            <th width="15%">Nama Pasien</th>
                                            <th>Total Tagihan</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Status Pembayaran</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($periksa as $d) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td>
                                                    <b><?= $d['invoice']; ?></b><br>

                                                </td>
                                                <!-- <td></td> -->
                                                <td><?= $d['pasien']; ?></td>

                                                <?php $all_tindakan = 0;
                                                foreach (perawatan($d['id_periksa']) as $p) : ?>
                                                    <?php $all_tindakan += $p['tarif']; ?>
                                                <?php endforeach; ?>
                                                <?php $all_obat = 0;
                                                foreach (obat($d['id_periksa']) as $p) : ?>
                                                    <?php $all_obat += $p['harga']; ?>
                                                <?php endforeach; ?>
                                                <?php nf($subtotal = $all_tindakan + $all_obat); ?>

                                                <td><?= nf($total = $subtotal - $d['diskon']); ?></td>
                                                <td><?= $d['m_pembayaran'] ?></td>
                                                <td><?php if($d['status'] == 'Sudah Bayar'){ ?>
                                                    <span class="badge text-bg-success"><?= $d['status'] ?></span>
                                                <?php } else {
                                                    ?>
                                                    <span class="badge text-bg-warning"><?= $d['status'] ?></span>
                                                    <?php } ?>
                                                </span></td>
                                                <td>
                                                    
                                                        <a class="btn btn-warning btn-sm" href="<?= base_url()?>payment/pasien/<?= $d['id_pasien']; ?>/<?= $d['id_periksa']; ?>/<?= $d['invoice']; ?>">
                                                            Detail Invoice
                                                        </a>

                                                     


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