<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from harnishdesign.net/demo/html/koice/index-invoice-trains.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2023 06:41:29 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/favicon.png" rel="icon" />
    <title>Cetak Laporan</title>
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts
======================= -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

    <!-- Stylesheet
======================= -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/koice/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/koice/vendor/font-awesome/css/all.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/theme/koice/css/stylesheet.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <!-- Container -->
    <div class="container-fluid invoice-container">
        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img id="logo" src="<?= base_url() ?>/img/logo.jpg" style="width: 100px;" title="Koice" alt="Koice" />
                    </div>
                    <div class="col">

                    </div>
                    <div class="col align-self-center">

                        <h4 class="mb-">Invoice 
                                <span class="badge text-bg-primary"><?= $d['m_pembayaran']; ?></span>
                            
                        </h4>

                        <p class="mb-0">Invoice Number - <?= $d['invoice']; ?></p>
                    </div>
                </div>
            </div>
            <!-- <div class="row align-items-center">
                <div class="col-sm-7 text-center text-sm-start mb-3 mb-sm-0"> <img id="logo" src="<?= base_url() ?>/img/logo.jpg" style="width: 100px;" title="Koice" alt="Koice" /> </div>
                <div class="col-sm-5 text-center text-sm-end">
                    <h4 class="mb-0">Invoice</h4>
                    <p class="mb-0">Invoice Number - 16835</p>
                </div>
            </div> -->
            <!-- <hr> -->
        </header>
        <!-- Main Content -->
        <main>
            <!-- <p class="text-1 text-center text-muted">This e-ticket will only be valid along with an ID proof in original. if found travelling without ID proof, passenger will be treated as without ticket and charged as per extant Railway rules.</p> -->
            <!-- Passenger Details -->

            <div class="table-responsive">
                <table class="table text-1 table-sm table-striped">
                    <thead>
                        <tr>
                            <td colspan="4" class=""><span class="fw-600">Pasien</span>: <?= $d['pasien']; ?> <span class="float-end"><span class="fw-600">Tanggal Periksa</span>: <?= tgl_lengkap($d['tgl_periksa']); ?></span></td>
                        </tr>
                    </thead>
                </table>
            </div>
            <h6 class="text-4">Anamnesa : <b><?= $d['anamnesa']; ?></b></h6>
            <h6 class="text-4">Diagnosa : <b><?= $d['keterangan']; ?></b></h6>
            <br>
            <!-- Passenger Details -->
            <h6 class="text-4 mt-2">Tindakan</h6>
            <div class="table-responsive">
                <table class="table table-bordered text-1 table-sm">
                    <thead>
                        <tr>
                            <th width="65%">Nama</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $all_tindakan = 0;
                        foreach (perawatan($d['id_periksa']) as $p) : ?>
                            <tr>
                                <td><?= $p['nama_tindakan'] ?></td>
                                <td class="text-end"><?= nf($p['tarif']) ?></td>
                            </tr>
                            <?php $all_tindakan += $p['tarif']; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- Passenger Details -->
            <h6 class="text-4 mt-2">Obat</h6>
            <div class="table-responsive">
                <table class="table table-bordered text-1 table-sm">
                    <thead>
                        <tr>
                            <th width="65%">Nama</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $all_obat = 0;
                        foreach (obat($d['id_periksa']) as $p) : ?>
                            <tr>
                                <td><?= $p['nama'] ?></td>
                                <td class="text-end"><?= nf($p['harga']) ?></td>
                            </tr>
                            <?php $all_obat += $p['harga']; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- Fare Details -->
            <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="text-end" width="65%"><strong>Subtotal :</strong></td>
                            <td class="text-end"><?= nf($subtotal = $all_tindakan + $all_obat); ?></td>
                        </tr>
                        <tr>
                            <td class="text-end"><strong>Diskon :</strong></td>
                            <td class="text-end"><?= nf($d['diskon']) ?></td>
                        </tr>
                        <tr>
                            <td class="text-end"><strong>Total :</strong></td>
                            <td class="text-end"><?= nf($total = $subtotal - $d['diskon']); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">

                    </div>
                    <div class="col align-self-center">
                        <h6 class="mb-0 text-center">Dokter</h6>
                        <br><br>
                        <p class="mb-0 text-center"><b><?= $d['dokter']; ?></b></p>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer class="text-center">
            <hr>
            <!-- <p><strong>Koice Inc.</strong><br>
                4th Floor, Plot No.22, Above Public Park, 145 Murphy Canyon Rd,<br>
                Suite 100-18, San Diego CA 2028. </p>
            <hr> -->
        </footer>
    </div>

    <script>
        window.print();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

<!-- Mirrored from harnishdesign.net/demo/html/koice/index-invoice-trains.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2023 06:41:34 GMT -->

</html>