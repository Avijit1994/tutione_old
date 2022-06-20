<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBannerRequest;
use App\Http\Requests\Admin\UpdateBannerRequest;
use App\Models\Banner;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('Banner', 'List of all Banner');

        $banners = Banner::latest()->paginate();

        $this->data['status'] = array(1 => 'Use', 2 => 'Unused');

        return view('admin.banner.index', compact('banners'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('Banner', 'Add Banner');

        return view('admin.banner.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBannerRequest $request
     * @return RedirectResponse
     */
    public function store(StoreBannerRequest $request)
    {
        $banner = Banner::create($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'banner/'. time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $banner->image = $fileName;
            $banner->save();
        }

        return redirect()->route('admin.banner.index')->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param Banner $banner
     * @return Application|Factory|View
     */
    public function show(Banner $banner)
    {
        $this->setPageTitle('Banner', 'List of all Banner');

        return view('admin.banner.show', compact('banner'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Banner $banner
     * @return Factory|Application|View
     */
    public function edit(Banner $banner)
    {
        $this->setPageTitle('Banner', 'List of all Banner');

        return view('admin.banner.edit', compact('banner'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBannerRequest $request
     * @param Banner $banner
     * @return RedirectResponse
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $request['slug'] = Str::slug($request->get('name'), "-");

        $banner->update($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'banner/'. time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $banner->image = $fileName;
            $banner->save();
        }

        return redirect()->route('admin.banner.index')->with('success', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Banner $banner
     * @return RedirectResponse
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        return redirect()->route('admin.banner.index')->with('success', 'Delete Success');
    }
}
