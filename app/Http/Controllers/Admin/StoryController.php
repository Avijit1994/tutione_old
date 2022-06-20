<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreStoryRequest;
use App\Http\Requests\Admin\UpdateStoryRequest;
use App\Models\Story;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('story', 'List of all story');

        $stories = story::latest()->paginate();

        $this->data['status'] = array(1 => 'Use', 2 => 'Unused');

        return view('admin.story.index', compact('stories'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('story', 'Add story');

        return view('admin.story.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreStoryRequest $request
     * @return RedirectResponse
     */
    public function store(StoreStoryRequest $request)
    {
        $story = story::create($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'story/'. time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $story->image = $fileName;
            $story->save();
        }

        return redirect()->route('admin.story.index')->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param Story $story
     * @return Application|Factory|View
     */
    public function show(Story $story)
    {
        $this->setPageTitle('story', 'List of all story');

        return view('admin.story.show', compact('story'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Story $story
     * @return Application|Factory|View
     */
    public function edit(Story $story)
    {
        $this->setPageTitle('story', 'List of all story');

        return view('admin.story.edit', compact('story'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateStoryRequest $request
     * @param Story $story
     * @return RedirectResponse
     */
    public function update(UpdateStoryRequest $request, Story $story)
    {
        $request['slug'] = Str::slug($request->get('name'), "-");

        $story->update($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'story/'. time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $story->image = $fileName;
            $story->save();
        }

        return redirect()->route('admin.story.index')->with('success', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Story $story
     * @return RedirectResponse
     */
    public function destroy(Story $story)
    {
        $story->delete();

        return redirect()->route('admin.story.index')->with('success', 'Delete Success');
    }
}
