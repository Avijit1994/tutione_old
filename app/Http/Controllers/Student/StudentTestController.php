<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentTestRequest;
use App\Http\Requests\UpdateStudentTestRequest;
use App\Models\StudentTest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('student.student-test.index', $this->data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function exam(Request $request, StudentTest $studentTest)
    {
        $this->setPageTitle('Test', 'List of all tests');

        return view('student.exam.exam', compact('studentTest',), $this->data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function result(Request $request, StudentTest $studentTest)
    {
        $this->setPageTitle('Test', 'List of all tests');

        return view('student.exam.result', compact('studentTest',), $this->data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreStudentTestRequest $request
     * @return RedirectResponse
     */
    public function store(StoreStudentTestRequest $request)
    {
        $request['student_id'] = auth()->user()->id;

        $studentTest = StudentTest::updateOrCreate([
            'student_id' => auth()->user()->id,
            'test_id' => $request->test_id,
        ], $request->all());

        return redirect()->route('student.student-test.exam', $studentTest->id)->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param StudentTest $studentTest
     * @return Application|Factory|View
     */
    public function show(StudentTest $studentTest)
    {
        $studentTest->load('studentTestDetails.testQuestion');

        return view('student.exam.result', compact('studentTest'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param StudentTest $studentTest
     * @return Response
     */
    public function edit(StudentTest $studentTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateStudentTestRequest $request
     * @param StudentTest $studentTest
     * @return RedirectResponse
     */
    public function update(UpdateStudentTestRequest $request, StudentTest $studentTest)
    {
        $studentTest->update($request->all());

        return redirect()->route('student.dashboard')->with('success', 'Create Successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param StudentTest $studentTest
     * @return Response
     */
    public function destroy(StudentTest $studentTest)
    {
        //
    }
}
