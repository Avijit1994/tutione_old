<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreStudentTestRequest;
use App\Http\Requests\Admin\UpdateStudentTestRequest;
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
        $this->setPageTitle('Student', 'List of all students');

        $studentTests = StudentTest::latest()->paginate();
        $studentTests->load('studentTestDetails.testQuestion', 'test', 'test.curriculam', 'test.grade', 'test.subject', 'student');

        return view('admin.student-test.index', compact('studentTests'), $this->data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function review()
    {
        $this->setPageTitle('Review List', 'List of all Review List');

        $studentTests = StudentTest::whereNotNull('review_type')->latest()->paginate();
        $studentTests->load('studentTestDetails.testQuestion', 'test', 'test.curriculam', 'test.grade', 'test.subject', 'student');

        return view('admin.student-test.review', compact('studentTests'), $this->data);
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
        $request['user_id'] = auth()->user()->id;

        $studentTest = StudentTest::updateOrCreate([
            'user_id' => auth()->user()->id,
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
        $this->setPageTitle('Student', 'Student Test');

        $studentTest->load('studentTestDetails.testQuestion', 'test', 'test.curriculam', 'test.grade', 'test.subject', 'student');

        return view('admin.student-test.show', compact('studentTest'), $this->data);
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

        return redirect()->route('admin.student-test.review')->with('success', 'Update Success');
    }

    /**
     * Responds with a welcome message with instructions
     *
     * @param Request $request
     * @return Response
     */
    public function changeStatus(Request $request)
    {
        $data = StudentTest::find($request->id);
        $data->review = $request->review_status;
        $data->save();

        return response(['success' => 'Status change successfully.']);
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
