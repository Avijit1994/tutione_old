<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentDemoRequest;
use App\Http\Requests\UpdateStudentDemoRequest;
use App\Models\StudentDemo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class StudentDemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('Demo Class', 'List of all demo class');

        return view('admin.student-demo.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('Demo Class', 'List of all demo class');

        return view('admin.student-demo.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreStudentDemoRequest $request
     * @return Response
     */
    public function store(StoreStudentDemoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param StudentDemo $studentDemo
     * @return Application|Factory|View
     */
    public function show(StudentDemo $studentDemo)
    {
        $this->setPageTitle('Demo Class', 'List of all demo class');

        return view('admin.student-demo.show', compact('studentDemo'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param StudentDemo $studentDemo
     * @return Application|Factory|View
     */
    public function edit(StudentDemo $studentDemo)
    {
        dd($studentDemo);
        $this->setPageTitle('Demo Class', 'List of all demo class');

        return view('admin.student-demo.edit', compact('studentDemo'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateStudentDemoRequest $request
     * @param StudentDemo $studentDemo
     * @return Response
     */
    public function update(UpdateStudentDemoRequest $request, StudentDemo $studentDemo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param StudentDemo $studentDemo
     * @return Response
     */
    public function destroy(StudentDemo $studentDemo)
    {
        //
    }
}
