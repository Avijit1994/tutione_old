<?php

namespace App\Http\Controllers\Student;

use App\Models\Test;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->setPageTitle('Test', 'List of all tests');

        $tests = Test::latest()->paginate();

        $this->data['status'] = array(1 => 'Use', 2 => 'Unused');

        return view('student.exam.index', compact('tests'), $this->data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exam(Request $request)
    {
        $this->setPageTitle('Test', 'List of all tests');

        $tests = Test::latest()->paginate();

        $this->data['status'] = array(1 => 'Use', 2 => 'Unused');

        return view('student.exam.exam', compact('tests'), $this->data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function report(Request $request)
    {
        $this->setPageTitle('Test', 'List of all tests');

        $tests = Test::latest()->paginate();

        $this->data['status'] = array(1 => 'Use', 2 => 'Unused');

        return view('student.exam.index', compact('tests'), $this->data);
    }
}
