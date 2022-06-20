<?php

namespace App\Http\Controllers;

use App\Models\TeacherTask;
use App\Http\Requests\StoreTeacherTaskRequest;
use App\Http\Requests\UpdateTeacherTaskRequest;

class TeacherTaskController extends Controller
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
     * @param  \App\Http\Requests\StoreTeacherTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherTaskRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherTask  $teacherTask
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherTask $teacherTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherTask  $teacherTask
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherTask $teacherTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherTaskRequest  $request
     * @param  \App\Models\TeacherTask  $teacherTask
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherTaskRequest $request, TeacherTask $teacherTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherTask  $teacherTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherTask $teacherTask)
    {
        //
    }
}
