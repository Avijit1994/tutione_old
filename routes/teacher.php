<?php


use App\Http\Controllers\Teacher\DashboardController;
use App\Http\Controllers\Teacher\PageController;
use App\Http\Controllers\Teacher\StudentTestController;
use App\Http\Controllers\Teacher\StudentTestDetailController;
use App\Http\Controllers\Teacher\TestController;

Route::name('teacher.')->prefix('teacher')->group(function () {

    Route::get('{pages}', PageController::class)->name('page')
        ->where('pages', 'profile|');

    Route::middleware('auth:teacher')->group(function () {
        Route::post('profile', [PageController::class, 'storeProfile'])->name('profile.store');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('test', [TestController::class, 'index'])->name('test.index');

        Route::get('student-test/{student_test}/exam', [StudentTestController::class, 'exam'])->name('student-test.exam');
        Route::get('test/{test}/intro', [TestController::class, 'intro'])->name('test.intro');
        Route::resource('student-test', StudentTestController::class);

        Route::resource('student-test-detail', StudentTestDetailController::class);

        Route::resource('test.test-question', TestQuestionController::class);
    });
});
