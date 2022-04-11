<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', 'AuthController@login')->name('login')->middleware('guest');

//Landingpage
Route::get('/', 'LandingpageController@index')->name('landingpage-index');
Route::post('/login-proses', 'AuthController@login_proses')->name('login-proses')->middleware('guest');


Route::get('/about', 'LandingpageController@about')->name('landingpage-about');
Route::get('/dewan_direksi', 'LandingpageController@dewan_direksi')->name('landingpage-dewan_direksi');
Route::get('/dewan_komisaris', 'LandingpageController@dewan_komisaris')->name('landingpage-dewan_komisaris');


Route::get('/penyewaan_alat_berat', 'LandingpageController@penyewaan_alat_berat')->name('landingpage-penyewaan_alat_berat');
Route::get('/konstruksi_jalan_raya', 'LandingpageController@konstruksi_jalan_raya')->name('landingpage-konstruksi_jalan_raya');
Route::get('/penyiapan_lahan', 'LandingpageController@penyiapan_lahan')->name('landingpage-penyiapan_lahan');
Route::get('/perdagangan_material', 'LandingpageController@perdagangan_material')->name('landingpage-perdagangan_material');
Route::get('/penanganan_kargo', 'LandingpageController@penanganan_kargo')->name('landingpage-penanganan_kargo');


Route::get('/komitmen', 'LandingpageController@komitmen')->name('landingpage-komitmen');


//middleware Admin
Route::group(['middleware' => ['auth', 'admin']],function(){
    Route::get('/admin', 'AdminController@index')->name('admin');


    Route::get('/admin_visi_misi', 'AdminController@admin_visi_misi')->name('admin_visi_misi');
    Route::post('/admin_visi_misi_add', 'AdminController@admin_visi_misi_add')->name('admin_visi_misi_add');
    Route::post('/admin_visi_misi_update/{id}', 'AdminController@admin_visi_misi_update')->name('admin_visi_misi_update');
    Route::post('/admin_visi_misi_delete/{id}', 'AdminController@admin_visi_misi_delete')->name('admin_visi_misi_delete');



    Route::get('/admin_dewan_direksi', 'AdminController@admin_dewan_direksi')->name('admin_dewan_direksi');
    Route::post('/admin_dewan_direksi_add', 'AdminController@admin_dewan_direksi_add')->name('admin_dewan_direksi_add');
    Route::post('/admin_dewan_direksi_update/{id}', 'AdminController@admin_dewan_direksi_update')->name('admin_dewan_direksi_update');
    Route::post('/admin_dewan_direksi_delete/{id}', 'AdminController@admin_dewan_direksi_delete')->name('admin_dewan_direksi_delete');

    Route::get('/admin_dewan_komisaris', 'AdminController@admin_dewan_komisaris')->name('admin_dewan_komisaris');
    Route::post('/admin_dewan_komisaris_add', 'AdminController@admin_dewan_komisaris_add')->name('admin_dewan_komisaris_add');
    Route::post('/admin_dewan_komisaris_update/{id}', 'AdminController@admin_dewan_komisaris_update')->name('admin_dewan_komisaris_update');
    Route::post('/admin_dewan_komisaris_delete/{id}', 'AdminController@admin_dewan_komisaris_delete')->name('admin_dewan_komisaris_delete');


    Route::get('/admin_profil_perusahaan', 'AdminController@admin_profil_perusahaan')->name('admin_profil_perusahaan');
    Route::post('/admin_profil_perusahaan_add', 'AdminController@admin_profil_perusahaan_add')->name('admin_profil_perusahaan_add');
    Route::post('/admin_profil_perusahaan_update/{id}', 'AdminController@admin_profil_perusahaan_update')->name('admin_profil_perusahaan_update');
    Route::post('/admin_profil_perusahaan_delete/{id}', 'AdminController@admin_profil_perusahaan_delete')->name('admin_profil_perusahaan_delete');


    //layanan dan produk
    Route::get('/admin_penyewaan_alat_berat', 'AdminController@admin_penyewaan_alat_berat')->name('admin_penyewaan_alat_berat');
    Route::get('/admin_konstruksi_jalan', 'AdminController@admin_konstruksi_jalan')->name('admin_konstruksi_jalan');
    Route::get('/admin_penanganan_kargo', 'AdminController@admin_penanganan_kargo')->name('admin_penanganan_kargo');
    Route::get('/admin_penyiapan_lahan', 'AdminController@admin_penyiapan_lahan')->name('admin_penyiapan_lahan');
    Route::get('/admin_perdagangan_material', 'AdminController@admin_perdagangan_material')->name('admin_perdagangan_material');

    Route::post('/admin_produk_dan_solusi_add', 'AdminController@admin_produk_dan_solusi_add')->name('admin_produk_dan_solusi_add');
    Route::post('/admin_produk_dan_solusi_update/{id}', 'AdminController@admin_produk_dan_solusi_update')->name('admin_produk_dan_solusi_update');
    Route::post('/admin_produk_dan_solusi_delete/{id}', 'AdminController@admin_produk_dan_solusi_delete')->name('admin_produk_dan_solusi_delete');

    Route::get('/admin_detail_produk_dan_solusi/{id}', 'AdminController@admin_detail_produk_dan_solusi')->name('admin_detail_produk_dan_solusi');

    Route::post('/admin_image_layanan_add', 'AdminController@admin_image_layanan_add')->name('admin_image_layanan_add');
    Route::post('/admin_image_layanan_update/{id}', 'AdminController@admin_image_layanan_update')->name('admin_image_layanan_update');
    Route::post('/admin_image_layanan_delete/{id}', 'AdminController@admin_image_layanan_delete')->name('admin_image_layanan_delete');


    //komitmen
    Route::get('/admin_komitmen_kami', 'AdminController@admin_komitmen_kami')->name('admin_komitmen_kami');
    Route::post('/admin_komitmen_kami_add', 'AdminController@admin_komitmen_kami_add')->name('admin_komitmen_kami_add');
    Route::post('/admin_komitmen_kami_update/{id}', 'AdminController@admin_komitmen_kami_update')->name('admin_komitmen_kami_update');
    Route::post('/admin_komitmen_kami_delete/{id}', 'AdminController@admin_komitmen_kami_delete')->name('admin_komitmen_kami_delete');

    Route::get('logout-admin', 'AuthController@logout')->name('logout-admin')->middleware('auth','admin');

});

