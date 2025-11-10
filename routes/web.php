<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalamController;
use App\Http\Controllers\KritikController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfilpendiriController;
use App\Http\Controllers\ProfilpengasuhController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AppController::class, 'index']);


Route::get('/berita', [AppController::class, 'berita']);

Route::get('/detail/{slug}', [AppController::class, 'detail']);

Route::get('/foto', [AppController::class, 'foto']);

// Route::get('/foto', function () {
//     return view('foto.foto');
// });

// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware('auth');

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');


Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');


Route::get('/video', [VideoController::class, 'index'])->name('video')->middleware('auth');
Route::post('/video/store', [VideoController::class, 'store'])->name('video.store')->middleware('auth');
Route::post('/video/update/{id}', [VideoController::class, 'update'])->name('video.update')->middleware('auth');
Route::post('/video/destroy/{id}', [VideoController::class, 'destroy'])->name('video.destroy')->middleware('auth');


Route::get('/profil/pendiri', function () {
    return view('profil.pendiri');
});

Route::get('/profil/pengasuh', function () {
    return view('profil.pengasuh');
});

Route::get('/profil/asatid', function () {
    return view('profil.asatid');
});

Route::get('/profil/detailasatid', function () {
    return view('profil.detailasatid');
});

Route::get('/profil/detailpendiri', function () {
    return view('profil.detailpendiri');
});

Route::get('/profil/detailpengasuh', function () {
    return view('profil.detailpengasuh');
});

Route::get('/profil/asatid/{id}', [ProfilController::class, 'show'])->name('profil.show');
Route::get('/profil/pengasuh/{id}', [ProfilpengasuhController::class, 'show'])->name('profilpengasuh.show');
Route::get('/profil/pendiri/{id}', [ProfilpendiriController::class, 'show'])->name('profilpendiri.show');

Route::get('/kurikulum-pesantren', [App\Http\Controllers\KurikulumController::class, 'index'])->name('kurikulum.index');

Route::get('/jurnal-kegiatan', [App\Http\Controllers\JurnalController::class, 'index'])->name('jurnal.index');
Route::get('/jurnal-mts', [App\Http\Controllers\MtsController::class, 'index'])->name('jurnal.mts');
Route::get('/pesertadidik', [App\Http\Controllers\PesertaDidikController::class, 'index'])->name('pesertadidik.index');
Route::get('/sejarah', [App\Http\Controllers\SejarahController::class, 'index'])->name('sejarah.index');

Route::post('/kritik-saran', [KritikController::class, 'store'])->name('kritik.store');

Route::get('/admin/kritik', [KritikController::class, 'index'])->name('admin.kritik.index');
Route::delete('/admin/kritik/{id}', [KritikController::class, 'destroy'])->name('admin.kritik.destroy');

// Halaman user (frontend)
Route::get('/kalam', [\App\Http\Controllers\FrontendKalamController::class, 'index'])->name('kalam');
Route::get('/kalam/{id}', [\App\Http\Controllers\FrontendKalamController::class, 'show'])->name('kalam.show');

// Halaman admin (backend)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('kalam', \App\Http\Controllers\KalamController::class);
});


