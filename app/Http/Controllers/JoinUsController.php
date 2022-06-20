<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class JoinUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function teacher()
    {
        $this->setPageTitle('Teacher', 'List of all teachers');

        return view('join-us-teacher');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function staff()
    {
        $this->setPageTitle('Teacher', 'List of all teachers');

        return view('join-us-staff');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function success()
    {
        $this->setPageTitle('Teacher', 'List of all teachers');

        return view('join-us-teacher-success');
    }
}
