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

//Laravel
Route::get('/', [IndexController::class, 'index'])->name('/');

Route::get('login', [AuthController::class, 'login'])->name('login');

Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Monitor (Game)
    // Game
    Route::get('/kategori-game', [MonitorController::class, 'kategorigame'])->name('kategori-game');
    // Monitor
    Route::get('/monitor-siswa', [MonitorController::class, 'index'])->name('monitor-siswa');
    Route::post('/filter-name', [MonitorController::class, 'filter_name'])->name('filter-name');

    // Siswa Set
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
    Route::get('/siswa/{id}/lihat-nilai', [SiswaController::class, 'lihatnilai'])->name('lihat-nilai');
    Route::get('/siswa-tambah', [SiswaController::class, 'tambahsiswa'])->name('siswa-tambah');
    Route::post('/siswa-prosestambah', [SiswaController::class, 'addprosessiswa'])->name('siswa-prosestambah');
    Route::get('/siswa/{id}/edit-siswa', [SiswaController::class, 'editsiswa'])->name('edit-siswa');
    Route::post('/siswa/{id}/edit-siswa-proses', [SiswaController::class, 'editsiswaproses'])->name('edit-siswa-proses');
    Route::get('/siswa/{id}/hapus-siswa', [SiswaController::class, 'hapussiswa'])->name('hapus-siswa');
    //Siswa End

    // Guru Set
    Route::get('/guru', [GuruController::class, 'index'])->name('guru');
    Route::get('/guru-tambah', [GuruController::class, 'tambahguru'])->name('guru-tambah');
    Route::post('/guru-prosestambah', [GuruController::class, 'addprosesguru'])->name('guru-prosestambah');
    Route::get('/guru/{id}/edit-guru', [GuruController::class, 'editguru'])->name('edit-guru');
    Route::post('/guru/{id}/edit-guru-proses', [GuruController::class, 'editguruproses'])->name('edit-guru-proses');
    Route::get('/guru/{id}/hapus-guru', [GuruController::class, 'hapusguru'])->name('hapus-guru');
   

    Route::get('/logout', function (){
        \Auth::logout();
        return redirect('/');
    });
});
Auth::routes();