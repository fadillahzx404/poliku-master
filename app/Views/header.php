<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from androthemes.com/themes/html/medjestic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Dec 2022 01:18:52 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bening's</title>
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?= base_url() ?>/theme/medjestic/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/theme/medjestic/vendors/iconic-fonts/flat-icons/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>/theme/medjestic/vendors/iconic-fonts/cryptocoins/cryptocoins.css">
    <link rel="stylesheet" href="<?= base_url() ?>/theme/medjestic/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>/theme/medjestic/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="<?= base_url() ?>/theme/medjestic/assets/css/jquery-ui.min.css" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="<?= base_url() ?>/theme/medjestic/assets/css/slick.css" rel="stylesheet">
    <!-- medjestic styles -->
    <link href="<?= base_url() ?>/theme/medjestic/assets/css/style.css" rel="stylesheet">

    <!-- Page Specific CSS (Morris Charts.css) -->
    <link href="<?= base_url() ?>/theme/medjestic/assets/css/morris.css" rel="stylesheet">
    <!-- Page Specific Css (Datatables.css) -->
    <link href="<?= base_url() ?>/theme/medjestic/assets/css/datatables.min.css" rel="stylesheet">
    <!-- Favicon -->
    
    <link href="style/main.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    <!-- Setting Panel -->
    <div class="ms-toggler ms-settings-toggle ms-d-block-lg">
        <i class="flaticon-gear"></i>
    </div>
    <div class="ms-settings-panel ms-d-block-lg">
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <h4 class="section-title">Customize</h4>
                <div>
                    <label class="ms-switch">
                        <input type="checkbox" id="dark-mode">
                        <span class="ms-switch-slider round"></span>
                    </label>
                    <span> Dark Mode </span>
                </div>

            </div>
            <div class="col-xl-4 col-md-4">
                <h4 class="section-title">Keyboard Shortcuts</h4>
                <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
                <p class="ms-directions mb-0"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
                <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>
            </div>
        </div>
    </div>
    <!-- Preloader -->
    <!-- <div id="preloader-wrap">
        <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
        </div>
    </div> -->
    <!-- Overlays -->
    <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
    <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
    <!-- Sidebar Navigation Left -->
    <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
        <!-- Logo -->
        <div class="logo-sn ms-d-block-lg">
            <a class="pl-0 ml-0 text-center rounded-circle" href="index.html"> <img src="img/logo.png" alt="logo"> </a>

        </div>
        <!-- Navigation -->
        <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="<?= base_url() ?>dashboard">
                    <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
                </a>
            </li>
            <?php if (session('level') == 'users') { ?>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/dokter">
                        <span><i class="fas fa-user-md"></i>Doctor</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/pasien">
                        <span><i class="fas fa-user"></i>Pasien</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/obat">
                        <span><i class="fas fa-medkit"></i>Obat</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/booking/admin">
                        <span><i class="fas fa-list-alt"></i>List Booking</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/diagnosa">
                        <span><i class="fas fa-stethoscope"></i>Diagnosa</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/tarif">
                        <span><i class="fas fa-stethoscope"></i>Tarif</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/laporan">
                        <span><i class="flaticon-browser"></i>Laporan</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/laporan/payment">
                        <span><i class="flaticon-browser"></i>Payment</span>
                    </a>
                </li>
            <?php } ?>
            <?php if (session('level') == 'dokter') { ?>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/booking/dokter">
                        <span><i class="fas fa-list-alt"></i>List Booking</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/diagnosa">
                        <span><i class="fas fa-stethoscope"></i>Diagnosa</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/rekam_medis">
                        <span><i class="flaticon-browser"></i>Rekam Medis</span>
                    </a>
                </li>
            <?php } ?>
            <?php if (session('level') == 'pasien') { ?>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/booking">
                        <span><i class="fas fa-list-alt"></i>List Booking</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/rekam_medis/pasien/<?= session('id') ?>">
                        <span><i class="flaticon-browser"></i>Rekam Medis</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url() ?>/laporan/pasien/<?= session('id') ?>">
                        <span><i class="flaticon-browser"></i>Riwayat Pembayaran</span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </aside>
    <!-- Sidebar Right -->
    <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
        <div class="ms-aside-header">
            <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
                <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a></li>
                <li role="presentation" class="fs-12"><a href="#recentPosts" aria-controls="recentPosts" role="tab" data-toggle="tab"> Settings </a></li>
                <li><button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
            </ul>
        </div>
        <div class="ms-aside-body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
                    <ul class="ms-activity-log">
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-light">
                                <i class="flaticon-gear"></i>
                            </div>
                            <h6>Update 1.0.0 Pushed</h6>
                            <span> <i class="material-icons">event</i>1 January, 2019</span>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-success">
                                <i class="flaticon-tick-inside-circle"></i>
                            </div>
                            <h6>Profile Updated</h6>
                            <span> <i class="material-icons">event</i>4 March, 2018</span>
                            <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-warning">
                                <i class="flaticon-alert-1"></i>
                            </div>
                            <h6>Your payment is due</h6>
                            <span> <i class="material-icons">event</i>1 January, 2019</span>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-danger">
                                <i class="flaticon-alert"></i>
                            </div>
                            <h6>Database Error</h6>
                            <span> <i class="material-icons">event</i>4 March, 2018</span>
                            <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-info">
                                <i class="flaticon-information"></i>
                            </div>
                            <h6>Checkout what's Trending</h6>
                            <span> <i class="material-icons">event</i>1 January, 2019</span>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-secondary">
                                <i class="flaticon-diamond"></i>
                            </div>
                            <h6>Your Dashboard is ready</h6>
                            <span> <i class="material-icons">event</i>4 March, 2018</span>
                            <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary d-block"> View All </a>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="recentPosts">
                    <h6>General Settings</h6>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Location Tracking</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Allow Notifications</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Allow Popups</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <h6>Log Settings</h6>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Enable Logging</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Audit Logs</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Error Logs</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <h6>Advanced Settings</h6>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Enable Logging</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Audit Logs</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Error Logs</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- Main Content -->
    <main class="body-content">
        <!-- Navigation Bar -->
        <nav class="navbar ms-navbar">
            <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
                <span class="ms-toggler-bar bg-white"></span>
                <span class="ms-toggler-bar bg-white"></span>
                <span class="ms-toggler-bar bg-white"></span>
            </div>
            <div class="logo-sn logo-sm ms-d-block-sm">
                <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.html"><img src="<?= base_url() ?>/theme/medjestic/assets/img/medjestic-logo-84x41.png" alt="logo"> </a>
            </div>
            <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

                <li class="ms-nav-item  ms-d-none">
                    <a href="#mymodal" class="text-white" data-toggle="modal"><i class="flaticon-spreadsheet mr-2"></i> Make an appointment</a>
                </li>

                <li class="ms-nav-item ms-d-none">
                    <a href="#prescription" class="text-white" data-toggle="modal"><i class="flaticon-pencil mr-2"></i> Write a prescription</a>
                </li>

                <li class="ms-nav-item ms-d-none">
                    <a href="#report1" class="text-white" data-toggle="modal"><i class="flaticon-list mr-2"></i> Generate Report</a>
                </li>

                <li class="ms-nav-item dropdown">
                    <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
                        <li class="dropdown-menu-header">
                            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6>
                            <span class="badge badge-pill badge-info">4 New</span>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="ms-scrollable ms-dropdown-list">
                            <a class="media p-2" href="#">
                                <div class="media-body">
                                    <span>12 ways to improve your crypto dashboard</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                                </div>
                            </a>
                            <a class="media p-2" href="#">
                                <div class="media-body">
                                    <span>You have newly registered users</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                                </div>
                            </a>
                            <a class="media p-2" href="#">
                                <div class="media-body">
                                    <span>Your account was logged in from an unauthorized IP</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                                </div>
                            </a>
                            <a class="media p-2" href="#">
                                <div class="media-body">
                                    <span>An application form has been submitted</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-menu-footer text-center">
                            <a href="#">View all Notifications</a>
                        </li>
                    </ul>
                </li>
                <li class="ms-nav-item ms-nav-user dropdown">
                    <a href="#" class="text-disabled ms-has-notification" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="flaticon-user"></i>
                        <!-- <img class="ms-user-img ms-img-round float-right" src="<?= base_url() ?>/theme/medjestic/assets/img/dashboard/doctor-3.jpg" alt="people"> -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                        <li class="dropdown-menu-header">
                            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, <?= session('nama') ?></span></h6>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="ms-dropdown-list">
                            <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
                            <a class="media fs-14 p-2" href="pages/apps/email.html"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>
                            <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-menu-footer">
                            <a class="media fs-14 p-2" href="pages/prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
                        </li>
                        <li class="dropdown-menu-footer">
                            <a class="media fs-14 p-2" href="<?= base_url() ?>/auth/logout"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
                <span class="ms-toggler-bar bg-white"></span>
                <span class="ms-toggler-bar bg-white"></span>
                <span class="ms-toggler-bar bg-white"></span>
            </div>
        </nav>