<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTestRequest;
use App\Http\Requests\Admin\UpdateTestRequest;
use App\Models\Test;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('Test', 'List of all tests');

        $tests = Test::with(['curriculam', 'subject', 'grade'])->latest()->paginate();

        $this->data['status'] = array(1 => 'Use', 2 => 'Unused');

        return view('admin.test.index', compact('tests'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('Test', 'Add mock test');

        $test = Test::pluck('name', 'id');

        return view('admin.test.create', compact('test'), $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTestRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTestRequest $request)
    {
        $test = Test::create($request->all());

        //  Let's do everything here
        if ($request->hasFile('file')) {

            $file = $request->file('file');

            $fileName = 'test/' . time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $test->file = $fileName;
            $test->save();
        }

        return redirect()->route('admin.test.test-question.create', $test->id)->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param Test $test
     * @return Application|Factory|View
     */
    public function show(Test $test)
    {
        $this->setPageTitle('Test', 'List of all test');

        return view('admin.test.show', compact('test'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Test $test
     * @return Application|Factory|View
     */
    public function edit(Test $test)
    {
        $this->setPageTitle('Test', 'Edit mock test');

        return view('admin.test.edit', compact('test'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTestRequest $request
     * @param Test $test
     * @return RedirectResponse
     */
    public function update(UpdateTestRequest $request, Test $test)
    {
        $request['slug'] = Str::slug($request->get('name'), "-");

        $test->update($request->all());

        //  Let's do everything here
        if ($request->hasFile('file')) {

            $file = $request->file('file');

            $fileName = 'test/' . time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $test->file = $fileName;
            $test->save();
        }

        return redirect()->route('admin.test.index')->with('success', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Test $test
     * @return RedirectResponse
     */
    public function destroy(Test $test)
    {
        $test->delete();

        return redirect()->route('admin.test.index')->with('success', 'Delete Success');
    }
}
