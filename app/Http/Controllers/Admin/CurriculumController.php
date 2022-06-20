<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCurriculumRequest;
use App\Http\Requests\Admin\UpdateCurriculumRequest;
use App\Models\Curriculum;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('Curriculum', 'List of all curriculums');

        return view('admin.curriculum.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('curriculum', 'Add curriculum');

        return view('admin.curriculum.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCurriculumRequest $request
     * @return RedirectResponse
     */
    public function store(StoreCurriculumRequest $request)
    {
        $curriculum = curriculum::create($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'curriculum/' . time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $curriculum->image = $fileName;
            $curriculum->save();
        }

        //  Let's do everything here
        if ($request->hasFile('banner_image')) {

            $file = $request->file('banner_image');

            $fileName = 'curriculum/banner_image' . time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $curriculum->banner_image = $fileName;
            $curriculum->save();
        }

        return redirect()->route('admin.curriculum.index')->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param curriculum $curriculum
     * @return Application|Factory|View
     */
    public function show(curriculum $curriculum)
    {
        $this->setPageTitle('curriculum', 'List of all curriculum');

        return view('admin.curriculum.show', compact('curriculum'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param curriculum $curriculum
     * @return Application|Factory|View
     */
    public function edit(curriculum $curriculum)
    {
        $this->setPageTitle('curriculum', 'List of all curriculum');

        return view('admin.curriculum.edit', compact('curriculum'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCurriculumRequest $request
     * @param Curriculum $curriculum
     * @return RedirectResponse
     */
    public function update(UpdateCurriculumRequest $request, Curriculum $curriculum)
    {
        $request['slug'] = Str::slug($request->get('name'), "-");

        $curriculum->update($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'curriculum/' . time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $curriculum->image = $fileName;
            $curriculum->save();
        }

        //  Let's do everything here
        if ($request->hasFile('banner_image')) {

            $file = $request->file('banner_image');

            $fileName = 'curriculum/banner_image' . time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $curriculum->banner_image = $fileName;
            $curriculum->save();
        }

        return redirect()->route('admin.curriculum.index')->with('success', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Curriculum $curriculum
     * @return RedirectResponse
     */
    public function destroy(Curriculum $curriculum)
    {
        $curriculum->delete();

        return redirect()->route('admin.curriculum.index')->with('success', 'Delete Success');
    }
}
