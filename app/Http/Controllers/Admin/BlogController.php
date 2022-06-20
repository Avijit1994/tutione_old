<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogRequest;
use App\Http\Requests\Admin\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('blog', 'List of all blogs');

        $blogs = Blog::with('category')->latest()->paginate();

        return view('admin.blog.index', compact('blogs'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('blog', 'Add blog');

        $this->data['categories'] = Category::where('active_status', '!=', 0)->pluck('name', 'id',);

        return view('admin.blog.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBlogRequest $request
     * @return RedirectResponse
     */
    public function store(StoreBlogRequest $request)
    {
        $blog = Blog::create($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'blog/'. time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $blog->image = $fileName;
            $blog->save();
        }

        return redirect()->route('admin.blog.index')->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     * @return Application|Factory|View
     */
    public function show(Blog $blog)
    {
        $this->setPageTitle('blog', 'List of all blog');

        return view('admin.blog.show', compact('blog'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return Application|Factory|View
     */
    public function edit(Blog $blog)
    {
        $this->setPageTitle('blog', 'List of all blog');

        $this->data['categories'] = Category::where('active_status', '!=', 0)->pluck('name', 'id',);

        return view('admin.blog.edit', compact('blog'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBlogRequest $request
     * @param Blog $blog
     * @return RedirectResponse
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $blog->update($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'blog/'. time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $blog->image = $fileName;
            $blog->save();
        }

        return redirect()->route('admin.blog.index')->with('success', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return RedirectResponse
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Delete Success');
    }
}
