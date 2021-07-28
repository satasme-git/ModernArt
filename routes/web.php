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

Route::get('/', function () {
    return view('welcome');
});

//auth route
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')-> name
    ('dashboard');
});

Route::view('/frame','frame');
Route::view('/product&service','product&service');
Route::view('/frame2','frame2');
Route::view('/print1','print1');
Route::view('/print2','print2');
Route::view('/singlemats','singlemats');
Route::view('/namemats','namemats');
Route::view('/signaturemats','signaturemats');
Route::view('/certmats','certmats');
Route::view('/frameonly1','frameonly1');
Route::view('/multimats','multimats');
Route::view('/acrylicphoto','acrylicphoto');
Route::view('/acrylicpermanent','acrylicpermanent');
Route::view('/acrylicsandwich','acrylicsandwich');
Route::view('/acrylicdesktop','acrylicdesktop');
Route::view('/acrylicblock','acrylicblock');
Route::view('/aluminiumframe','aluminiumframe');
Route::view('/blockmount','blockmount');
Route::view('/frameless','frameless');
Route::view('/mirror','mirror');
Route::view('/sports','sports');
Route::view('/shadowbox','shadowbox');
Route::view('/shadow1','shadow1');
Route::view('/shadow2','shadow2');
Route::view('/shadow3','shadow3');
Route::view('/blockmountslide','blockmountslide');
Route::view('/sandwichslide','sandwichslide');
Route::view('/canvasslide','canvasslide');
Route::view('/about','about');
Route::view('/contact','contact');


require __DIR__.'/auth.php';
