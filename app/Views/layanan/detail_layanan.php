<?= $this->extend('template/template'); ?>

<?= $this->section('page-content'); ?>
<div class="page-content page-home">
<div class="container">
    
<div class="row">
    <div class="col-md-8 mt-3">
<img src="<?= base_url() ?>public/img/layanan/<?= $layanan->thumbnail ?>" alt="" width="90%" height="80%" style="border-radius: 6%">
</div>
<div class="col-md-4 mt-5">
    <h2><?= $layanan->title ?></h2>
    <p><?= $layanan->deskripsi ?></p>
</div>
<div class="col-md-12" style="text-align: -webkit-center">
    <button type="button" class="btn btn-warning"><i class="fa-solid fa-arrow-left"></i> Layanan Lainya</button>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>