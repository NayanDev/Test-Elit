<?php

use App\Http\Controllers\AlumniController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\PekerjaanController;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// route::resource('mahasiswa', 'MahasiswaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', [DashboardController::class, 'index']);

// Pekerjaan 
Route::get('/dataPekerjaan', [PekerjaanController::class, 'getData'])->name('data.pekerjaan');
Route::post('/pekerjaan/import', [PekerjaanController::class, 'import'])->name('import.pekerjaan');
Route::get('/pekerjaan/export', [PekerjaanController::class, 'export'])->name('export.pekerjaan');
Route::resource('pekerjaan', 'PekerjaanController');

//  Mahasiswa
Route::get('/dataMahasiswa', [MhsController::class, 'getData'])->name('data.mahasiswa');
Route::post('/mahasiswa/import', [MhsController::class, 'import'])->name('import.mahasiswa');
Route::get('/mahasiswa/export', [MhsController::class, 'export'])->name('export.mahasiswa');
Route::get('/mahasiswa/print', [MhsController::class, 'print'])->name('print.mahasiswa');
Route::resource('mahasiswa', 'MhsController');

// Alumni
Route::get('/dataAlumni', [AlumniController::class, 'getData'])->name('data.alumni');
Route::post('/alumni/import', [AlumniController::class, 'import'])->name('import.alumni');
Route::get('/alumni/export', [AlumniController::class, 'export'])->name('export.alumni');
Route::resource('alumni', 'AlumniController');
