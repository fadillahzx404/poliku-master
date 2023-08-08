<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <link href="<?= base_url() ?>style/main.css" rel="stylesheet" />
  <link href="<?= base_url() ?>style/content-styles.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url() ?>script/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" />


</head>

<body id="sidebar">
  <div class="page-dashboard">
    <div class="d-flex" id="wrapper" data-aos="fade-right">
      <div class="border-right sticky-top sticky-top d-sm-none d-md-block" id="sidebar-wrapper">

        <div class="card">
          <div class="card-body">
            <div class="sidebar-heading text-center pt-5">
              <a href="">
                <img src="<?= base_url() ?>img/logo.png" class="rounded-circle" style="width: 100px; height: 100px; border: solid 1px #c5c5c5" alt="" />
              </a>
            </div>
            <ul class="list-group list-group-flush pt-5">
              <?php if (session('level') == 'Admin') { ?>
                <a href="<?= base_url() ?>dashboard" class="list-group-item list-group-item-action <?php if (url_is('dashboard*')) {
                                                                                                      echo 'active';
                                                                                                    } ?>">
                  <span><i class="fa-solid fa-house icon-list"></i>Dashboard</span>
                </a>
                <a href="<?= base_url() ?>dokter" class="list-group-item list-group-item-action <?php if (url_is('dokter*')) {
                                                                                                  echo 'active';
                                                                                                } ?>">
                  <span><i class="fa-solid fa-user-doctor icon-list"></i>Dokter</span>
                </a>
                <a href="<?= base_url() ?>pasien" class="list-group-item list-group-item-action <?php if (url_is('pasien*')) {
                                                                                                  echo 'active';
                                                                                                } ?>">
                  <span><i class="fa-solid fa-hospital-user icon-list"></i>Pasien</span>
                </a>
                <a href="<?= base_url() ?>obat" class="list-group-item list-group-item-action <?php if (url_is('obat*')) {
                                                                                                echo 'active';
                                                                                              } ?>">
                  <span><i class="fa-solid fa-pills icon-list"></i>Obat</span>
                </a>
                <a href="<?= base_url() ?>booking/admin" class="list-group-item list-group-item-action <?php if (url_is('booking*')) {
                                                                                                          echo 'active';
                                                                                                        } ?>">
                  <span><i class="fa-solid fa-book-open-reader icon-list"></i>List
                    Booking</span>
                </a>
                <a href="<?= base_url() ?>diagnosa" class="list-group-item list-group-item-action <?php if (url_is('diagnosa*')) {
                                                                                                    echo 'active';
                                                                                                  } ?>">
                  <span><i class="fa-solid fa-stethoscope icon-list"></i>Diagnosa</span>
                </a>
                <a href="<?= base_url() ?>tarif" class="list-group-item list-group-item-action <?php if (url_is('tarif*')) {
                                                                                                  echo 'active';
                                                                                                } ?>">
                  <span><i class="fa-solid fa-money-check-dollar icon-list"></i>Tarif</span>
                </a>
                <a href="<?= base_url() ?>laporan" class="list-group-item list-group-item-action <?php if (url_is('laporan*')) {
                                                                                                    echo 'active';
                                                                                                  } ?>">
                  <span><i class="fa-solid fa-file icon-list"></i>Laporan</span>
                </a>
                <a href="<?= base_url() ?>payment" class="list-group-item list-group-item-action <?php if (url_is('payment*')) {
                                                                                                    echo 'active';
                                                                                                  } ?>">
                  <span><i class="fa-solid fa-file-invoice icon-list"></i>Payment</span>
                </a>
                <a href="<?= base_url() ?>layanan" class="list-group-item list-group-item-action <?php if (url_is('layanan*')) {
                                                                                                    echo 'active';
                                                                                                  } ?>">
                  <span><i class="fa-solid fa-list-check icon-list"></i>Layanan Home</span>
                </a>

              <?php } ?>
              <?php if (session('level') == 'dokter') { ?>
                <a href="<?= base_url() ?>booking/dokter" class="list-group-item list-group-item-action <?php if (url_is('booking*')) {
                                                                                                          echo 'active';
                                                                                                        } ?>">
                  <span><i class="fa-solid fa-book-open-reader icon-list"></i>List
                    Booking</span>
                </a>
                <a href="<?= base_url() ?>jadwal/dokter" class="list-group-item list-group-item-action <?php if (url_is('jadwal*')) {
                                                                                                        echo 'active';
                                                                                                      } ?>">
                <span><i class="fa-solid fa-calendar-days icon-list"></i>Jadwal Dokter</span>
              </a>
                <a href="<?= base_url() ?>diagnosa" class="list-group-item list-group-item-action <?php if (url_is('diagnosa*')) {
                                                                                                    echo 'active';
                                                                                                  } ?>">
                  <span><i class="fa-solid fa-stethoscope icon-list"></i>Diagnosa</span>
                </a>
                <a href="<?= base_url() ?>rekam_medis/dokter" class="list-group-item list-group-item-action <?php if (url_is('rekam_medis*')) {
                                                                                                              echo 'active';
                                                                                                            } ?>">
                  <span><i class="fa-brands fa-medrt icon-list"></i>Rekam Medis</span>
                </a>
              <?php } ?>
              <?php if (session('level') == 'pasien') { ?>
                <a href="<?= base_url() ?>booking/pasien" class="list-group-item list-group-item-action <?php if (url_is('booking*')) {
                                                                                                          echo 'active';
                                                                                                        } ?>">
                  <span><i class="fa-solid fa-book-open-reader icon-list"></i>List
                    Booking</span>
                </a>
                <a href="<?= base_url() ?>rekam_medis/pasien/<?= session('id') ?>" class="list-group-item list-group-item-action <?php if (url_is('rekam_medis*')) {
                                                                                                                                    echo 'active';
                                                                                                                                  } ?>">
                  <span><i class="fa-solid fa-brands fa-medrt icon-list"></i>Rekaman Medis</span>
                </a>
                <a href="<?= base_url() ?>laporan/pasien/<?= session('id') ?>" class="list-group-item list-group-item-action <?php if (url_is('laporan*')) {
                                                                                                                                echo 'active';
                                                                                                                              } ?>">
                  <span><i class="fa-solid fa-file-invoice icon-list"></i>Pembayaran</span>
                </a>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>


      <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light navbar-store sticky-top" data-aos="fade-down" style="background-color: white;">
          <div class="container-fluid">
            <div class="d-md-none d-sm-block">
              <a class="btn btn-warning" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" id="hide-sidebar"><i class="fa-solid fa-bars"></i></a>
            </div>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  <b>Hi, <?= session()->nama ?></b>
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="<?= base_url() ?>home"><span><i class="fa-solid fa-house icon-list"></i></span>Home</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="<?= base_url() ?>logout"><span><i class="fa-solid fa-right-from-bracket icon-list"></span></i>Log out</a></li>
                </ul>


              </div>
            </ul>

          </div>
        </nav>

        <div class="offcanvas offcanvas-start static" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <a class="navbar-brand">
              <img src="<?= base_url() ?>img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Benings</h5>
            </a>

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <?php if (session('level') == 'Admin') { ?>
              <ul class="list-group list-group-flush pt-5">
                <a href="<?= base_url() ?>dashboard" class="list-group-item list-group-item-action <?php if (url_is('dashboard*')) {
                                                                                                      echo 'active';
                                                                                                    } ?>">
                  <span><i class="fa-solid fa-house icon-list"></i>Dashboard</span>
                </a>
                <a href="<?= base_url() ?>dokter" class="list-group-item list-group-item-action <?php if (url_is('dokter*')) {
                                                                                                  echo 'active';
                                                                                                } ?>">
                  <span><i class="fa-solid fa-user-doctor icon-list"></i>Dokter</span>
                </a>
                <a href="<?= base_url() ?>pasien" class="list-group-item list-group-item-action <?php if (url_is('pasien*')) {
                                                                                                  echo 'active';
                                                                                                } ?>">
                  <span><i class="fa-solid fa-hospital-user icon-list"></i>Pasien</span>
                </a>
                <a href="<?= base_url() ?>obat" class="list-group-item list-group-item-action <?php if (url_is('obat*')) {
                                                                                                echo 'active';
                                                                                              } ?>">
                  <span><i class="fa-solid fa-pills icon-list"></i>Obat</span>
                </a>
                <a href="<?= base_url() ?>booking/admin" class="list-group-item list-group-item-action <?php if (url_is('booking*')) {
                                                                                                          echo 'active';
                                                                                                        } ?>">
                  <span><i class="fa-solid fa-book-open-reader icon-list"></i>List
                    Booking</span>
                </a>
                <a href="<?= base_url() ?>diagnosa" class="list-group-item list-group-item-action <?php if (url_is('diagnosa*')) {
                                                                                                    echo 'active';
                                                                                                  } ?>">
                  <span><i class="fa-solid fa-stethoscope icon-list"></i>Diagnosa</span>
                </a>
                <a href="<?= base_url() ?>tarif" class="list-group-item list-group-item-action <?php if (url_is('tarif*')) {
                                                                                                  echo 'active';
                                                                                                } ?>">
                  <span><i class="fa-solid fa-money-check-dollar icon-list"></i>Tarif</span>
                </a>
                <a href="<?= base_url() ?>laporan" class="list-group-item list-group-item-action <?php if (url_is('laporan*')) {
                                                                                                    echo 'active';
                                                                                                  } ?>">
                  <span><i class="fa-solid fa-file icon-list"></i>Laporan</span>
                </a>
                <a href="<?= base_url() ?>payment" class="list-group-item list-group-item-action <?php if (url_is('payment*')) {
                                                                                                    echo 'active';
                                                                                                  } ?>">
                  <span><i class="fa-solid fa-file-invoice icon-list"></i>Payment</span>
                </a>
                <a href="<?= base_url() ?>layanan" class="list-group-item list-group-item-action <?php if (url_is('layanan*')) {
                                                                                                    echo 'active';
                                                                                                  } ?>">
                  <span><i class="fa-solid fa-file-invoice icon-list"></i>Layanan Home</span>
                </a>
              </ul>
            <?php } ?>
            <?php if (session('level') == 'dokter') { ?>
              <a href="<?= base_url() ?>booking/dokter" class="list-group-item list-group-item-action <?php if (url_is('booking*')) {
                                                                                                        echo 'active';
                                                                                                      } ?>">
                <span><i class="fa-solid fa-book-open-reader icon-list"></i>List
                  Booking</span>
              </a>
              <a href="<?= base_url() ?>jadwal/dokter" class="list-group-item list-group-item-action <?php if (url_is('jadwal*')) {
                                                                                                        echo 'active';
                                                                                                      } ?>">
                <span><i class="fa-solid fa-book-open-reader icon-list"></i>List
                  Jadwal Dokter</span>
              </a>
              <a href="<?= base_url() ?>diagnosa" class="list-group-item list-group-item-action <?php if (url_is('diagnosa*')) {
                                                                                                  echo 'active';
                                                                                                } ?>">
                <span><i class="fa-solid fa-stethoscope icon-list"></i>Diagnosa</span>
              </a>
              <a href="<?= base_url() ?>rekam_medis/dokter" class="list-group-item list-group-item-action <?php if (url_is('rekam_medis*')) {
                                                                                                            echo 'active';
                                                                                                          } ?>">
                <span><i class="fa-brands fa-medrt icon-list"></i>Rekam Medis</span>
              </a>
            <?php } ?>
            <?php if (session('level') == 'pasien') { ?>
              <a href="<?= base_url() ?>booking/pasien" class="list-group-item list-group-item-action <?php if (url_is('booking*')) {
                                                                                                        echo 'active';
                                                                                                      } ?>">
                <span><i class="fa-solid fa-book-open-reader icon-list"></i>List
                  Booking</span>
              </a>
              <a href="<?= base_url() ?>rekam_medis/pasien/<?= session('id') ?>" class="list-group-item list-group-item-action <?php if (url_is('rekam_medis*')) {
                                                                                                                                  echo 'active';
                                                                                                                                } ?>">
                <span><i class="fa-solid fa-brands fa-medrt icon-list"></i>Rekaman Medis</span>
              </a>
              <a href="<?= base_url() ?>laporan/pasien/<?= session('id') ?>" class="list-group-item list-group-item-action <?php if (url_is('laporan*')) {
                                                                                                                              echo 'active';
                                                                                                                            } ?>">
                <span><i class="fa-solid fa-file-invoice icon-list"></i>Pembayaran</span>
              </a>
            <?php } ?>

          </div>
        </div>
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
        <?= $this->renderSection('page-content'); ?>
      </div>
    </div>
  </div>
  <script src="<?= base_url() ?>vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="<?= base_url() ?>script/navbar-scroll.js"></script>
  <script src="<?= base_url() ?>script/myscript.js"></script>
  <script src="<?= base_url() ?>script/changeActive.js"></script>
  <script src="https://kit.fontawesome.com/d3336582c4.js" crossorigin="anonymous"></script>
  <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#table-dashboard").DataTable({
        responsive: true
      });
    });
  </script>
  <script src="<?= base_url() ?>script/sweetalert2.all.min.js"></script>
  <script src="<?= base_url() ?>script/sweetalert2.min.js"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <script>
    $('#timepicker1').timepicker({
      timeFormat: 'H:mm',
      interval: 60,
      minTime: '10',
      maxTime: '6:00pm',
      defaultTime: '11',
      startTime: '10:00',
      dynamic: false,
      dropdown: true,
      scrollbar: true
    });
  </script>
  <script>
    $('#datepicker').datepicker({
      format: 'yyyy/mm/dd',

    });
  </script>
  <script>
    $('#tindakan_add').appendTo("body")
  </script>
  <script>
    $('#obat_add').appendTo("body")
  </script>
  <script>
    $(document).ready(function() {
      $('#tindakan').DataTable();
    });
    $(document).ready(function() {
      $('#obat').DataTable();
    });
  </script>

  <script>
    if($("input[id='tunai']").is(":checked",true)){
        document.getElementById("tunai-btn").style.display = "block";
        document.getElementById("non-tunai-btn").style.display = "none";

      }
      else if ($("input[id='non-tunai']").is(":checked",true)){
        document.getElementById("tunai-btn").style.display = "none";
        document.getElementById("non-tunai-btn").style.display = "block";

      }
  </script>



  

<script type="text/javascript">
    $(document).ready(function() {
      
        $("input[name='radio']").click(function() {
            var radioValue1 = $("input[id='tunai']:checked");
            var radioValue2 = $("input[id='non-tunai']:checked");

            if (radioValue1) {
;
                document.getElementById('metode_id').submit();

                
            }else if(radioValue2){

              document.getElementById('metode_id').submit();
            }
        });
    });
    
</script>

<script type="text/javascript">
    $(document).ready(function() {
      
        $("input[name='UbahMetode']").click(function() {
            var radioValue1 = $("input[id='tunai']:checked");
            var radioValue2 = $("input[id='non-tunai']:checked");

            if (radioValue1) {

                document.getElementById('metode_admin').submit();

                
            }else if(radioValue2){

              document.getElementById('metode_admin').submit();
            }
        });
    });
    
</script>

<script type="text/javascript">
    $(document).ready(function() {
      
        $("input[name='checkPembayaran']").click(function() {
            var radioValue1 = $("input[id='b-bayar']:checked");
            var radioValue2 = $("input[id='s-bayar']:checked");

            if (radioValue1) {

                document.getElementById('check_bayar').submit();
                
            }else if(radioValue2){

              document.getElementById('check_bayar').submit();
            }
            else{
              ""
            }
        });
    });
   
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector("#editor"));
</script>



</body>

</html>