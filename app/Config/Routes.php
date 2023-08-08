<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('<index></index>');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

#Route GET
#Route Home
$routes->get('/', 'Home::home');
$routes->get('/home', 'Home::home');
$routes->get('/sidebar', 'Home::sidebar');


#Route Auth
$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::registrasi');
$routes->post('/register/simpan_registrasi', 'Auth::simpan_registrasi');

#Route Dashboard
$routes->get('dashboard', 'Dashboard::index');
$routes->get('dashboard/dokter', 'Dashboard::dokter');
$routes->get('dashboard/pasien', 'Dashboard::pasien');

#Route Dokter
$routes->get('dokter', 'Dokter::index');
$routes->get('dokter/tambah', 'Dokter::tambah');
$routes->get('dokter/edit/(:segment)', 'Dokter::edit/$1');
$routes->get('dokter/hapus/(:num)', 'Dokter::hapus/$1');

#Route Pasien
$routes->get('pasien', 'Pasien::index');
$routes->get('pasien/tambah', 'Pasien::tambah');
$routes->get('pasien/edit/(:segment)', 'Pasien::edit/$1');
$routes->get('pasien/hapus/(:num)', 'Pasien::hapus/$1');

#Route Obat
$routes->get('obat', 'Obat::index');
$routes->get('obat/tambah', 'Obat::tambah');
$routes->get('obat/edit/(:segment)', 'Obat::edit/$1');
$routes->get('obat/hapus/(:num)', 'Obat::hapus/$1');

#Route Booking Admin
$routes->get('booking/admin', 'Booking::admin');
$routes->get('booking/admin/tambah', 'Booking::admin_tambah');
$routes->post('booking/admin/tambah', 'Booking::admin_tambah');
$routes->get('booking/admin/edit/(:segment)', 'Booking::admin_edit/$1');
$routes->post('booking/admin/edit/(:segment)', 'Booking::admin_tambah/$1');
$routes->get('booking/admin/hapus/(:num)', 'Booking::admin_hapus/$1');

#Route Booking Pasien
$routes->get('booking/pasien', 'Booking::index');
$routes->get('booking/pasien/tambah/(:num)', 'Booking::tambah/$1');
$routes->get('booking/tambah_jam', 'Booking::tambah_jam');
$routes->post('booking/tambah_jam', 'Booking::tambah_jam');
$routes->post('booking/pasien/tambah/(:num)', 'Booking::tambah/$1');
$routes->get('booking/pasien/edit/(:segment)', 'Booking::edit/$1');
$routes->post('booking/pasien/edit/(:segment)', 'Booking::edit/$1');
$routes->get('booking/pasien/hapus/(:num)', 'Booking::hapus/$1');

#Route Booking Dokter

$routes->get('booking/dokter', 'Booking::dokter');
$routes->get('booking/dokter/tambah', 'Booking::tambah');
$routes->post('booking/dokter/tambah', 'Booking::tambah');

#Route Jadwal Dokter
$routes->get('jadwal/dokter', 'Dokter::jadwal');
$routes->get('jadwal/edit/(:num)', 'Dokter::editjadwal/$1');
$routes->post('jadwal/edit/(:num)', 'Dokter::editjadwal/$1');
$routes->get('jadwal/jam/(:num)', 'Dokter::pilihjam/$1');
$routes->post('jadwal/jam/(:num)', 'Dokter::pilihjam/$1');

#Route Rekam Medis
$routes->get('rekam_medis/pasien/(:segment)', 'Rekam_medis::pasien/$1');
$routes->get('rekam_medis/data_periksa/(:segment)', 'Rekam_medis::data_periksa/$1');
$routes->get('rekam_medis/invoice/(:num)', 'Rekam_medis::invoice/$1');
$routes->post('rekam_medis/rekam_medis_save/', 'Rekam_medis::rekam_medis_save');
$routes->post('rekam_medis/tambah/(:segment)', 'Rekam_medis::tambah/$1');
$routes->get('rekam_medis/tambah_periksa/(:segment)', 'Rekam_medis::tambah_periksa/$1');
$routes->post('rekam_medis/tambah_periksa/(:segment)', 'Rekam_medis::tambah_periksa/$1');
$routes->get('rekam_medis/tindakan/(:segment)', 'Rekam_medis::tindakan/$1');
$routes->get('rekam_medis/dokter', 'Rekam_medis::index');
$routes->get('rekam_medis/periksa/(:segment)', 'Rekam_medis::periksa/$1');
$routes->post('rekam_medis/tindakan_add', 'Rekam_medis::tindakan_add');
$routes->get('rekam_medis/tindakan_min/(:num)/(:any)', 'Rekam_medis::tindakan_min/$1/$2');
$routes->post('rekam_medis/obat_add', 'Rekam_medis::obat_add');
$routes->get('rekam_medis/obat_add', 'Rekam_medis::obat_add');
$routes->get('rekam_medis/obat_min/(:num)/(:any)', 'Rekam_medis::obat_min/$1/$2');
$routes->get('rekam_medis/rekam_akhir/(:num)', 'Rekam_medis::rekam_akhir/$1');
$routes->post('rekam_medis/rekam_akhir/(:num)', 'Rekam_medis::rekam_akhir/$1');
$routes->post('rekam_medis/rekam_akhir/(:num)', 'Rekam_medis::rekam_akhir/$1');

#Route Dignosa
$routes->get('diagnosa', 'Diagnosa::index');
$routes->get('diagnosa/tambah', 'Diagnosa::tambah');
$routes->post('diagnosa/tambah', 'Diagnosa::tambah');
$routes->get('diagnosa/edit/(:segment)', 'Diagnosa::edit/$1');
$routes->post('diagnosa/edit/(:segment)', 'Diagnosa::edit/$1');
$routes->get('diagnosa/hapus/(:segment)', 'Diagnosa::hapus/$1');



#Route Tarif
$routes->get('tarif', 'Tarif::index');
$routes->get('tarif/tambah', 'Tarif::tambah');
$routes->post('tarif/tambah', 'Tarif::tambah');
$routes->get('tarif/edit/(:segment)', 'Tarif::edit/$1');
$routes->post('tarif/edit/(:segment)', 'Tarif::edit/$1');
$routes->get('tarif/hapus/(:num)', 'tarif::hapus/$1');

#Route Laporan
$routes->get('laporan', 'Laporan::index');
$routes->get('laporan/tambah', 'Laporan::tambah');
$routes->get('laporan/pasien/(:segment)', 'Laporan::pasien/$1');
$routes->get('laporan/pasien/(:num)/(:any)', 'Laporan::detail_invoice/$1/$2');
$routes->post('laporan/pasien/m_add', 'Laporan::metode_pembayaran_add');
$routes->post('laporan/admin/m_add', 'Laporan::metode_pembayaran_admin');
$routes->get('laporan/cetak_laporan/(:num)', 'Laporan::cetak_laporan/$1');
$routes->post('laporan/admin/check_bayar_add', 'Laporan::check_bayar_add');
$routes->get('payment', 'Laporan::payment');
$routes->get('payment/pasien/(:num)/(:any)', 'Laporan::payment_pasien/$1/$2');

#Route Layanan
$routes->get('layanan', 'Layanan::index');
$routes->get('layanan/edit/(:num)', 'Layanan::edit/$1');
$routes->post('layanan/edit/(:num)', 'Layanan::edit/$1');
$routes->get('layanan/tambah', 'Layanan::tambah');
$routes->post('layanan/tambah_layanan', 'Layanan::tambah_layanan');
$routes->get('layanan/edit/(:num)', 'Layanan::edit/$1');
$routes->get('layanan/hapus/(:num)', 'Layanan::hapus/$1');
$routes->post('layanan/change_active', 'Layanan::change_active');
$routes->get('layanan_lainya', 'Layanan::layanan_lainya');
$routes->get('layanan_lainya/detail/(:num)', 'Layanan::detail_layanan/$1');

#Route POST
$routes->post('auth/simpan_registrasi', 'Auth::simpan_registrasi');
$routes->post('auth/verif', 'Auth::verif');
$routes->post('dokter/tambah', 'Dokter::tambah');
$routes->post('dokter/edit/(:segment)', 'Dokter::edit/$1');
$routes->post('pasien/tambah', 'Pasien::tambah');
$routes->post('pasien/edit/(:segment)', 'Pasien::edit/$1');
$routes->post('obat/tambah', 'Obat::tambah');
$routes->post('obat/edit/(:segment)', 'Obat::edit/$1');


$routes->get('logout', 'Auth::logout');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
