<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param Request $request
     * @param $page
     * @return Application|Factory|View
     */
    public function __invoke(Request $request, $page)
    {
        return view('student.'.$page);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function blogs()
    {
        $this->setPageTitle('Teacher', 'List of all teachers');

        return view('blogs');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function blogDetail()
    {
        $this->setPageTitle('Teacher', 'List of all teachers');

        return view('blogs');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeProfile(Request $request)
    {
        auth()->user()->update($request->all());

        return redirect()->route('student.dashboard')->with('success', 'Updated successfully');
    }
}
