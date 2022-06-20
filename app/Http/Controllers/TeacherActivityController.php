<?php

namespace App\Http\Controllers;

use App\Models\TeacherActivity;
use App\Http\Requests\StoreTeacherActivityRequest;
use App\Http\Requests\UpdateTeacherActivityRequest;

class TeacherActivityController extends Controller
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
     * @param  \App\Http\Requests\StoreTeacherActivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherActivityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherActivity  $teacherActivity
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherActivity $teacherActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherActivity  $teacherActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherActivity $teacherActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherActivityRequest  $request
     * @param  \App\Models\TeacherActivity  $teacherActivity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherActivityRequest $request, TeacherActivity $teacherActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherActivity  $teacherActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherActivity $teacherActivity)
    {
        //
    }
}
