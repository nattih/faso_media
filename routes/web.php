<?php

use Illuminate\Support\Facades\Route;

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
//<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCMikolpW0ogSResRrbiZXWyHCIEXR5Osc&exp&sensor=false&libraries=places">sensor=false"></script><br>
 
Route::get('/1', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('layout.test');
});

Route::get('carte', function () {
    return view('layout.carte');
});

Route::get('politique', function () {
    return view('pages.politique');
});

Route::get('economie', function () {
    return view('pages.economie');
});

Route::get('societe', function () {
    return view('pages.societe');
});

Route::get('cooperation', function () {
    return view('pages.cooperation');
});
Route::get('culture', function () {
    return view('pages.culture');
});

Route::get('contact', function () {
    return view('pages.contacte');
});

Route::get('international', function () {
    return view('pages.international');
});


// actualites
Route::get('/Actualite/new', 'ActualiteController@index')->name('actu.nouveau');
Route::post('/Actualite', 'ActualiteController@store')->name('actu.store');
Route::post('/Categorie', 'CategorieController@store')->name('categorie');
Route::post('/Region', 'RegionController@store')->name('region');
Route::post('/auteur', 'AuteurController@store')->name('auteur');
