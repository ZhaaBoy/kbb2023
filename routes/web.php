<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{loginController, registerController, editPasswordController, profileController};
use App\Http\Controllers\Home\contentController;
use App\Http\Controllers\Admin\{acaraController, anggotaController, artikelController, jadwalSharingController, tambahAngkatanController, tambahKategoriController, dashboardController, tutorialController};

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




// Login admin
    //login
    Route::post('/log', [loginController::class, 'log'])->name('log');
    Route::get('/login', [loginController::class, 'login'])->name('login');

    //register
    Route::get('/register', [registerController::class, 'index'])->name('register');
    Route::post('/register', [registerController::class, 'store'])->name('register.store');

     //home
     Route::get('/', [contentController::class, 'home'])->name('home');
     //about
     Route::get('himti-umt/tentang', [contentController::class, 'tentang'])->name('tentang');
     //dosen
     Route::get('himti-umt/dosen', [contentController::class, 'dosen'])->name('dosen');
     Route::get('himti-umt/cari', [contentController::class, 'cari'])->name('cari');
     //sharing
     Route::get('/himti-umt/sharing', [contentController::class, 'sharing'])->name('sharing');
     //tutorial
     Route::get('/himti-umt/tutorial', [contentController::class, 'tutorial'])->name('tutorial');
     //agenda
     Route::get('/himti-umt/agenda', [contentController::class, 'agenda'])->name('agenda');
     //artikel
     Route::get('/himti-umt/artikel', [contentController::class, 'artikel'])->name('artikel');
     //klinik
     Route::get('/himti-umt/klinik', [contentController::class, 'klinik'])->name('klinik');
     //detail agenda
     Route::get('/himti-umt/detail-agenda/{acara}', [contentController::class, 'detailAgenda'])->name('detailAgenda');
     //detail artikel
     Route::get('/himti-umt/detail-artikel/{artikel}', [contentController::class, 'detailArtikel'])->name('detailArtikel');


// Dashboard
Route::group(['middleware' => 'auth', 'PreventBackHistory'], function () {

    //admin dashboard
    Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');
    //logout
    Route::get('/logout', [loginController::class, 'logout'])->name('logout');
    // update profile
    Route::get('/profile', [profileController::class, 'index'])->name('profile.index');
    Route::get('/profile/{profile}/edit', [profileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{profile}', [profileController::class, 'update'])->name('profile.update');
    Route::get('/password/{password}/edit', [editPasswordController::class, 'edit'])->name('password.edit');
    Route::patch('/password/{password}', [editPasswordController::class, 'update'])->name('password.update');

    // Route::group(['middleware' => 'adminsuper'], function () {
        //acara
        Route::resource('/acara', acaraController::class);

        //artikel
        Route::resource('/artikel', artikelController::class);

        //jadwal sharing
        Route::resource('/jadwal-sharing', jadwalSharingController::class);

        //anggota
        Route::resource('/anggota', anggotaController::class);
        Route::get('/cari-anggota', [anggotaController::class, 'cari'])->name('cari-anggota');
        //cetak PDF
        Route::get('/data-anggota-pdf', [anggotaController::class, 'pdf'])->name('anggota.pdf');
        //cetak Excel
        Route::get('/data-anggota-excel', [anggotaController::class, 'excel'])->name('anggota.excel');

        //angkatan
        Route::resource('/angkatan', tambahAngkatanController::class);

        //kategori
        Route::resource('/kategori', tambahKategoriController::class);
        //cetak PDF
        Route::get('/download-pdf', [tambahKategoriController::class, 'pdf'])->name('kategori.pdf');
        //cetak Excel
        Route::get('/download-excel', [tambahKategoriController::class, 'excel'])->name('kategori.excel');


        // Tutorial
        Route::resource('/tutorial', tutorialController::class);



});
