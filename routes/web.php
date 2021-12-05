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
Route::resource('/acc','App\Http\Controllers\Acc');
Route::resource('/crud','App\Http\Controllers\CrudCont');
Route::resource('/profils','App\Http\Controllers\Profil');
Route::resource('/famille','App\Http\Controllers\AddFamille');
Route::resource('/addInv','App\Http\Controllers\AddInv');
Route::resource('/cnnx','App\Http\Controllers\Connx');
Route::get('/contact', [App\Http\Controllers\Acc::class, 'contact'])->name('contact');
Route::get('/connexion', [App\Http\Controllers\Connx::class, 'connexion'])->name('connexion');
Route::get('/welcome', [App\Http\Controllers\Acc::class, 'index'])->name('index');
Route::get('/add', [App\Http\Controllers\AddInv::class, 'ajout'])->name('ajout');
Route::get('/addFamille', [App\Http\Controllers\AddFamille::class, 'famille'])->name('famille');
Route::get('/alldep', [App\Http\Controllers\CrudCont::class, 'all'])->name('alldep');
Route::get('/allinv', [App\Http\Controllers\AddInv::class, 'all'])->name('all');
Route::get('admin', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin', [App\Http\Controllers\Admin\LoginController::class,'login']);
Route::get('/admin/home', [App\Http\Controllers\AdminController::class,'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
