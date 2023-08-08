<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Poliku</title>
  <link href="<?= base_url() ?>style/main.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url() ?>script/sweetalert2.min.css">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-home fixed-top">
  <div class="container">

    <a class="navbar-brand" href="#"><img src="<?= base_url() ?>img/logo.png" width="70" height="70" class="d-inline-block align-text-center" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url() ?>home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>layanan_lainya">Layanan</a>
        </li>

        <?php if (isset($_SESSION['username'])) { ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkAuth" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hi, <?= $_SESSION['nama'] ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkAuth">
              <?php if ($_SESSION['level'] == 'Admin') { ?> <li><a class="dropdown-item" href="<?= base_url() ?>dashboard"><span><i class="fa-solid fa-table-columns" style="padding-right: 5px;"></i></span>Dashboard</a></li> <?php } ?>
              <?php if ($_SESSION['level'] == 'dokter') { ?> <li><a class="dropdown-item" href="<?= base_url() ?>booking/dokter"><span><i class="fa-solid fa-table-columns" style="padding-right: 5px;"></i></span>Menu Dokter</a></li> <?php } ?>
              <?php if ($_SESSION['level'] == 'pasien') { ?> <li><a class="dropdown-item" href="<?= base_url() ?>booking/pasien"><span><i class="fa-solid fa-table-columns" style="padding-right: 5px;"></i></span>Booking</a></li> <?php } ?>
              <li><a class="dropdown-item" href="<?= base_url() ?>logout"><i class="fa-solid fa-right-from-bracket" style="padding-right: 5px;"></i>Logout</a></li>
            </ul>
          </li>
        <?php } else { ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Have Account ?
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="<?= base_url() ?>login"><i class="fa-solid fa-up-right-from-square" style="padding-right: 5px;"></i>Login</a></li>
              <li><a class="dropdown-item" href="<?= base_url() ?>register"><i class="fa-regular fa-id-card" style="padding-right: 5px;"></i>Register</a></li>
            </ul>
          </li>
        <?php } ?>


      </ul>
    </div>
  </div>
</nav>




<?= $this->renderSection('page-content'); ?>

<script src="<?= base_url() ?>vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="<?= base_url() ?>script/navbar-scroll.js"></script>
<script src="https://kit.fontawesome.com/d3336582c4.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  $(function() {
    <?php if (session()->has("pesan")) { ?>
      Swal.fire({
        icon: "success",
        title: "Selamat",
        text: '<?= session('pesan') ?>',
        timer: 2000,
        timerProgressBar: true,
        showConfirmButton: false,
      });

    <?php } ?>
    <?php if (session()->has("error")) { ?>
      Swal.fire({
        icon: 'error',
        title: "Ada Yang Salah",
        text: '<?= session('error') ?>',
        timer: 2000,
        timerProgressBar: true,
        showConfirmButton: false,
      });
    <?php } ?>
  });
</script>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <p class="pt-4 pb-2">2020 Copyright Store. All Right Reserved.</p>
      </div>
    </div>
  </div>
</footer>
</body>

</html>