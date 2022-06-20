<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubjectRequest;
use App\Http\Requests\Admin\UpdateSubjectRequest;
use App\Models\Subject;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('Subject', 'List of all subjects');

        $subjects = Subject::with(['grade.curriculam', 'grade'])->latest()->paginate();

        return view('admin.subject.index', compact('subjects'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('Subject', 'Add Subjects');

        return view('admin.subject.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSubjectRequest $request
     * @return RedirectResponse
     */
    public function store(StoreSubjectRequest $request)
    {
        $subject = Subject::create($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'subject/' . time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $subject->update(['image' => $fileName]);
        }

        return redirect()->route('admin.subject.index')->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param Subject $subject
     * @return Application|Factory|View
     */
    public function show(Subject $subject)
    {
        $this->setPageTitle('Subject', 'List of all subject');

        return view('admin.subject.show', compact('subject'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Subject $subject
     * @return Application|Factory|View
     */
    public function edit(Subject $subject)
    {
        $this->setPageTitle('subject', 'List of all subject');

        return view('admin.subject.edit', compact('subject'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSubjectRequest $request
     * @param Subject $subject
     * @return RedirectResponse
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $request['slug'] = Str::slug($request->get('name'), "-");

        $subject->update($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'subject/' . time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $subject->update(['image' => $fileName]);
        }

        return redirect()->route('admin.subject.index')->with('success', 'Update Success');
    }

    /**
     * Responds with a welcome message with instructions
     *
     * @param Request $request
     * @return Response
     */
    public function changeStatus(Request $request)
    {
        $data = Subject::find($request->id);
        $data->active_status = $request->status;
        $data->save();

        return response(['success' => 'Status change successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Subject $subject
     * @return RedirectResponse
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('admin.subject.index')->with('success', 'Delete Success');
    }
}
