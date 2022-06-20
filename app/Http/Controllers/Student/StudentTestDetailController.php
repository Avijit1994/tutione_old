<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\StudentTestDetail;
use App\Http\Requests\StoreStudentTestDetailRequest;
use App\Http\Requests\UpdateStudentTestDetailRequest;

class StudentTestDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentTestDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentTestDetailRequest $request)
    {
        $studentTest = StudentTestDetail::updateOrCreate([
            'test_question_id' => $request->test_question_id,
            'student_test_id' => $request->student_test_id,
        ], $request->all());

        return redirect()->back()->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentTestDetail  $studentTestDetail
     * @return \Illuminate\Http\Response
     */
    public function show(StudentTestDetail $studentTestDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentTestDetail  $studentTestDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentTestDetail $studentTestDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentTestDetailRequest  $request
     * @param  \App\Models\StudentTestDetail  $studentTestDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentTestDetailRequest $request, StudentTestDetail $studentTestDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentTestDetail  $studentTestDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentTestDetail $studentTestDetail)
    {
        //
    }
}
