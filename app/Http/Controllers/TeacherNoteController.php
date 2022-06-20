<?php

namespace App\Http\Controllers;

use App\Models\TeacherNote;
use App\Http\Requests\StoreTeacherNoteRequest;
use App\Http\Requests\UpdateTeacherNoteRequest;

class TeacherNoteController extends Controller
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
     * @param  \App\Http\Requests\StoreTeacherNoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherNoteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherNote  $teacherNote
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherNote $teacherNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherNote  $teacherNote
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherNote $teacherNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherNoteRequest  $request
     * @param  \App\Models\TeacherNote  $teacherNote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherNoteRequest $request, TeacherNote $teacherNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherNote  $teacherNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherNote $teacherNote)
    {
        //
    }
}
