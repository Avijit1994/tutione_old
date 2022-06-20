<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreNewsRequest;
use App\Http\Requests\Admin\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('news', 'List of all news');

        $news = news::latest()->paginate();

        $this->data['status'] = array(1 => 'Use', 2 => 'Unused');

        return view('admin.news.index', compact('news'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('news', 'Add news');

        return view('admin.news.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreNewsRequest $request
     * @return RedirectResponse
     */
    public function store(StoreNewsRequest $request)
    {
        $news = News::create($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'news/' . time() . '-' . $file->getClientOriginalName();

            Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $news->image = $fileName;
            $news->save();
        }

        //  Let's do everything here
        if ($request->hasFile('large_image')) {

            $file = $request->file('large_image');

            $fileName = 'news/' . time() . '-' . $file->getClientOriginalName();

            Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $news->large_image = $fileName;
            $news->save();
        }

        return redirect()->route('admin.news.index')->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return Application|Factory|View
     */
    public function show(News $news)
    {
        $this->setPageTitle('news', 'List of all news');

        return view('admin.news.show', compact('news'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return Application|Factory|View
     */
    public function edit(News $news)
    {
        $this->setPageTitle('news', 'List of all news');

        return view('admin.news.edit', compact('news'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateNewsRequest $request
     * @param News $news
     * @return RedirectResponse
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $request['slug'] = Str::slug($request->get('name'), "-");

        $news->update($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'news/' . time() . '-' . $file->getClientOriginalName();

            Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $news->image = $fileName;
            $news->save();
        }

        //  Let's do everything here
        if ($request->hasFile('large_image')) {

            $file = $request->file('large_image');

            $fileName = 'news/' . time() . '-' . $file->getClientOriginalName();

            Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $news->large_image = $fileName;
            $news->save();
        }

        return redirect()->route('admin.news.index')->with('success', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return RedirectResponse
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'Delete Success');
    }
}
