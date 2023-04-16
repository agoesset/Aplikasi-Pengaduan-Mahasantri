<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MahasantriController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TanggapanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('admin.dashboard');
});

Route::resource('pengaduan', PengaduanController::class);
Route::get('dashboard', [PengaduanController::class, 'dashboard'])->name('dashboard');

Route::resource('mahasantri', MahasantriController::class);
Route::resource('petugas', PetugasController::class);
Route::resource('tanggapan', TanggapanController::class);
 