
<?= $this->extend('sidebar'); ?>

<?= $this->section('page-content'); ?>
<!-- Body Content Wrapper -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Data Layanan</h2>
            <p class="dashboard-subtitle">
                Data Layanan di Benings!
            </p>
        </div>
        <div class="dashboard-content">
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
            <div class="row mt-3">
                <div class="col-md-6 mb-3">
                    <a href="<?= base_url() ?>layanan/tambah" type="button" class="btn btn-warning">
                        <span>
                            <i class="fa-solid fa-plus"></i>
                        </span>
                        Tambah Layanan
                    </a>
                </div>
                <div class="col-12 mb-4 table-dashboard">
                    <div class="card">
                        <div class="card-header">
                            <h5>Data Layanan Pada Home</h5>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table id="table-dashboard" class="table table-striped pt-3 pb-3" style="width:100%">
                                    <thead>
                                        <tr class="head-title">
                                            <th>Active</th>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        
                                        foreach ($layanan as $d) : ?>
                                        
                                            <tr>
                                                <td>
                                                     <?php if($d['active'] == 1){ ?>
                                                        <span class="badge bg-success">Active</span>
                                                    <?php } else { ?>
                                                        <span class="badge bg-danger">Not-Active</span>
                                                        <?php } ?>
                                                   
                                                </td>
                                                <td><?= $no++; ?></td>
                                                <td><img class="img-fluid" src="<?= base_url() ?>/public/img/layanan/<?= $d['thumbnail'] ?>" style="height: 200px;width:300px;" alt=""></td>
                                                <td><?= $d['title'] ?></td>
                                                <td><?= $d['deskripsi'] ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Aksi
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item" href="<?= base_url(); ?>layanan/edit/<?= $d['id_layanan']; ?>"><span><i class="fa-solid fa-pen-to-square icon-list"></i></span>Ubah</a></li>
                                                            <li>
                                                                <div class="dropdown-divider"></div>
                                                            </li>
                                                            <li><a class="dropdown-item btn-hapus" href="<?= base_url(); ?>layanan/hapus/<?= $d['id_layanan']; ?>"><span><i class="fa-solid fa-trash icon-list"></i></span>Hapus</a></li>
                                                        </ul>
                                                    </div>
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