<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\Admin\TeacherController as AdminTeacherController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\SubcategoryController as AdminSubcategoryController;
use Illuminate\Support\Facades\Auth;
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

Route::get('home/front', [FrontendController::class , 'index'])->name('home.front');

Route::get('dashboard', [AdminDashboardController::class , 'index'])->name('dashboard');

Route::get('test', [AdminDashboardController::class , 'test'])->name('test');

Route::resource('students', AdminStudentController::class);

Route::resource('teachers', AdminTeacherController::class);

Route::resource('categories', AdminCategoryController::class);

Route::resource('subcategories', AdminSubcategoryController::class);


// Route::put('students/{student}/{user}', [AdminStudentController::class , 'update'])->name('students.update');

// Route::get('students/{student}/{user}/edit', [AdminStudentController::class , 'edit'])->name('students.edit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
