<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('pengguna','PenggunaController@awal');
// Route::get('pengguna/{Pengguna}','PenggunaController@lihat');
// Route::get('pengguna/lihat/{pengguna}', 'PenggunaController@lihat');
// Route::post('pengguna/simpan', 'PenggunaController@simpan');
// Route::get('pengguna/edit/{pengguna}', 'PenggunaController@edit');
// Route::post('pengguna/edit/{pengguna}', 'PenggunaController@update');
// Route::get('pengguna/hapus/{pengguna}', 'PenggunaController@hapus');


// Route::get('Mahasiswa','MahasiswaController@awal');
// Route::get('Mahasiswa/tambah','MahasiswaController@tambah');
// Route::get('Mahasiswa/simpan','MahasiswaController@simpan');

// Route::get('Matakuliah/{matakuliah}','MatakuliahController@lihat');
// Route::get('Matakuliah','MatakuliahController@awal');
// Route::get('Matakuliah/tambah','MatakuliahController@tambah');
// Route::post('Matakuliah/simpan','MatakuliahController@simpan');
// Route::get('Matakuliah/edit/{Matakuliah}','MatakuliahController@edit');
// Route::post('Matakuliah/edit/{Matakuliah}','MatakuliahController@update');
// Route::get('Matakuliah/hapus/{Matakuliah}','MatakuliahController@hapus');

// Route::get('Ruangan','RuanganController@awal');
// Route::get('Ruangan/tambah','RuanganController@tambah');
// Route::post('Ruangan/simpan','RuanganController@simpan');
// Route::get('Ruangan/edit/{Ruangan}','RuanganController@edit');
// Route::post('Ruangan/edit/{Ruangan}','RuanganController@update');
// Route::get('Ruangan/hapus/{Ruangan}','RuanganController@hapus');


// Route::get('Dosen','DosenController@awal');
// Route::get('Dosen/tambah','DosenController@tambah');

// Route::get('Dosen_Matakuliah','Dosen_MatakuliahController@awal');
// Route::get('Dosen_Matakuliah/tambah','Dosen_MatakuliahController@tambah');

// Route::get('Jadwal_Matakuliah','Jadwal_MatakuliahController@awal');
// Route::get('Jadwal_Matakuliah/tambah','Jadwal_MatakuliahController@tambah');

// Route::get('/', function(){
// 	return view('master');
// });

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/public', function () {
//     return ('Muhammad Fikri Anshori');
// });

// Route::get('pengguna/{pengguna}',function ($pengguna)
// {
// 	return "Hallo World dari pengguna $pengguna";
// });


Route::get('/', function () {
    return view ('master');
});

// -------------------------------------------

Route::get('/pengguna', 'PenggunaController@awal');

Route::get('/pengguna/tambah', 'PenggunaController@tambah');

//------------------------------------------------------------------

Route::get('/dosen', 'DosenController@awal');

Route::get('dosen/tambah', 'DosenController@tambah');

//------------------------------------------------------------------

Route::get('/mahasiswa', 'MahasiswaController@awal');

Route::get('/mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('/mahasiswa/tambah/route', function(){
		$mahasiswa = new App\Mahasiswa();
        $mahasiswa->nama = 'Muhammad Fikri Anshori';
        $mahasiswa->nim = '1515015144';
        $mahasiswa->alamat = 'Jl. Gunung Tunggal';
        $mahasiswa->pengguna_id = 1;
        $mahasiswa->save();
        return "Telah disave {$mahasiswa->nama} ke dalam databas";
});

//------------------------------------------------------------------

Route::get('/ruangan', 'RuanganController@awal');

Route::get('/ruangan/tambah', 'RuanganController@tambah');

//------------------------------------------------------------------

Route::get('/matakuliah', 'MatakuliahController@awal');

Route::get('/matakuliah/tambah', 'MatakuliahController@tambah');

//------------------------------------------------------------------

Route::get('/dosen_matakuliah', 'Dosen_matakuliahController@awal');

Route::get('/dosen_matakuliah/tambah', 'Dosen_MatakuliahController@tambah');

//------------------------------------------------------------------

Route::get('/jadwal_matakuliah', 'Jadwal_matakuliahController@awal');

Route::get('/jadwal_matakuliah/tambah', 'Jadwal_matakuliahController@tambah');

//------------------------------------------------------------------

Route::get('pengguna/lihat/{pengguna}', 'PenggunaController@lihat');
Route::post('pengguna/simpan', 'PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}', 'PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}', 'PenggunaController@hapus');

//------------------------------------------------------------------

Route::get('matakuliah/lihat/{matakuliah}', 'MatakuliahController@lihat');
Route::post('matakuliah/simpan', 'MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}', 'MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}', 'MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}', 'MatakuliahController@hapus');

//------------------------------------------------------------------

Route::get('ruangan/lihat/{ruangan}', 'RuanganController@lihat');
Route::post('ruangan/simpan', 'RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}', 'RuanganController@edit');
Route::post('ruangan/edit/{ruangan}', 'RuanganController@update');
Route::get('ruangan/hapus/{ruangan}', 'RuanganController@hapus');

//------------------------------------------------------------------

Route::get('mahasiswa/lihat/{mahasiswa}', 'MahasiswaController@lihat');
Route::post('mahasiswa/simpan', 'MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}', 'MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}', 'MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}', 'MahasiswaController@hapus');

//------------------------------------------------------------------

Route::get('dosen/lihat/{dosen}', 'DosenController@lihat');
Route::post('dosen/simpan', 'DosenController@simpan');
Route::get('dosen/edit/{dosen}', 'DosenController@edit');
Route::post('dosen/edit/{dosen}', 'DosenController@update');
Route::get('dosen/hapus/{dosen}', 'DosenController@hapus');

//------------------------------------------------------------------

Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}', 'Dosen_matakuliahController@lihat');
Route::post('dosen_matakuliah/simpan', 'Dosen_matakuliahController@tambah');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}', 'Dosen_matakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}', 'Dosen_matakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}', 'Dosen_matakuliahController@hapus');

//------------------------------------------------------------------

Route::get('jadwal_matakuliah/{jadwal_matakuliah}', 'Jadwal_matakuliahController@lihat');
Route::post('jadwal_matakuliah/simpan', 'Jadwal_matakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}', 'Jadwal_matakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}', 'Jadwal_matakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}', 'Jadwal_matakuliahController@hapus');