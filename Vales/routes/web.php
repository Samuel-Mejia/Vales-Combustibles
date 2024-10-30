<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Rutas que no requieren autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/administrador', function () {
    $users = User::all(); 
    return view('admin/AdminPanel', ['users' => $users, 'currentUser' => Session::get('user')]);
});


// Rutas que requieren autenticación
Route::middleware(['checksession'])->group(function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/admin', function () {
        $users = User::all(); 
        return view('admin/AdminPanel', ['users' => $users, 'currentUser' => Session::get('user')]);
    });

    //Rutas para el admin
    Route::post('/user/store', [UserController::class, 'store'])->name('store.user');
    Route::put('/user/update', [UserController::class, 'update'])->name('update.user');
    Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('delete.user');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});