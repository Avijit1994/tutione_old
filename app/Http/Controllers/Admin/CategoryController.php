<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('Category', 'List of all Category');

        $categories = Category::latest()->paginate();

        $this->data['status'] = array(1 => 'Use', 2 => 'Unused');

        return view('admin.category.index', compact('categories'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('category', 'Add category');

        return view('admin.category.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCategoryRequest $request
     * @return RedirectResponse
     */
    public function store(StoreCategoryRequest $request)
    {
        $request['parent_id'] = $request->parent_id ?? 0;
        $request['slug'] = Str::slug($request->get('name'), "-");

        $category = Category::create($request->all());

        //  Let's do everything here

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'category/'. time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $category->image = $fileName;
            $category->save();
        }

        return redirect()->route('admin.category.index')->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Application|Factory|View
     */
    public function show(Category $category)
    {
        $this->setPageTitle('Category', 'view category');

        return view('admin.category.show', compact('category'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Application|Factory|View
     */
    public function edit(Category $category)
    {
        $this->setPageTitle('Category', 'edit category');

        $this->data['status_options'] = ['Inactive', 'Active'];

        return view('admin.category.edit', compact('category'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryRequest $request
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $request['parent_id'] = $request->parent_id ?? 0;

        $request['slug'] = Str::slug($request->get('name'), "-");

        $category->update($request->except('image'));

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'category/'. time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $category->update(['image' => $fileName]);
        }

        return redirect()->route('admin.category.index')->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.category.index')->with('success', 'Deleted successfully');
    }
}
