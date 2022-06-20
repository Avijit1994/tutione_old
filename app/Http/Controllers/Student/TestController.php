<?php

namespace App\Http\Controllers\Student;

use App\Models\Test;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

        return view('student.test.index', $this->data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function intro(Request $request, Test $test)
    {
        $this->setPageTitle('Test', 'List of all tests');

        return view('student.exam.intro', compact('test',), $this->data);
    }
}
