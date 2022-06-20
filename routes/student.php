<?php


use App\Http\Controllers\Admin\TestQuestionController;
use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\PageController;
use App\Http\Controllers\Student\StudentTestController;
use App\Http\Controllers\Student\StudentTestDetailController;
use App\Http\Controllers\Student\TestController;

Route::name('student.')->group(function () {

    Route::middleware('auth')->group(function () {
        Route::get('profile', [PageController::class, 'profile'])->name('profile');
        Route::post('profile', [PageController::class, 'storeProfile'])->name('profile.store');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('test', [TestController::class, 'index'])->name('test.index');

        Route::get('student-test/{student_test}/exam', [StudentTestController::class, 'exam'])->name('student-test.exam');
        Route::get('student-test/{student_test}/result', [StudentTestController::class, 'result'])->name('student-test.result');
        Route::get('test/{test}/intro', [TestController::class, 'intro'])->name('test.intro');
        Route::resource('student-test', StudentTestController::class);

        Route::resource('student-test-detail', StudentTestDetailController::class);

        Route::resource('test.test-question', TestQuestionController::class);
    });
});
