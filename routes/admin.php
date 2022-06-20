<?php


use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CurriculumController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\StudentDemoController;
use App\Http\Controllers\Admin\StudentNewRegisterController;
use App\Http\Controllers\Admin\StudentTestController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TeacherNewJoinController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TestQuestionController;
use App\Http\Controllers\Admin\UserController;

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

Route::name('admin.')->prefix('admin')->group(function () {

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('profile', [DashboardController::class, 'profile'])->name('profile.index');
        Route::post('profile', [DashboardController::class, 'storeProfile'])->name('profile.store');

        Route::resource('page', PageController::class);
        Route::resource('banner', BannerController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('blog', BlogController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('news', NewsController::class);
        Route::resource('story', StoryController::class);
        Route::resource('contact', ContactController::class);

        Route::resource('curriculum', CurriculumController::class);
        Route::resource('grade', GradeController::class);
        Route::resource('subject', SubjectController::class);

//        Route::get('student/new-register', [StudentController::class, 'newRegister'])->name('stu.new-register');
//        Route::get('student/{student}/edit-new-register', [StudentController::class, 'editNewRegister'])->name('stu.edit-new-register');
//        Route::get('student/{student}/view-new-register', [StudentController::class, 'editNewRegister'])->name('stu.view-new-register');
        Route::resource('student', StudentController::class);
        Route::resource('student-new-register', StudentNewRegisterController::class)->parameters(['student-new-register' => 'student']);

        Route::resource('teacher-new-join', TeacherNewJoinController::class)->parameters(['teacher-new-join' => 'teacher']);
        Route::resource('teacher', TeacherController::class);

        Route::resource('test', TestController::class);

        Route::post('student-test/change-status', [StudentTestController::class, 'changeStatus'])->name('student-test.change-status');
        Route::get('student-test/review', [StudentTestController::class, 'review'])->name('student-test.review');
        Route::resource('student-test', StudentTestController::class);

        Route::resource('test.test-question', TestQuestionController::class);
        Route::resource('student-demo', StudentDemoController::class);
        Route::resource('user', UserController::class);
    });

});
