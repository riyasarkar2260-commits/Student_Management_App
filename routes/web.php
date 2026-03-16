<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

/* Redirect root to login */
Route::get('/', function () {
    return redirect()->route('login');
});

/* Dashboard (only logged-in users) */
Route::get('/dashboard', [DashboardController::class,'index'])
    ->middleware(['auth'])
    ->name('dashboard');

/* Protected routes */
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('students', StudentController::class);
    Route::resource('courses', CourseController::class);

});

require __DIR__.'/auth.php';