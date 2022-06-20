<?php

namespace App\Http\Controllers;

use App\Models\TeacherEducation;
use App\Http\Requests\StoreTeacherEducationRequest;
use App\Http\Requests\UpdateTeacherEducationRequest;

class TeacherEducationController extends Controller
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
     * @param  \App\Http\Requests\StoreTeacherEducationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherEducationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherEducation  $teacherEducation
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherEducation $teacherEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherEducation  $teacherEducation
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherEducation $teacherEducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherEducationRequest  $request
     * @param  \App\Models\TeacherEducation  $teacherEducation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherEducationRequest $request, TeacherEducation $teacherEducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherEducation  $teacherEducation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherEducation $teacherEducation)
    {
        //
    }
}
