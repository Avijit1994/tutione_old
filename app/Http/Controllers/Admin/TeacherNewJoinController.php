<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTeacherRequest;
use App\Http\Requests\Admin\UpdateTeacherRequest;
use App\Models\Teacher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeacherNewJoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('Teacher', 'List of new teachers');

        return view('admin.teacher-new-join.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('Teacher', 'Add Teacher');

        return view('admin.teacher-new-join.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTeacherRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTeacherRequest $request)
    {
        $request->validate([
            'package_id' => 'required|exists:App\Models\Package,id',
            'number' => 'required|min:1|max:10'
        ]);

        $Teacher = Teacher::create($request->all());

        return redirect()->route('admin.teacher-new-join.index')->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param Teacher $teacher
     * @return Application|Factory|View
     */
    public function show(Teacher $teacher)
    {
        $this->setPageTitle('Teacher', 'Teacher Details');

        return view('admin.teacher-new-join.show', compact('teacher'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Teacher $teacher
     * @return Application|Factory|View
     */
    public function edit(Teacher $teacher)
    {
        $this->setPageTitle('Teacher', 'List of all Teacher');

        return view('admin.teacher-new-join.edit', compact('teacher'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTeacherRequest $request
     * @param Teacher $Teacher
     * @return RedirectResponse
     */
    public function update(UpdateTeacherRequest $request, Teacher $Teacher)
    {
        $request['slug'] = Str::slug($request->get('name'), "-");

        $Teacher->update($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = time() . '-' . $file->getClientOriginalName();

            Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $Teacher->image = $fileName;
            $Teacher->save();
        }

        return redirect()->route('admin.teacher-new-join.index')->with('success', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Teacher $teacher
     * @return RedirectResponse
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('admin.teacher-new-join.index')->with('success', 'Delete Success');
    }
}
