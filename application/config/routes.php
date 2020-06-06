<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'not_found';
$route['translate_uri_dashes'] = FALSE;

// /* ----- ADMIN ----- */

// $route['adm_dashboard']                  = 'admin/overview';
// $route['adm_aktifasi_akun']              = 'admin/pages/aktifasi_akun';

// $route['adm_data_semua_mahasiswa']       = 'admin/pages/mahasiswa/data_semua_mahasiswa';
// $route['adm_mahasiswa_diterima']         = 'admin/pages/mahasiswa/diterima';
// $route['adm_mahasiswa_ditolak']          = 'admin/pages/mahasiswa/ditolak';
// $route['adm_mahasiswa_belum_verifikasi'] = 'admin/pages/mahasiswa/belum_verifikasi';

// $route['adm_bayar_data_semua_mahasiswa'] = 'admin/pages/pembayaran/data_semua_mahasiswa';
// $route['adm_mahasiswa_sudah_registrasi'] = 'admin/pages/pembayaran/sudah_registrasi';
// $route['adm_mahasiswa_belum_registrasi'] = 'admin/pages/pembayaran/belum_registrasi';

// $route['adm_pendaftaran']                = 'admin/pages/pengaturan/pendaftaran';
// $route['adm_pengumuman']                 = 'admin/pages/pengaturan/pengumuman';
// $route['adm_prodi']                      = 'admin/pages/pengaturan/prodi';
// $route['adm_gelombang']                  = 'admin/pages/pengaturan/gelombang';

// /* ----- PUBLIC ----- */

// $route['home']                           = 'public/home';
// $route['program_studi']                  = 'public/pages/program_studi';
// $route['tentang']                        = 'public/pages/tentang';
// $route['alur']                           = 'public/pages/alur';
// $route['kontak']                         = 'public/pages/kontak';
// $route['login']                          = 'public/pages/login';
// $route['login/(:any)']                   = 'public/pages/login/$1';
// $route['login/(:any)/(:any)']            = 'public/pages/login/$1/$2';
// $route['daftar']                         = 'public/pages/daftar';
// $route['forgot']                         = 'public pages/forgot';

// /* ----- PESERTA ----- */

// $route['isi_formulir']                   = 'peserta/isi_formulir';
// $route['asal_sekolah']                   = 'peserta/pages/asal_sekolah';
// $route['biodata']                        = 'peserta/pages/biodata';
// $route['ekonomi']                        = 'peserta/pages/ekonomi';
// $route['keluarga']                       = 'peserta/pages/keluarga';
// $route['pilih_jurusan']                  = 'peserta/pages/pilih_jurusan';
// $route['prestasi']                       = 'peserta/pages/prestasi';