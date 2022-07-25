<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Studentpage;
use App\Http\Controllers\Data;

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
    return view('auth.login');
});
Route::get('/register', function(){
    return view('auth.register');
});

Route::prefix('admin')->group(function(){
    Route::middleware(['auth:sanctum','admin'])->group(function(){
        Route::get('/', [PostController::class, 'index']);
        Route::get('/datastudent', [Studentpage::class, 'index']);
        Route::get('/pengujian', [Studentpage::class, 'pengujian'])->name('pengujian');
        Route::get('/mahasiswa{id}', [Studentpage::class, 'edit'])->name('data');
        Route::get('/histori', [Studentpage::class, 'histori'])->name('histori');
        Route::get('/save{id}', [Studentpage::class, 'update'])->name('edit');
        Route::get('/uji', [Studentpage::class, 'upload'])->name('uji');
    });
});

Route::prefix('user')->group(function(){
    Route::middleware(['auth:sanctum','user'])->group(function(){
        Route::get('/', [Data::class, 'index']);  
    });
    Route::get('/test   ', function () {
        return view('user.test');
    });
    Route::get('/profile', [Data::class, 'profile']);
});


require __DIR__.'/auth.php';
