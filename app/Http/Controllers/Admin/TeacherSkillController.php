<?php

namespace App\Http\Controllers;

use App\Models\TeacherSkill;
use App\Http\Requests\StoreTeacherSkillRequest;
use App\Http\Requests\UpdateTeacherSkillRequest;

class TeacherSkillController extends Controller
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
     * @param  \App\Http\Requests\StoreTeacherSkillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherSkillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherSkill  $teacherSkill
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherSkill $teacherSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherSkill  $teacherSkill
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherSkill $teacherSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherSkillRequest  $request
     * @param  \App\Models\TeacherSkill  $teacherSkill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherSkillRequest $request, TeacherSkill $teacherSkill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherSkill  $teacherSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherSkill $teacherSkill)
    {
        //
    }
}
