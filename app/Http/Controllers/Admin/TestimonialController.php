<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTestimonialRequest;
use App\Http\Requests\Admin\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('testimonial', 'List of all testimonials');

        $testimonials = Testimonial::latest()->paginate();

        $this->data['status'] = array(1 => 'Use', 2 => 'Unused');

        return view('admin.testimonial.index', compact('testimonials'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $this->setPageTitle('testimonial', 'Add testimonial');

        return view('admin.testimonial.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTestimonialRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTestimonialRequest $request)
    {
        $testimonial = Testimonial::create($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'testimonial/'. time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $testimonial->image = $fileName;
            $testimonial->save();
        }

        return redirect()->route('admin.testimonial.index')->with('success', 'Create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param Testimonial $testimonial
     * @return Application|Factory|View
     */
    public function show(Testimonial $testimonial)
    {
        $this->setPageTitle('testimonial', 'List of all testimonial');

        return view('admin.testimonial.show', compact('testimonial'), $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Testimonial $testimonial
     * @return Application|Factory|View
     */
    public function edit(Testimonial $testimonial)
    {
        $this->setPageTitle('testimonial', 'List of all testimonial');

        return view('admin.testimonial.edit', compact('testimonial'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTestimonialRequest $request
     * @param Testimonial $testimonial
     * @return RedirectResponse
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $request['slug'] = Str::slug($request->get('name'), "-");

        $testimonial->update($request->all());

        //  Let's do everything here
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $fileName = 'testimonial/'. time() . '-' . $file->getClientOriginalName();

            $path = Storage::disk('s3')->put($fileName, file_get_contents($file), 'public');

            $testimonial->image = $fileName;
            $testimonial->save();
        }

        return redirect()->route('admin.testimonial.index')->with('success', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Testimonial $testimonial
     * @return RedirectResponse
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('admin.testimonial.index')->with('success', 'Delete Success');
    }
}
