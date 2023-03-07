<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\JenisKerusakanController;
use App\Http\Controllers\KerusakanController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\MemberController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', [homeController::class, 'index']);
Route::group(['middleware' => 'auth'],function(){
    Route::get('/home', [homeController::class, 'home']);
});



// login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/auth', [LoginController::class, 'logins']);
Route::get('/logout', [LoginController::class, 'logout']);

// admin
Route::get('/admin/add', [adminController::class, 'tambah']);
Route::post('/admin/add', [adminController::class, 'add']);

// member
Route::get('/member', [MemberController::class, 'oi']);
Route::get('/member/add', [MemberController::class, 'tambah']);
Route::post('/member/add', [MemberController::class, 'add']);
Route::get('/member/update/{id}', [MemberController::class, 'edit']);
Route::post('/member/update/{id}', [MemberController::class, 'update']);
Route::get('/member/delete/{id}', [MemberController::class, 'delete']);


// mekanik
Route::get('/mekanik', [MekanikController::class, 'ambil'])->middleware('isadmin');
Route::get('/mekanik/add', [MekanikController::class, 'tambah']);
Route::post('/mekanik/add', [MekanikController::class, 'add']);
Route::get('/mekanik/update/{id}', [MekanikController::class, 'edit'])->middleware('isadmin');
Route::post('/mekanik/update/{id}', [MekanikController::class, 'update'])->middleware('isadmin');
Route::get('/mekanik/delete/{id}', [MekanikController::class, 'delete'])->middleware('isadmin');

//kerusakan
Route::get('/kerusakan', [KerusakanController::class, 'candak']);
Route::get('/kerusakan/add', [KerusakanController::class, 'oi']);
Route::post('kerusakan/add', [KerusakanController::class, 'add']);
Route::get('/kerusakan/update/{id}', [kerusakanController::class, 'edit'])->middleware('isadmin');
Route::post('/kerusakan/update/{id}', [kerusakanController::class, 'update'])->middleware('isadmin');
Route::get('/kerusakan/delete/{id}', [kerusakanController::class, 'delete'])->middleware('isadmin');

// jenis kerusakan
Route::controller(JenisKerusakanController::class)->group(function(){
    Route::get('/jeniskerusakan', 'index');
    Route::get('/jeniskerusakan/add', 'tambah');
    Route::post('/jeniskerusakan/add', 'add');
 });
