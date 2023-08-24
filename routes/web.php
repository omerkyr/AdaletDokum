<?php

use Illuminate\Support\Facades\Route;
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

Auth::routes();
Route::get('/admin', [\App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::get('/', [\App\Http\Controllers\FrontController::class, 'anaysafa'])->name('anaysafa');
//Route::get('/haberler', [\App\Http\Controllers\FrontController::class, 'haberler'])-
Route::get('/iletisim', [\App\Http\Controllers\FrontController::class, 'iletisim'])->name('iletisim');
Route::get('/{url?}', [\App\Http\Controllers\FrontController::class, 'url'])->name('url');



// Backend Routes
//Route::get('/login', function () {
//    return redirect('/');
//});
//Route::get('/register', function () {
//    return redirect('/');
//});

Route::get('/register/{lang?}', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::get('/login/{lang?}', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::get('/password/resets/{lang?}', [\App\Http\Controllers\Auth\LoginController::class, 'showLinkRequestForm'])->name('change.langPass');

//Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
//
//Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
//
////Update User Details
//Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
//Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');
//
//Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Route::group(
    [
        'middleware' => [
            'auth',
        ],
    ], function (){
    Route::get('/admin', [\App\Http\Controllers\HomeController::class, 'root'])->name('root');
    Route::get('/index/{locale}', [\App\Http\Controllers\HomeController::class, 'lang'])->name('lang');
    Route::post('/update-profile/{id}', [\App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/update-password/{id}', [\App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');
    Route::get('{any}', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('admin/genel-ayarlar', [\App\Http\Controllers\AyarController::class, 'index'])->name('genelayarlar');
    Route::post('admin/genel-ayarlar/{id}', [\App\Http\Controllers\AyarController::class, 'ayarupdate'])->name('ayarupdate');

    Route::get('admin/haber-liste',[\App\Http\Controllers\FrontController::class, 'haberlistesi'])->name('haberlistesi');
    Route::get('admin/haber-duzenle/{id}',[\App\Http\Controllers\FrontController::class, 'haberduzenle'])->name('haberduzenle');
    Route::post('admin/haber-update/{id}',[\App\Http\Controllers\FrontController::class, 'haberupdate'])->name('haberupdate');
    Route::get('admin/haber-ekle',[\App\Http\Controllers\FrontController::class, 'haberekle'])->name('haberekle');
    Route::post('admin/haberekle',[\App\Http\Controllers\FrontController::class, 'habereklesave'])->name('habereklesave');

    Route::get('admin/slider-liste',[\App\Http\Controllers\AyarController::class, 'sliderliste'])->name('sliderliste');

    Route::get('admin/editor',[\App\Http\Controllers\AyarController::class, 'editor'])->name('editor');

    Route::get('admin/menu-listesi/{id}',[\App\Http\Controllers\AyarController::class, 'menulist'])->name('menulist');

    Route::get('admin/slider-duzenle/{id}',[\App\Http\Controllers\FrontController::class, 'sliderduzenle'])->name('sliderduzenle');
    Route::post('admin/slider-update/{id}',[\App\Http\Controllers\FrontController::class, 'sliderupdate'])->name('sliderupdate');
    Route::get('admin/slider-sil/{id}', [\App\Http\Controllers\AyarController::class, 'slidersil'])->name('slidersil');

    Route::get('admin/slider-ekle',[\App\Http\Controllers\FrontController::class, 'sliderekle'])->name('sliderekle');
    Route::post('slidersave',[\App\Http\Controllers\FrontController::class, 'slidersave'])->name('slidersave');

    Route::get('admin/menu-ekle/{id}',[\App\Http\Controllers\FrontController::class, 'menuekle'])->name('menuekle');
    Route::post('admin/menueklesave',[\App\Http\Controllers\AyarController::class, 'menueklesave'])->name('menueklesave');

    Route::get('admin/menu-duzenle/{id}',[\App\Http\Controllers\FrontController::class, 'menuduzenle'])->name('menuduzenle');
    Route::post('admin/menu-update/{id}',[\App\Http\Controllers\AyarController::class, 'menusupdate'])->name('menusupdate');
    Route::get('admin/menusil/{id}', [\App\Http\Controllers\AyarController::class, 'menusil'])->name('menusil');


    Route::get('admin/sayfa-listesi/{id}',[\App\Http\Controllers\AyarController::class, 'sayfalist'])->name('sayfalist');
    Route::get('admin/sayfa-ekle/{page_type}',[\App\Http\Controllers\AyarController::class, 'sayfaekle'])->name('sayfaekle');;
    Route::post('admin/sayfaekle',[\App\Http\Controllers\AyarController::class, 'sayfaeklesave'])->name('sayfaeklesave');
    Route::get('admin/sayfasil/{id}', [\App\Http\Controllers\AyarController::class, 'sayfasil'])->name('sayfasil');
    Route::get('admin/sayfa-duzenle/{id}',[\App\Http\Controllers\AyarController::class, 'sayfaduzenle'])->name('sayfaduzenle');
    Route::post('admin/sayfa-update/{id}',[\App\Http\Controllers\AyarController::class, 'sayfaupdate'])->name('sayfaupdate');
    Route::get('admin/sayfa-dosya-sil/{id}', [\App\Http\Controllers\AyarController::class, 'sayfadosyasil'])->name('sayfadosyasil');

    Route::get('admin/kategori-liste/{id}',[\App\Http\Controllers\KategoriController::class, 'kategorilist'])->name('kategorilist');
    Route::get('admin/kategori-duzenle/{id}',[\App\Http\Controllers\KategoriController::class, 'kategoriduzenle'])->name('kategoriduzenle');
    Route::post('admin/kategori-update/{id}',[\App\Http\Controllers\KategoriController::class, 'kategoriupdate'])->name('kategoriupdate');
    Route::get('admin/kategori-ekle/{id}',[\App\Http\Controllers\KategoriController::class, 'kategoriekle'])->name('kategoriekle');
    Route::post('admin/kategoriekle',[\App\Http\Controllers\KategoriController::class, 'kategorieklesave'])->name('kategorieklesave');
    Route::get('admin/kategori-sil/{id}', [\App\Http\Controllers\AyarController::class, 'kategorisil'])->name('kategorisil');

    Route::get('image/upload', [ \App\Http\Controllers\DropzonerController::class, 'fileCreate' ])->name('fileCreate');
    Route::post('image/upload/store', [ \App\Http\Controllers\DropzonerController::class, 'fileStore' ])->name('fileStore');
    Route::post('image/delete', [ \App\Http\Controllers\DropzonerController::class, 'fileDestroy' ])->name('fileDestroy');

    Route::get('admin/sayfa-duzenle/destroy/{id}', [\App\Http\Controllers\DropzonerController::class, 'imageSlideDestroy'])->name('imageSlideDestroy');

    Route::post('/upload',[\App\Http\Controllers\AyarController::class, 'uploadimageEditor'])
                ->name('ckeditor.upload');
}
);
