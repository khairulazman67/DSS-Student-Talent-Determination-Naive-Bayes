<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Studentpage;
use App\Http\Controllers\Data;
use App\Http\Controllers\Admin;
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
        Route::get('/', [Admin::class, 'index'])->name('homepage');
        Route::get('/datastudent', [Admin::class, 'datastudent'])->name('student');
        Route::get('/pengujian', [Admin::class, 'pengujian'])->name('pengujian');
        Route::get('/mahasiswa/{id}', [Admin::class, 'edit'])->name('data');
        Route::get('/save/{id}', [Admin::class, 'update'])->name('edit');
        Route::get('/histori', [Admin::class, 'histori'])->name('historis');
        Route::get('/add', [Admin::class, 'create'])->name('add');
        Route::post('/add/data', [Admin::class, 'store'])->name('post');
    });
});

Route::prefix('user')->group(function(){
    Route::middleware(['auth:sanctum','user'])->group(function(){
        Route::get('/', [Data::class, 'index']);
        Route::get('/hasil', [Data::class, 'hasil'])->name('hasil');
        Route::get('/uji', [Data::class, 'uji'])->name('uji');
        Route::get('/hitung/{id}', [Data::class, 'upload'])->name('hitung');
        Route::get('/uji/mulai/{id}',[Data::class, 'test'])->name('test');
        Route::get('/profile', [Data::class, 'profile'])->name('profile');
        Route::get('/histori', [Data::class, 'histori'])->name('histori');
        Route::post('/edit/{id}', [Data::class, 'update'])->name('edit'); 
    });
    
});


require __DIR__.'/auth.php';
