<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

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

// route untuk pindah-pindahnya
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('main');
});



// ini adalah route web ke controller front

// main
Route::get('main', [MainController::class, 'main']);

Route::get('menusatumain', [MainController::class, 'menusatumain']);

Route::get('menuduamain', [MainController::class, 'menuduamain']);

Route::get('login', [MainController::class, 'login']);

// admin
Route::get('admin', [MainController::class, 'admin']);

Route::get('profiladmin', [MainController::class, 'profiladmin']);

Route::get('sayur', [MainController::class, 'sayur']);

Route::get('buah', [MainController::class, 'buah']);

Route::get('bunga', [MainController::class, 'bunga']);

Route::get('formtable', [MainController::class, 'formtable']);

Route::get('tambahsayur', [MainController::class, 'tambahsayur']);

Route::get('tambahbuah', [MainController::class, 'tambahbuah']);

Route::get('tambahbunga', [MainController::class, 'tambahbunga']);

Route::get('selengkapnyasayur/{id}', [MainController::class, 'selengkapnyasayur']);

Route::get('selengkapnyabuah', [MainController::class, 'selengkapnyabuah']);

Route::get('selengkapnyabunga', [MainController::class, 'selengkapnyabunga']);

Route::get('editsayur', [MainController::class, 'editsayur']);

Route::get('editbuah', [MainController::class, 'editbuah']);

Route::get('editbunga', [MainController::class, 'editbunga']);

Route::post('sayuraftertambah', [MainController::class, 'sayuraftertambah'])->name('sayuraftertambah');

Route::get('buahaftertambah', [MainController::class, 'buahaftertambah']);

Route::get('bungaaftertambah', [MainController::class, 'bungaaftertambah']);

Route::get('tampilaneditsayur', [MainController::class, 'tampilaneditsayur']);

Route::get('tampilaneditbuah', [MainController::class, 'tampilaneditbuah']);

Route::get('tampilaneditbunga', [MainController::class, 'tampilaneditbunga']);


//user
Route::get('user', [MainController::class, 'user']);

Route::get('profiluserawal', [MainController::class, 'profiluserawal']);

Route::get('profiluser', [MainController::class, 'profiluser']);

Route::get('editprofiluser', [MainController::class, 'editprofiluser']);

Route::get('ayotanamsayur', [MainController::class, 'ayotanamsayur']);

Route::get('ayotanambuah', [MainController::class, 'ayotanambuah']);

Route::get('ayotanambunga', [MainController::class, 'ayotanambunga']);

Route::get('pilihansayur', [MainController::class, 'pilihansayur']);

Route::get('pilihanbuah', [MainController::class, 'pilihanbuah']);

Route::get('pilihanbunga', [MainController::class, 'pilihanbunga']);

Route::get('tanamsayur', [MainController::class, 'tanamsayur']);

Route::get('tanambuah', [MainController::class, 'tanambuah']);

Route::get('tanambunga', [MainController::class, 'tanambunga']);

Route::get('detailsayur', [MainController::class, 'detailsayur']);

Route::get('detailbuah', [MainController::class, 'detailbuah']);

Route::get('detailbunga', [MainController::class, 'detailbunga']);

Route::get('tanamanku', [MainController::class, 'tanamanku']);

Route::get('wishplant', [MainController::class, 'wishplant']);

Route::get('catatantanaman', [MainController::class, 'catatantanaman']);

Route::get('historytanam', [MainController::class, 'historytanam']);

Route::get('historycatatan', [MainController::class, 'historycatatan']);

Route::get('detailcatatansayur', [MainController::class, 'detailcatatansayur']);

Route::get('detailcatatanbuah', [MainController::class, 'detailcatatanbuah']);

Route::get('detailcatatanbunga', [MainController::class, 'detailcatatanbunga']);

Route::get('isidetailcatatansayur', [MainController::class, 'isidetailcatatansayur']);


// ini adalah route web ke tabel database
Route::resource('/pengguna', PenggunaController::class);

Route::delete('/tanaman/{id}', [MainController::class, 'destroy_sayur'])->name('tanaman.destroy_sayur');

Route::get('/editsayurget/{id}', [MainController::class, 'edit_sayur_get'])->name('tanaman.edit_sayur_get');

Route::put('/editsayur/{id}', [MainController::class, 'editsayur'])->name('tanaman.editsayur');

Route::post('/Register', [PenggunaController::class, 'register'])->name('register.submit');

Route::post('/masuk_proses', [PenggunaController::class, 'masuk_proses'])->name('masuk_proses.submit');
