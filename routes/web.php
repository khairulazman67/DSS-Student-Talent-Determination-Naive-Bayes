<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SoalController;
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
        //Data Soal
        Route::get('/datasoal', [SoalController::class,'index'])->name('dataSoal');

        Route::get('/', [AdminController::class, 'index'])->name('homepage');
        Route::get('/Userstudent', [AdminController::class, 'Userstudent'])->name('student');
        Route::get('/pengujian', [AdminController::class, 'pengujian'])->name('pengujian');
        Route::get('/mahasiswa/{id}', [AdminController::class, 'edit'])->name('User');
        Route::get('/save/{id}', [AdminController::class, 'update'])->name('edit');
        Route::get('/histori', [AdminController::class, 'histori'])->name('historis');
        Route::get('/add', [AdminController::class, 'create'])->name('add');
        Route::post('/add/User', [AdminController::class, 'store'])->name('post');
    });
});

Route::prefix('user')->group(function(){
    Route::middleware(['auth:sanctum','user'])->group(function(){
        Route::get('/', [UserController::class, 'index']);
        Route::get('/prosuji', [UserController::class, 'index'])->name('prosuji');
        Route::get('/hasil', [UserController::class, 'hasil'])->name('hasil');
        Route::get('/uji', [UserController::class, 'uji'])->name('uji');
        Route::get('/hitung/{id}', [UserController::class, 'upload'])->name('hitung');
        Route::get('/uji/mulai/{id}',[UserController::class, 'test'])->name('test');
        Route::get('/profile', [UserController::class, 'profile'])->name('profile');
        Route::get('/histori', [UserController::class, 'histori'])->name('histori');
        Route::post('/edit/{id}', [UserController::class, 'update'])->name('edit');
    });

});


require __DIR__.'/auth.php';
