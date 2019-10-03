<?php

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


Route::any('login', function() {
    if (request()->getMethod() == 'POST') {
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            echo '<p style="color: #ff0000;">Incorrect!</p>';
        } else {
            echo '<p style="color: #00ff30;">Matched :)</p>';
        }
    }

    $form = '<form method="post" action="captcha-test">';
    $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    $form .= '<p>' . captcha_img() . '</p>';
    $form .= '<p><input type="text" name="captcha"></p>';
    $form .= '<p><button type="submit" name="check">Check</button></p>';
    $form .= '</form>';
    return $form;
});


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/kategori_artikel', 'Kategori_ArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create', 'Kategori_ArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel', 'Kategori_ArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}', 'Kategori_ArtikelController@show')->name('kategori_artikel.show');

Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create', 'ArtikelController@create')->name('artikel.create');
Route::post('/artikel', 'ArtikelController@store')->name('artikel.store');
Route::get('/artikel/{id}', 'ArtikelController@show')->name('artikel.show');



Route::get('/kategori_berita', 'Kategori_BeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create', 'Kategori_BeritaController@create')->name('kategori_berita.create');
Route::post('/kategori_berita', 'Kategori_BeritaController@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}', 'Kategori_BeritaController@show')->name('kategori_berita.show');

Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/berita/create', 'BeritaController@create')->name('berita.create');
Route::post('/berita', 'BeritaController@store')->name('berita.store');
Route::get('/berita/{id}', 'BeritaController@show')->name('berita.show');



Route::get('/kategori_galeri', 'Kategori_GaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create', 'Kategori_GaleriController@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri', 'Kategori_GaleriController@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}', 'Kategori_GaleriController@show')->name('kategori_galeri.show');



Route::get('/galeri', 'GaleriController@index')->name('galeri.index');
Route::get('/galeri/create', 'GaleriController@create')->name('galeri.create');
Route::post('/galeri', 'GaleriController@store')->name('galeri.store');
Route::get('/galeri/{id}', 'GaleriController@show')->name('galeri.show');




Route::get('/kategori_pengumuman', 'Kategori_PengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create', 'Kategori_PengumumanController@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman', 'Kategori_PengumumanController@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}', 'Kategori_PengumumanController@show')->name('kategori_pengumuman.show');


Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create', 'PengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman', 'PengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}', 'PengumumanController@show')->name('pengumuman.show');



Route::get('login', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('login', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');