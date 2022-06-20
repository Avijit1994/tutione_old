<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function profile(Request $request)
    {
        return view('student.profile');
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

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'student/'. time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            auth()->user()->update(['image' => $fileName]);
        }

        return redirect()->route('student.dashboard')->with('success', 'Updated successfully');
    }
}
