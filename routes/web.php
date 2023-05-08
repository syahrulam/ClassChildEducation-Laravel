<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\CceController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SoalController;

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

//Start
Route::get('/', [IndexController::class, 'index'])->name('/');
Route::get('login', [AuthController::class, 'login'])->name('login');
//End

Auth::routes();

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('auth');
    Route::get('/kategori-game', [MonitorController::class, 'kategorigame'])->name('kategori-game')->middleware('auth');
    Route::get('/monitor-siswa', [MonitorController::class, 'index'])->name('monitor-siswa')->middleware('auth');
    Route::post('/filter-name', [MonitorController::class, 'filter_name'])->name('filter-name')->middleware('auth');

    // Siswa Set
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa')->middleware('auth');
    Route::get('/siswa/{id}/lihat-nilai', [SiswaController::class, 'lihatnilai'])->name('lihat-nilai')->middleware('auth');
    Route::get('/siswa-tambah', [SiswaController::class, 'tambahsiswa'])->name('siswa-tambah')->middleware('auth');
    Route::post('/siswa-prosestambah', [SiswaController::class, 'addprosessiswa'])->name('siswa-prosestambah')->middleware('auth');
    Route::get('/siswa/{id}/edit-siswa', [SiswaController::class, 'editsiswa'])->name('edit-siswa')->middleware('auth');
    Route::post('/siswa/{id}/edit-siswa-proses', [SiswaController::class, 'editsiswaproses'])->name('edit-siswa-proses')->middleware('auth');
    Route::get('/siswa/{id}/hapus-siswa', [SiswaController::class, 'hapussiswa'])->name('hapus-siswa')->middleware('auth');
    // Siswa End

    // Guru Set
    Route::get('/guru', [GuruController::class, 'index'])->name('guru')->middleware('Adminakses');
    Route::get('/guru-tambah', [GuruController::class, 'tambahguru'])->name('guru-tambah')->middleware('Adminakses');
    Route::post('/guru-prosestambah', [GuruController::class, 'addprosesguru'])->name('guru-prosestambah')->middleware('Adminakses');
    Route::get('/guru/{id}/edit-guru', [GuruController::class, 'editguru'])->name('edit-guru')->middleware('Adminakses');
    Route::post('/guru/{id}/edit-guru-proses', [GuruController::class, 'editguruproses'])->name('edit-guru-proses')->middleware('Adminakses');
    Route::get('/guru/{id}/hapus-guru', [GuruController::class, 'hapusguru'])->name('hapus-guru')->middleware('Adminakses');
    // Guru End

    // Kelas Start
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas')->middleware('Adminakses');
    Route::get('/kelas-tambah', [KelasController::class, 'tambahkelas'])->name('kelas-tambah')->middleware('Adminakses');
    Route::post('/kelas-prosestambah', [KelasController::class, 'addproseskelas'])->name('kelas-prosestambah')->middleware('Adminakses');
    Route::get('/kelas/{id}/edit-kelas', [KelasController::class, 'editkelas'])->name('edit-kelas')->middleware('Adminakses');
    Route::post('/kelas/{id}/edit-kelas-proses', [KelasController::class, 'editkelasproses'])->name('edit-kelas-proses')->middleware('Adminakses');
    Route::get('/kelas/{id}/hapus-kelas', [KelasController::class, 'hapuskelas'])->name('hapus-kelas')->middleware('Adminakses');
    // kelas end

    // soal Start
    Route::get('/soal-kuis', [SoalController::class, 'index'])->name('soal-kuis')->middleware('Adminakses');
    Route::get('/soal-tambah', [SoalController::class, 'tambahsoal'])->name('soal-tambah')->middleware('Adminakses');
    Route::post('/soal-prosestambah', [SoalController::class, 'store'])->name('soal-prosestambah')->middleware('Adminakses');
    Route::get('/soal/{id}/edit-soal', [SoalController::class, 'editsoal'])->name('edit-soal')->middleware('Adminakses');
    Route::post('/soal/{id}/edit-soal-proses', [SoalController::class, 'update'])->name('edit-soal-proses')->middleware('Adminakses');
    Route::get('/soal/{id}/hapus-soal', [SoalController::class, 'hapussoal'])->name('hapus-soal')->middleware('Adminakses');
    // soal end 
     
    //
    Route::get('/logout', function (){
        \Auth::logout();
        return redirect('/');
    });