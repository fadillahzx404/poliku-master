<?= $this->extend('template/template'); ?>

<?= $this->section('page-content'); ?>
<main class="page-content">
  <!-- Body Content Wrapper -->
  <div class="login-content">
    <div class="container">
      
      <div class="row">
        <div class="col-md-6 image-login">
          <img
            src="https://img.freepik.com/free-vector/placeholder-concept-illustration_114360-8289.jpg?w=740&t=st=1685623714~exp=1685624314~hmac=83856838f429637bbcc9e7a82360d5cf277dcf316c9ce23e32d8c4149d692717"
            alt=""
            style="max-width: 100%"
          />
        </div>
        <div class="col-md-6 col-lg-4 login-form">
          <div class="form">
            <form method="post" action="<?= base_url() ?>auth/verif">
              

              <div class="d-flex">
                <img
                  src="img/logo.jpg"
                  alt=""
                  style="height: 50px; width: 50px"
                />
                <h3 class="title-login p-2">Login</h3>
              </div>

              <div class="mb-3 mt-4">
                <label for="validationCustom08">Username</label>
                <div class="input-group">
                  <input
                    type="text"
                    name="username"
                    class="form-control"
                    placeholder="Username"
                    required=""
                  />
                </div>
              </div>
              <div class="mb-2">
                <label for="validationCustom09">Password</label>
                <div class="input-group">
                  <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Password"
                    required=""
                  />
                </div>
              </div>
              <button type="submit" class="btn btn-login btn-block w-100 mt-4">
                Login ke akun saya
              </button>
              <a href="register" class="btn btn-signup btn-block w-100 mt-2"
                >Daftar</a
              >
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?= $this->endSection(); ?>
