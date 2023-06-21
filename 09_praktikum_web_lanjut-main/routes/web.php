<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswas.index');

Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');

Route::get('/mahasiswa/edit/{Nim}', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');

Route::put('/mahasiswa/{Nim}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');

Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswas.store');

Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');

Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswas.show');

Route::get('/mahasiswa/{Nim}/khs',[MahasiswaController::class, 'showKhs'])->name('mahasiswas.showKhs');