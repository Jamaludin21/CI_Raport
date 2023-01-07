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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['index'] = 'home/index';
$route['tabel'] = 'Home/tabel';
$route['tabel_mapel'] = 'home/tabel_mapel';
$route['tabel_siswa_vii'] = 'home/tabel_siswa_vii';
$route['tabel_siswa_viii'] = 'home/tabel_siswa_viii';
$route['tabel_siswa_ix'] = 'home/tabel_siswa_ix';
$route['tabel_nilai'] = 'home/nilai';
$route['cetak/(:num)'] = 'home/cetak/$1';
$route['form'] = 'home/form';
$route['login'] = 'home/login';


$route['add_guru'] = 'Ajax/add_tabel';
$route['add_form'] = 'Ajax/add_form';
$route['add_kelas_vii'] = 'Ajax/add_kelas_vii';
$route['edit_kelas_vii'] = 'Ajax/edit_kelas_vii';
$route["edit_kelas_vii/(:num)"] = 'home/edit_kelas_vii/$1';
$route['delete_kelas_vii'] = 'Ajax/hapus_kelas_vii';
$route['add_kelas_viii'] = 'Ajax/add_kelas_viii';
$route['edit_kelas_viii'] = 'Ajax/edit_kelas_viii';
$route["edit_kelas_viii/(:num)"] = 'home/edit_kelas_viii/$1';
$route['delete_kelas_viii'] = 'Ajax/hapus_kelas_viii';
$route['add_kelas_ix'] = 'Ajax/add_kelas_ix';
$route['edit_kelas_ix'] = 'Ajax/edit_kelas_ix';
$route["edit_kelas_ix/(:num)"] = 'home/edit_kelas_ix/$1';
$route['delete_kelas_ix'] = 'Ajax/hapus_kelas_ix';
$route['edit_guru'] = 'Ajax/edit_guru';
$route['delete_guru'] = 'Ajax/hapus_guru';
$route["edit_guru/(:num)"] = 'home/edit_tabel/$1';
$route['edit_mapel'] = 'Ajax/edit_mapel';
$route["edit_mapel/(:num)"] = 'home/edit_mapel/$1';
