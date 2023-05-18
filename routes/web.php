<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AttendanceController;

Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create');
Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store');
Route::get('/attendance/{attendance}', [AttendanceController::class, 'show'])->name('attendance.show');
Route::get('/attendance/{attendance}/edit', [AttendanceController::class, 'edit'])->name('attendance.edit');
Route::put('/attendance/{attendance}', [AttendanceController::class, 'update'])->name('attendance.update');
Route::delete('/attendance/{attendance}', [AttendanceController::class, 'destroy'])->name('attendance.destroy');

Route::get('/', function(){
    return view('guest');
});
Route::get('/mahasiswa', function(){
    return view('mahasiswa');
});
Route::get('/dosen', function(){
    return view('dosen');
});
Route::get('/admin', function(){
    return view('admin');
});
Route::get('/bar', function(){
    return view('bar');
});
Route::get('/main', function(){
    return view('main');
});
// // Display login form
// Route::get('/login', 'AuthController@loginForm');

// // Handle login request
// Route::post('/login', 'AuthController@login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
