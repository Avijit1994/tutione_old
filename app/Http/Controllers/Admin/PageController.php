<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
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
        return view('admin.' . $page);
    }

    /**
     * Show the profile for the given user.
     *
     * @param Request $request
     * @param $page
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $this->setPageTitle('page', 'List of all page');

        $pages = Page::latest()->paginate();

        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the profile for the given user.
     *
     * @param Request $request
     * @param Page $page
     * @return Application|Factory|View
     */
    public function edit(Request $request, Page $page)
    {
        $this->setPageTitle('page', 'List of all page');

        return view('admin.page.edit', compact('page'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Page $page
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Page $page)
    {

        $page->update($request->all());

        return redirect()->route('admin.page.index')->with('success', 'Update Success');
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
}
