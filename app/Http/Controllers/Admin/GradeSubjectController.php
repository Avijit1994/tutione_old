<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGradeSubjectRequest;
use App\Http\Requests\UpdateGradeSubjectRequest;
use App\Models\GradeSubject;

class GradeSubjectController extends Controller
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
     * @param  \App\Http\Requests\StoreGradeSubjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGradeSubjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GradeSubject  $gradeSubject
     * @return \Illuminate\Http\Response
     */
    public function show(GradeSubject $gradeSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GradeSubject  $gradeSubject
     * @return \Illuminate\Http\Response
     */
    public function edit(GradeSubject $gradeSubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGradeSubjectRequest  $request
     * @param  \App\Models\GradeSubject  $gradeSubject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGradeSubjectRequest $request, GradeSubject $gradeSubject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GradeSubject  $gradeSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(GradeSubject $gradeSubject)
    {
        //
    }
}
