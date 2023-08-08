<?= $this->extend('template/template'); ?>

<?= $this->section('page-content'); ?>
<div class="page-content page-home">
  <div class="container">
    <div class="content-1">
      <div class="row">
        <div class="col-md-6">
          <div class="d-flex flex-column">
            <div class="title-head">
              <h1>
                Smile Brigter with us,<br />your trusthed Dental Care Provider.
              </h1>
            </div>
            <div class="button-book">
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Book Now
              </button>

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Hallo !</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Mohon Maaf,<br>
                      Apakah anda sudah punya akun ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak Jadi<i class="icon-javascript-colored"></i></button>
                      <a href="<?= base_url() ?>register" class="btn btn-warning">Belum Punya</a>
                      <a href="<?= base_url() ?>login" class="btn btn-success">Sudah Punya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <img class="w-100" src="img/Cover1.jpg" style="border-radius: 6%" alt="" />
        </div>
      </div>
    </div>
    <div class="content-2">
      <div class="row">
        <div class="col-md-12" style="text-align: -webkit-center">
          <h3 class="col-md-3 title-h3 rounded layanan-title">Layanan</h3>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-md-3 ">
        <?php foreach ($layanan as $l) : ?>
          <div class="col ">
            <div class="card h-100 ">
              <img src="<?= base_url() ?>public/img/layanan/<?= $l['thumbnail'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $l['title'] ?></h5>
                <p class="card-text text-break"><?= $l['deskripsi'] ?></p>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      </div>





      <div class="col-md-12 mt-4 text-center">
        <a href="layanan_lainya" class="btn btn-outline-warning">Layanan lainya <i class="fa-solid fa-arrow-right"></i></a>
      </div>


    </div>
    <div class="content-3 row">
      <div class="col-md-12">
        <h3 class="col-md-3 title-h3 rounded tentang-kami text-center" style="padding: 8px">
          Tentang Kami
        </h3>
        <p class="pt-3">
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book.
        </p>
        <div class="row pt-3 ">
          <div class="col-md-6 galeri">
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" class="d-block w-100" style="border-radius: 6%" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="https://images.unsplash.com/photo-1600170311833-c2cf5280ce49?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" style="border-radius: 6%" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="https://plus.unsplash.com/premium_photo-1661768526823-8e7941279818?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" class="d-block w-100" style="border-radius: 6%" alt="..." />
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-md-6 information">
            <h5>Alamat</h5>
            <i class="fa-solid fa-location-dot"></i>
            <a class="link-location p-2" href="https://goo.gl/maps/ECLTGjGdEcUUguFC9">Perum 2 Jl. Prambanan Raya, No. 8A, Cibodas, RT.005/RW.012,<br />
              Cibodasari, Kec. Tangerang, Kota Tangerang, Banten 15138</a>
            <h5 class="pt-5">Kontak Kami</h5>
            <div class="d-flex flex-column pt-2">
              <div class="flex-item">
                <i class="fa-solid fa-phone"></i>
                <a class="p-2" href="">+62123456789</a>
              </div>
              <div class="flex-item pt-2">
                <i class="fa-solid fa-envelope"></i>
                <a class="p-2" href="">beningss.id@gmail.com</a>
              </div>
              <div class="flex-item pt-2">
                <i class="fa-brands fa-square-instagram"></i>
                <a class="p-2" href="">@Poliku</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>