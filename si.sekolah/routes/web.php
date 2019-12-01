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

Route::get('/', function () {
    return view('index');
});
/*				ADMIN 				*/
Route::get('/admin',function() {  /* DATA ADMIN */
	return view('admin.dashboard');
});

Route::get('/admin.guru',function() { /* DATA GURU */
	return view('admin.guru');
});

Route::get('/admin.siswa',function() { /* DATA MURID & KELAS (MANGGIL DATA KELAS) */
	return view('admin.siswa');
});

Route::get('/admin.kelas',function() { /* DATA KELAS */
	return view('admin.kelas');
});

Route::get('/admin.mapel',function() { /* DATA MATA PELAJARAN */
	return view('admin.mapel');
});

Route::get('/admin.jadwal',function() { /* Gambar Jadwal */
	return view('admin.jadwal');
});
/*				GURU 			*/	

Route::get('/guru',function() {
	return view('guru.dashboard'); /* BIO & KETERANGAN WALI KELAS*/
});

Route::get('/guru.nilai',function() { /* MELAKUKAN PENILAIAN */
	return view('guru.nilai');
});
Route::get('/guru.kelas',function() { /* CETAK RAPORT */
	return view('guru.kelas');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function(){
    return view('admin');
})->name('adminpage');
Route::get('admin-login','Auth\AdminLoginController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);
Route::get('admin-register','Auth\AdminLoginController@showRegisterPage');
Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');