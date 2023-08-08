<?= $this->extend('template/template'); ?>
<?= $this->section('page-content'); ?>
<main class="page-content">
  <!-- Body Content Wrapper -->
  <div class="page-content">
    <div class="container">
      <div class="row justify-content-center">
        
        

              <div class="col-md-7 col-lg-6 image-register text-center">
                <div class="dashboard-subtitlle">
                    
<p><b>Hallo Bening friend !!!</b> <br>
                      Silakan buat akun terlebih dahulu untuk melanjutkan booking.</p>
                      
                    
                  </div>
                <img
                  src="https://img.freepik.com/free-vector/account-concept-illustration_114360-5201.jpg?w=740&t=st=1685562068~exp=1685562668~hmac=c181ee0b239b73ea4b477b3200d71b24f460c185c8a47a8dce0e8f7b2265816c"
                  alt=""
                  class="img-fluid"
                />
                
              </div>
              <div class="col-md-7 col-lg-4 mt-4 register-form">
                <div class="title-registrasi mb-4">
                  <h4>
                    <img src="img/logo.png" alt=""  style="width: 100px" />
                    Registrasi
                  </h4>
                  
                  <?php if (session()->getFlashdata('_ci_validation_errors')) : ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach (session()->getFlashdata('_ci_validation_errors') as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>  
                </div>
                <form method="post" action="<?= base_url() ?>/auth/simpan_registrasi">
                  <?= csrf_field(); ?>
                  <div class="mb-3">
                    <label class="form-label" for="nik"
                      >NIK</label
                    >
                    <div class="input-group">
                      <input
                        type="number"
                        id="nik"
                        name="nik"
                        class="form-control "
                        placeholder="317306*********"
                        required
                        autocomplete="nik"
                        autofocus
                      />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="username"
                      >Username</label
                    >
                    <div class="input-group">
                      <input
                        type="text"
                        id="username"
                        name="username"
                        class="form-control"
                        placeholder="Masukan username Anda"
                        required
                        autocomplete="name"
                      />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="password"
                      >Password</label
                    >
                    <div class="input-group">
                      <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukan Password Anda"
                        required
                        autocomplete="name"
                      />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="nama"
                      >Nama</label
                    >
                    <div class="input-group">
                      <input
                        type="text"
                        id="nama"
                        name="nama"
                        class="form-control"
                        placeholder="Masukan nama anda"
                        required
                        autocomplete="name"
                      />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="email"
                      >Email</label
                    >
                    <div class="input-group">
                      <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        placeholder="Test@gmail.com"
                        required
                        autocomplete="email"
                      />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="jenis_kelamin"
                      >Jenis Kelamin</label
                    >
                    <div class="input-group">
                      <select
                        name="jenis_kelamin"
                        id="jenis_kelamin"
                        class="form-control"
                        required
                      >
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="telepon"
                      >Telepon</label
                    >
                    <div class="input-group">
                      <input
                        type="number"
                        name="telepon"
                        id="telepon"
                        class="form-control"
                        placeholder="+6212345678"
                        required
                        autocomplete="telepon"
                      />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="alamat"
                      >Alamat</label
                    >
                    <div class="input-group">
                      <textarea
                        type="text"
                        name="alamat" 
                        id="alamat" 
                        class="form-control"
                        placeholder="Kp.Hebat Jalan Sehat Rt.001/002"
                        required=""
                      ></textarea>
                    </div>
                  </div>
                  <button
                    type="submit"
                    class="btn btn-signup btn-block w-100 mt-2"
                  >
                    Daftar Sekarang
                  </button>
                  <a href="login" class="btn btn-login btn-block w-100 mt-2"
                    >Sudah punya Akun, Login Sekarang</a
                  >
                </form>
              
        </div>
      </div>
    </div>
  </div>
</main>
<?= $this->endSection(); ?>
