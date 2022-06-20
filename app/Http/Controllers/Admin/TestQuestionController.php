<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\TestQuestion;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTestQuestionRequest;
use App\Http\Requests\Admin\UpdateTestQuestionRequest;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Test $test)
    {
        $this->setPageTitle('TestQuestion', 'List of all Test Qusetions');

        $testQuestions = TestQuestion::whereTestId($test->id)->latest()->paginate();

        $this->data['status'] = array(1 => 'Use', 2 => 'Unused');

        return view('admin.test-question.index', compact('testQuestions','test'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function create(Test $test)
    {
        $this->setPageTitle('Test Qusetion', 'Add Test Qusetions');

        $TestQuestion = TestQuestion::pluck('name', 'id');

        return view('admin.test-question.create', compact('TestQuestion'), $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestQuestionRequest $request)
    {
        $request['test_id'] = $request->test;
        $testQuestion = TestQuestion::create($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = time() . '-' . $file->getClientOriginalName();

            Storage::disk('public')->put($fileName, file_get_contents($file), 'public');

            $testQuestion->image = $fileName;
            $testQuestion->save();
        }

        return redirect()->route('admin.test.test-question.create', $request->test)->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestQuestion  $testQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(TestQuestion $testQuestion)
    {
        $this->setPageTitle('Test Qusetion', 'List of all Test Qusetions');

        return view('admin.test-question.show', compact('testQuestion'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @param  \App\Models\TestQuestion  $testQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test, TestQuestion $testQuestion)
    {
        $this->setPageTitle('Test Qusetion', 'List of all Test Qusetions');

        return view('admin.test-question.edit', compact('test', 'testQuestion'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestQuestionRequest  $request
     * @param  \App\Models\Test  $test
     * @param  \App\Models\TestQuestion  $testQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestQuestionRequest $request, Test $test, TestQuestion $testQuestion)
    {
        $request['slug'] = Str::slug($request->get('name'), "-");

        $testQuestion->update($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = time() . '-' . $file->getClientOriginalName();

            Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $testQuestion->image = $fileName;
            $testQuestion->save();
        }

        return redirect()->route('admin.test.test-question.index', $test)->with('success', 'Update Success');
    }

    /**
     * Responds with a welcome message with instructions
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
        $data = TestQuestion::find($request->id);
        $data->active_status = $request->status;
        $data->save();

        return response(['success' => 'Status change successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @param  \App\Models\TestQuestion  $TestQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test, TestQuestion $testQuestion)
    {
        $testQuestion->delete();

        return redirect()->route('admin.test.test-question.index', $test)->with('success', 'Delete Success');
    }
}
