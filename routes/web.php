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
use App\Http\Controllers\Admin\SliderController as AdminSliderController;
use App\Http\Controllers\Admin\SettingController as AdminSettingController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\LessonController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
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

Route::get('home/front', [FrontendController::class, 'index'])->name('home.front');

Route::get('courses', [CourseController::class, 'index'])->name('courses');

Route::get('teachers', [FrontendController::class, 'show_teachers'])->name('teachers');

Route::get('about', [FrontendController::class, 'about'])->name('about');

Route::get('contact', [ContactController::class, 'contact'])->name('contact');

Route::post('send_email', [ContactController::class, 'send_email'])->name('contact.send_email');

Route::get('course/lessons/{course}', [LessonController::class, 'index'])->name('lessons');

Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('result_search', [FrontendController::class, 'result_search'])->name('result_search');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::resource('students', AdminStudentController::class);

    Route::resource('teachers', AdminTeacherController::class);

    Route::resource('categories', AdminCategoryController::class);

    Route::resource('subcategories', AdminSubcategoryController::class);

    Route::resource('courses', AdminCourseController::class);

    Route::resource('lessons', AdminLessonController::class)->except('create', 'store');

    Route::get('lesson/create/youtube', [AdminLessonController::class, 'create_youtube'])->name('create_lesson_youtube');

    Route::get('lesson/create/inweb', [AdminLessonController::class, 'create_inweb'])->name('create_inweb');

    Route::post('lessons/youtube', [AdminLessonController::class, 'store_with_video'])->name('lessons_inweb.store');

    Route::post('lessons/inweb', [AdminLessonController::class, 'store_youtube'])->name('lessons_youtube.store');

    Route::put('lessons/{lesson}/web', [AdminLessonController::class, 'update_inweb'])->name('update_inweb');

    Route::resource('discounts', AdminDiscountController::class)->only('index', 'create', 'store', 'destroy');

    Route::resource('sliders', AdminSliderController::class);

    Route::resource('messages', AdminMessageController::class)->only('index', 'show', 'destroy');

    Route::get('messages/form/{message}', [AdminMessageController::class, 'form_message_replay'])->name('form.message.replay');

    Route::post('messages/replay/{message}', [AdminMessageController::class, 'message_replay'])->name('message.replay');

    Route::get('replay', [AdminMessageController::class, 'messages_admin'])->name('message_admin.replay');

    // Route::get('messages/ff', [AdminMessageController::class, 'messages_admin'])->name('message_admin.replay');

    Route::resource('settings', AdminSettingController::class)->only('index', 'update', 'edit');

    Route::resource('galleries', AdminGalleryController::class)->only('index' , 'edit' , 'update' , 'destroy');
    
    Route::get('form/uploade/images', [AdminGalleryController::class, 'create'])->name('form.upload.images');

    Route::post('uploade/images', [AdminGalleryController::class, 'store'])->name('upload.images');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
