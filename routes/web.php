<?php

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
Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/dashboard', 'HomeController@index')->name('index');

// route for mhs module
Route::get('/mhs', 'Mhs@index')->name('index');
Route::get('/mhs_aktif', 'Mhs@mhs_aktif')->name('mhs_aktif');
Route::get('/mhs_memenuhi_syarat', 'Mhs@mhs_memenuhi_syarat')->name('mhs_memenuhi_syarat');
Route::get('/mhs_tidak_memenuhi_syarat', 'Mhs@mhs_tidak_memenuhi_syarat')->name('mhs_tidak_memenuhi_syarat');
Route::get('/verifikasi_data_mhs', 'Mhs@verifikasi_data_mhs')->name('verifikasi_data_mhs');
Route::get('/upload_data_mhs', 'Mhs@upload_data_mhs')->name('upload_data_mhs');
Route::get('/verifikasi_sukses', 'Mhs@verifikasi_sukses')->name('verifikasi_sukses');
Route::get('/verifikasi_gagal', 'Mhs@verifikasi_gagal')->name('verifikasi_gagal');


// route for dosen module
Route::get('/dosen', 'Dosen@index')->name('index');
Route::get('/topik_ta_mhs', 'Dosen@topik_ta_mhs')->name('topik_ta_mhs');
Route::get('/set_pembimbing_skripsi', 'Dosen@set_pembimbing_skripsi')->name('set_pembimbing_skripsi');


// route for sempro module
// Route::get('/dosen', 'Sempro@index')->name('index');
Route::get('/form_pengajuan_topik', 'Sempro@form_pengajuan_topik')->name('form_pengajuan_topik');
Route::get('/topik_ta', 'Sempro@topik_ta')->name('topik_ta');
Route::get('/form_perubahan_topik', 'Sempro@form_perubahan_topik')->name('form_perubahan_topik');
Route::get('/status_sempro', 'Sempro@status_sempro')->name('status_sempro');
Route::get('/jadwal_sempro', 'Sempro@jadwal_sempro')->name('jadwal_sempro');
Route::get('/verifikasi_seminar', 'Sempro@verifikasi_seminar')->name('verifikasi_seminar');
Route::get('/perpanjang_sempro', 'Sempro@perpanjang_sempro')->name('perpanjang_sempro');
Route::get('/pendafatan_sempro', 'Sempro@pendafatan_sempro')->name('pendafatan_sempro');
Route::get('/penguji_sempro', 'Sempro@penguji_sempro')->name('penguji_sempro');

// route for kompre module
// Route::get('/dosen', 'Kompre@index')->name('index');
Route::get('/data_prasyarat_ta', 'Kompre@data_prasyarat_ta')->name('data_prasyarat_ta');
Route::get('/status_skripsi', 'Kompre@status_skripsi')->name('status_skripsi');
Route::get('/jadwal_skripsi', 'Kompre@jadwal_skripsi')->name('jadwal_skripsi');
Route::get('/verifikasi_skripsi', 'Kompre@verifikasi_skripsi')->name('verifikasi_skripsi');
Route::get('/perpanjang_skripsi', 'Kompre@perpanjang_skripsi')->name('perpanjang_skripsi');
Route::get('/pendaftaran_skripsi', 'Kompre@pendaftaran_skripsi')->name('pendaftaran_skripsi');
Route::get('/jadwal_penguji', 'Kompre@jadwal_penguji')->name('jadwal_penguji');


// route for system module
Route::get('/user_account_list', 'System@user_account_list')->name('user_account_list');
Route::get('/user_group', 'System@user_group')->name('user_group');
Route::get('/bidang_ilmu', 'System@bidang_ilmu')->name('bidang_ilmu');
Route::get('/angkatan', 'System@angkatan')->name('angkatan');
Route::get('/kelas', 'System@kelas')->name('kelas');