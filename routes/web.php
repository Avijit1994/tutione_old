<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\JoinUsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::post('ckeditor/image_upload', [CKEditorController::class, 'upload'])->name('upload');

Route::get('{pages}', PageController::class)->name('page')
    ->where('pages', 'about|contact|news|terms-conditions|privacy-policy|refund-policy|join-us|success-stories|book-demo|find-teacher|apply-now');

Route::get('blogs', [PageController::class, 'blogs'])->name('blogs');
Route::get('blog/{blog:slug}', [PageController::class, 'blogDetail'])->name('blog.detail');

Route::get('join-us/teacher', [JoinUsController::class, 'teacher'])->name('join-us.teacher');
Route::get('join-us/staff', [JoinUsController::class, 'staff'])->name('join-us.staff');
Route::get('join-us/success', [JoinUsController::class, 'success'])->name('join-us.success');

Route::get('teacher', [TeacherController::class, 'index'])->name('teacher');
Route::get('teacher/{teacher}', [TeacherController::class, 'teacherDetail'])->name('teacher.details');

Route::post('contact', [ContactUsController::class, 'store'])->name('contact-us');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/student.php';
require __DIR__ . '/teacher.php';
require __DIR__ . '/developer.php';

Route::get('/cropper', function () {
    return view('cropper');
})->name('cropper');

Route::get('{curriculum:slug}', [PageController::class, 'curriculumDetail'])->name('curriculum.detail');
Route::get('{curriculum:slug}/{grade:slug}', [PageController::class, 'gradeDetail'])->name('grade.detail');
Route::get('{curriculum:slug}/{grade:slug}/{subject:slug}', [PageController::class, 'subjectDetail'])->name('subject.detail');

