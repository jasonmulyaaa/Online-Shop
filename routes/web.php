<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PreorderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KategoriGeneralController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\BlogUserController;
use App\Http\Controllers\ContactusUserController;
use App\Http\Controllers\ProdukUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AboutusUserController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\MetaManagementController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\ProfileController;


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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('slider', SliderController::class)->middleware('auth');
Route::resource('service', ServiceController::class)->middleware('auth');
Route::resource('preorder', PreorderController::class)->middleware('auth');
Route::resource('produk', ProdukController::class)->middleware('auth');
Route::resource('iklan', IklanController::class)->middleware('auth');
Route::resource('banner', BannerController::class)->middleware('auth');
Route::resource('konfigurasi', KonfigurasiController::class)->middleware(['auth', 'superadmin']);
Route::resource('blog', BlogController::class)->middleware('auth');
Route::resource('kategorigeneral', KategoriGeneralController::class)->middleware(['auth', 'admin']);
Route::resource('contactus', ContactusController::class)->middleware(['auth', 'admin']);
Route::resource('dashboard', DashboardController::class)->middleware('auth');
Route::resource('aboutus', AboutusController::class)->middleware(['auth', 'admin']);
Route::resource('metamanagement', MetaManagementController::class)->middleware(['auth', 'superadmin']);
Route::resource('akun', AkunController::class)->middleware(['auth', 'superadmin']);
Route::resource('profile', ProfileController::class)->middleware('auth');

Route::put('/meta/update/{id}','App\Http\Controllers\MetaManagementController@update')->name('metaupdate');


Route::resource('promo', PromoController::class);
Route::resource('diskon', DiskonController::class);
Route::resource('/', HomepageController::class);
Route::resource('blogs', BlogUserController::class);
Route::resource('contact', ContactusUserController::class);
Route::resource('produks', ProdukUserController::class);
Route::resource('about', AboutusUserController::class);
Route::resource('kategories', KategoriController::class);



Route::delete('/selected-slider', [SliderController::class, 'deleteCheckedSlider'])->name('slider.deleteSelected');
Route::delete('/selected-service', [ServiceController::class, 'deleteCheckedService'])->name('service.deleteSelected');
Route::delete('/selected-preorder', [PreorderController::class, 'deleteCheckedPreorder'])->name('preorder.deleteSelected');
Route::delete('/selected-banner', [BannerController::class, 'deleteCheckedBanner'])->name('banner.deleteSelected');
Route::delete('/selected-kategorigeneral', [KategoriGeneralController::class, 'deleteCheckedKategoriGeneral'])->name('kategorigeneral.deleteSelected');
Route::delete('/selected-produk', [ProdukController::class, 'deleteCheckedProduk'])->name('produk.deleteSelected');
Route::delete('/selected-blog', [BlogController::class, 'deleteCheckedBlog'])->name('blog.deleteSelected');
