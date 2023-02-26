<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\Admin\TeacherController as AdminTeacherController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\SubcategoryController as AdminSubcategoryController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\Admin\DiscountController as AdminDiscountController;
use App\Http\Controllers\Admin\LessonController as AdminLessonController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\LessonController;
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

Route::get('courses', [CourseController::class , 'index'])->name('courses');

Route::get('course/lessons/{course}', [LessonController::class , 'index'])->name('lessons');



Route::group(['prefix' => 'admin' , 'as' => 'admin.'], function () {

    Route::get('dashboard', [AdminDashboardController::class , 'index'])->name('dashboard');

    Route::resource('students', AdminStudentController::class);

    Route::resource('teachers', AdminTeacherController::class);

    Route::resource('categories', AdminCategoryController::class);

    Route::resource('subcategories', AdminSubcategoryController::class);

    Route::resource('courses', AdminCourseController::class);

    Route::resource('lessons', AdminLessonController::class)->except('create' , 'store');

    Route::get('lesson/create/youtube', [AdminLessonController::class, 'create_youtube'])->name('create_lesson_youtube');

    Route::get('lesson/create/inweb', [AdminLessonController::class, 'create_inweb'])->name('create_inweb');

    Route::post('lessons/youtube', [AdminLessonController::class, 'store_with_video'])->name('lessons_inweb.store');

    Route::post('lessons/inweb', [AdminLessonController::class, 'store_youtube'])->name('lessons_youtube.store');

    Route::put('lessons/{lesson}/web', [AdminLessonController::class, 'update_inweb'])->name('update_inweb');

    Route::resource('discounts', AdminDiscountController::class)->only('index' , 'create' , 'store' , 'destroy');

});

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
