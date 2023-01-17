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
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/konsultasi', function () {
    return view('konsultasi');
});



//Route::get('/jadwal-dokter', function () {
//    return view('jadwal-dokter');
//});

Route::get('/jadwal-dokter', 'JadwalDokterController@daftar_jadwal_dokter');


Route::get('/login-mahasiswa', function () {
    return view('login-mahasiswa');
});

Route::get('/rekam-medis-inputid', function () {
    return view('rekam-medis-inputid');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rekam-medis/{id}', 'RekamMedisController@rekammedis');

Route::get('/rekam-medis/show/{id}', 'RekamMedisController@rekammedisshow');

Route::post('/rekam-medis/create', 'RekamMedisController@rekammediscreate');

Route::get('/rekam-medis/{id}/edit', 'RekamMedisController@rekammedisedit');

Route::post('/rekam-medis/{id}/update', 'RekamMedisController@rekammedisupdate');

Route::get('/rekam-medis/{id}/delete', 'RekamMedisController@rekammedisdelete');

// STAFF
Route::prefix('admin')->group(function(){
	Route::get('/dashboard','StaffController@dashboard');
	Route::get('/jadwal-dokter','StaffController@jadwal_dokter');
	Route::get('/rekam-medis', 'StaffController@rekam_medis_daftar');
	//Route::get('/rekam-medis/individu', 'StaffController@rekam_medis_individu');

	Route::get('/rekam-medis/individu/{id}', 'StaffController@rekam_medis_individu');
	Route::get('/rekam-medis-detail/{id}', 'StaffController@rekam_medis_detail');
	Route::get('/rekam-medis-tambah', 'StaffController@rekam_medis_tambah');
	Route::post('/rekam-medis/create', 'StaffController@rekam_medis_create');
	//Route::post('/rekam-medis/create', 'RekamMedisController@rekammediscreate');

	
	Route::get('/rekam-medis-delete/{id}', 'StaffController@rekam_medis_delete');
	Route::get('/rekam-medis-edit/{id}', 'StaffController@rekam_medis_edit');
	Route::post('/rekam-medis-edit/{id}/update', 'StaffController@rekam_medis_update');

	Route::get('/jadwal-dokter/tambah','StaffController@jadwal_dokter_tambah');
	Route::post('/jadwal-dokter/create','StaffController@jadwal_dokter_create');
	Route::get('/jadwal-dokter/{id}/edit','StaffController@jadwal_dokter_edit');
	Route::post('/jadwal-dokter/{id}/update','StaffController@jadwal_dokter_update');
	Route::get('/jadwal-dokter/{id}/delete','StaffController@jadwal_dokter_delete');

});


Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/dokter', 'Auth\LoginController@showDokterLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/dokter', 'Auth\RegisterController@showDokterRegisterForm');
    
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/dokter', 'Auth\LoginController@dokterLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/dokter', 'Auth\RegisterController@createDokter');
    
Route::view('/home', 'home')->middleware('auth');
//Route::view('/admin', 'staff.dashboard-staff');
Route::view('/dokter', 'dokter');

// REKAM MEDIS
Route::prefix('rekam-medis')->group(function(){
	Route::view('/individu', 'rekam-medis-individu');
});





