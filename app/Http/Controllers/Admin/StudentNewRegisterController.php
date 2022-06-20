<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudentNewRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('Student', 'List of all students');

        $students = Student::with(['studentDetail', 'studentDetail.grade', 'studentDetail.curriculam'])->where('status', '!=' ,'won')->latest()->paginate();

        return view('admin.student-new-register.index', compact('students'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('Student', 'Add epins');

        $student = Student::pluck('name', 'id');

        return view('admin.student-new-register.create', compact('student'), $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreStudentRequest $request
     * @return RedirectResponse
     */
    public function store(StoreStudentRequest $request)
    {
        $request->validate([
            'package_id' => 'required|exists:App\Models\Package,id',
            'number' => 'required|min:1|max:10'
        ]);

        $request['register_type'] = 'admin';
        $request['status'] = 'won';

        $student = Student::create($request->all());

        return redirect()->route('admin.student-new-register.index')->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param Student $student
     * @return Application|Factory|View
     */
    public function show(Student $student)
    {
        $this->setPageTitle('Student', 'List of all student');

        return view('admin.student-new-register.show', compact('student'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Student $student
     * @return Application|Factory|View
     */
    public function showNewRegister(Student $student)
    {
        $this->setPageTitle('Student', 'List of all student');

        return view('admin.student.new-register-show', compact('student'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Student $student
     * @return Application|Factory|View
     */
    public function edit(Student $student)
    {
        $this->setPageTitle('Student', 'List of all student');

        return view('admin.student-new-register.edit', compact('student'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateStudentRequest $request
     * @param Student $student
     * @return RedirectResponse
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $request['slug'] = Str::slug($request->get('name'), "-");

        $student->update($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = time() . '-' . $file->getClientOriginalName();

            Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $student->image = $fileName;
            $student->save();
        }

        return redirect()->route('admin.new-register.index')->with('success', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Student $student
     * @return RedirectResponse
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('admin.student-new-register.index')->with('success', 'Delete Success');
    }
}
