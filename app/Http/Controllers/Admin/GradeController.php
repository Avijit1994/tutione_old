<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreGradeRequest;
use App\Http\Requests\Admin\UpdateGradeRequest;
use App\Models\Curriculam;
use App\Models\Grade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('Grade', 'List of all grades');

        return view('admin.grade.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('Grade', 'Add grade');

        $curriculams = Curriculam::pluck('name', 'id');

        return view('admin.grade.create', compact('curriculams'), $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreGradeRequest $request
     * @return RedirectResponse
     */
    public function store(StoreGradeRequest $request)
    {
        $grade = Grade::create($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'grade/' . time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $grade->update(['image' => $fileName]);

        }

        return redirect()->route('admin.grade.index')->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param Grade $grade
     * @return Application|Factory|View
     */
    public function show(Grade $grade)
    {
        $this->setPageTitle('Grade', 'List of all grade');

        return view('admin.grade.show', compact('grade'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Grade $grade
     * @return Application|Factory|View
     */
    public function edit(Grade $grade)
    {
        $this->setPageTitle('Grade', 'List of all grade');

        return view('admin.grade.edit', compact('grade'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateGradeRequest $request
     * @param Grade $grade
     * @return RedirectResponse
     */
    public function update(UpdateGradeRequest $request, Grade $grade)
    {
        $request['slug'] = Str::slug($request->get('name'), "-");

        $grade->update($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'grade/' . time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $grade->update(['image' => $fileName]);
        }

        return redirect()->route('admin.grade.index')->with('success', 'Update Success');
    }

    /**
     * Responds with a welcome message with instructions
     *
     * @param Request $request
     * @return Response
     */
    public function changeStatus(Request $request)
    {
        $data = Grade::find($request->id);
        $data->active_status = $request->status;
        $data->save();

        return response(['success' => 'Status change successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Grade $grade
     * @return RedirectResponse
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect()->route('admin.grade.index')->with('success', 'Delete Success');
    }
}
