<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCurriculumGradeRequest;
use App\Http\Requests\UpdateCurriculumGradeRequest;
use App\Models\CurriculumGrade;

class CurriculumGradeController extends Controller
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
     * @param  \App\Http\Requests\StoreCurriculumGradeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurriculumGradeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CurriculumGrade  $curriculumGrade
     * @return \Illuminate\Http\Response
     */
    public function show(CurriculumGrade $curriculumGrade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CurriculumGrade  $curriculumGrade
     * @return \Illuminate\Http\Response
     */
    public function edit(CurriculumGrade $curriculumGrade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCurriculumGradeRequest  $request
     * @param  \App\Models\CurriculumGrade  $curriculumGrade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCurriculumGradeRequest $request, CurriculumGrade $curriculumGrade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CurriculumGrade  $curriculumGrade
     * @return \Illuminate\Http\Response
     */
    public function destroy(CurriculumGrade $curriculumGrade)
    {
        //
    }
}
