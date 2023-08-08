<?= $this->include('header') ?>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Tambah Rekam Medis</h6>
                    <a href="<?= base_url() ?>/rekam_medis" class="ms-text-primary">Data Rekam Medis
                    </a>
                </div>
                <div class="ms-panel-body">
                    <form class="needs-validation" method="post" action="<?= base_url() ?>/rekam_medis/tambah" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>Nama Pasien</label>
                                <div class="input-group">
                                    <select class="form-control" name="id_pasien" id="validationCustom220" required>
                                        <option value="">Pilih Pasien</option>
                                        <?php foreach ($pasien as $d) : ?>
                                            <option value="<?= $d['id_pasien'] ?>"><?= $d['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Berat Badan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="berat_badan" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Saturasi Oksigen</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="saturasi_oksigen" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Suhu Badan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="suhu_badan" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Golongan Darah</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="golongan_darah" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Diabetes</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="diabetes" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Haemopilia</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="haemopilia" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Tekanan Darah</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="tekanan_darah" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Sakit Jantung</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="sakit_jantung" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Riwayat Penyakit Lain</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="riwayat_penyakit_lain" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Alergi Obat</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="alergi_obat" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Alergi Makanan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="alergi_makanan" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Keterangan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="keterangan" id="validationCustom002" placeholder="" req>

                                </div>
                            </div>
                        </div>
                        <button class="btn btn-warning mt-4 d-inline w-20" type="reset">Reset</button>
                        <button class="btn btn-primary mt-4 d-inline w-20" name="submit" value="submit" type="submit">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Tambah Rekam Medis</h6>
                    <a href="<?= base_url() ?>/rekam_medis" class="ms-text-primary">Data Rekam Medis
                    </a>
                </div>
                <div class="ms-panel-body">
                    <form class="ms-form-wizard ms-wizard-pill style2-wizard">
                        <h3>Application</h3>
                        <div class="ms-wizard-step">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>First name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="First name" value="John">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Last name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Last name" value="Doe">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Email Address</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Payment</h3>
                        <div class="ms-wizard-step">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Payment Method</label>
                                    <ul class="ms-payment-container">
                                        <li>
                                            <div class="ms-radio-img">
                                                <input type="radio" name="payment-method" value="">
                                                <div class="ms-payment-img">
                                                    <img src="../../assets/img/payment/payment-payoneer.png" alt="payment">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ms-radio-img">
                                                <input type="radio" name="payment-method" value="">
                                                <div class="ms-payment-img">
                                                    <img src="../../assets/img/payment/payment-visa.png" alt="payment">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ms-radio-img">
                                                <input type="radio" name="payment-method" value="">
                                                <div class="ms-payment-img">
                                                    <img src="../../assets/img/payment/payment-paypal.png" alt="payment">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ms-radio-img">
                                                <input type="radio" name="payment-method" value="">
                                                <div class="ms-payment-img">
                                                    <img src="../../assets/img/payment/payment-master.png" alt="payment">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-md-12 mb-3">
                                    <label>Card Holder Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Card Holder Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12">
                                    <label>Card Number</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Card Number">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <label>Month</label>
                                    <div class="input-group">
                                        <select class="form-control">
                                            <option value="">01</option>
                                            <option value="">02</option>
                                            <option value="">03</option>
                                            <option value="">04</option>
                                            <option value="">05</option>
                                            <option value="">06</option>
                                            <option value="">07</option>
                                            <option value="">08</option>
                                            <option value="">09</option>
                                            <option value="">10</option>
                                            <option value="">11</option>
                                            <option value="">12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <label>Year</label>
                                    <div class="input-group">
                                        <select class="form-control">
                                            <option value="">2020</option>
                                            <option value="">2021</option>
                                            <option value="">2022</option>
                                            <option value="">2023</option>
                                            <option value="">2024</option>
                                            <option value="">2025</option>
                                            <option value="">2026</option>
                                            <option value="">2027</option>
                                            <option value="">2028</option>
                                            <option value="">2029</option>
                                            <option value="">2030</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <label data-toggle="tooltip" data-placement="left" title="3 digit number at the back of your card">CVV <i class="material-icons">info_outline</i> </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="CVV">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Proceed</h3>
                        <div class="ms-wizard-step">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('footer') ?>