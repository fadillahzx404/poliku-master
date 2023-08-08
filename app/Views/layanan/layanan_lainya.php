<?= $this->extend('template/template'); ?>

<?= $this->section('page-content'); ?>
<div class="page-content page-home">
<div class="container">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Layanan Benings</h1>
    <p class="dashboard-subtitle">Berikut list dari layanan yang diberikan oleh benings yang mana anda dapat melihat detailnya di bawah ini</p>
  </div>
</div>
<hr class="solid">
<div class="row">
    <?php foreach ($layanan as $l) : ?>
          <div class="col-md-3 col-sm-3 mt-5">
            <a href="layanan_lainya/detail/<?= $l['id_layanan'] ?>" class="layanan-1 p-4 ">
              <div class="card card-layanan-1">
                <img src="<?= base_url() ?>public/img/layanan/<?= $l['thumbnail'] ?>" class="card-img-top img-fluid" alt="..." />
                <div class="card-body">
                  <h5 class="card-title"><?= $l['title'] ?></h5>
                  <p class="card-text">
                    <?= $l['deskripsi'] ?>
                  </p>
                </div>
              </div>
            </a>
          </div>

        <?php endforeach; ?>
</div>
</div>
</div>
<?= $this->endSection(); ?>