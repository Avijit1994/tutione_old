<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Curriculam;
use App\Models\Grade;
use App\Models\Page;
use App\Models\Story;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Test;
use App\Models\Testimonial;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
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
    public function welcome(Request $request)
    {
        $pageData = Page::whereSlug('welcome')->first();

        SEOMeta::setTitle($pageData->metaTitle);
        SEOMeta::setDescription($pageData->metaDescription);
        SEOMeta::addKeyword($pageData->metaKeyword);
        SEOMeta::setCanonical(url('/'));

        OpenGraph::setDescription($pageData->metaDescription);
        OpenGraph::setTitle($pageData->metaTitle);
        OpenGraph::setUrl(url('/'));

        $data['banners'] = Banner::latest()->paginate();
        $data['curriculums'] = Curriculam::paginate();
        $data['teachers'] = Teacher::whereActiveStatus(1)->paginate();
        $data['testimonials'] = Testimonial::paginate();
        $data['subjects'] = Subject::paginate();

        return view('welcome', $data);
    }

    /**
     * Show the profile for the given user.
     *
     * @param Request $request
     * @param $page
     * @return Application|Factory|View
     */
    public function __invoke(Request $request, $page)
    {
        $pageData = Page::whereSlug($page)->first();

        SEOMeta::setTitle($pageData->metaTitle);
        SEOMeta::setDescription($pageData->metaDescription);
        SEOMeta::addKeyword($pageData->metaKeyword);
        SEOMeta::setCanonical(url('/' . $page));

        OpenGraph::setDescription($pageData->metaDescription);
        OpenGraph::setTitle($pageData->metaTitle);
        OpenGraph::setUrl(url('/' . $page));

        $data = [];

        if ($page == 'success-stories') {
            $data['stories'] = Story::when($request->type, function ($query) use ($request) {
                return $query->where('category', $request->type);
            })->latest()->paginate();
        }

        if ($page == 'apply-now') {
            $data['tests'] = Test::latest()->paginate();
        }

        return view($page, $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function blogs(Request $request)
    {
        $pageData = Page::whereSlug('blogs')->first();

        SEOMeta::setTitle($pageData->metaTitle);
        SEOMeta::setDescription($pageData->metaDescription);
        SEOMeta::addKeyword($pageData->metaKeyword);
        SEOMeta::setCanonical(url('/blogs'));

        OpenGraph::setDescription($pageData->metaDescription);
        OpenGraph::setTitle($pageData->metaTitle);
        OpenGraph::setUrl(url('/welcome'));

        $this->setPageTitle('Teacher', 'List of all teachers');

        $categories = Category::latest()->paginate();
        $blogs = Blog::when($request->category, function ($query) {
            return $query->whereHas('category', function ($query) {
                return $query->where('slug', request()->category);
            });
        })->latest()->paginate();

        return view('blogs', compact('blogs', 'categories'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function blogDetail(Request $request, Blog $blog)
    {
        SEOMeta::setTitle($blog->metaTitle);
        SEOMeta::setDescription($blog->metaDescription);
        SEOMeta::addKeyword($blog->metaKeyword);
        SEOMeta::setCanonical(route('blog.detail', $blog->slug));

        OpenGraph::setDescription($blog->metaDescription);
        OpenGraph::setTitle($blog->metaTitle);
        OpenGraph::setUrl(route('blog.detail', $blog->slug));

        $this->setPageTitle('Teacher', 'List of all teachers');

        $recentBlogs = Blog::latest()->paginate(5);
        $similarBlogs = Blog::whereCategoryId($blog->category_id)->latest()->paginate(5);

        return view('blog-details', compact('blog', 'recentBlogs', 'similarBlogs'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function curriculumDetail(Request $request, Curriculam $curriculum)
    {
        $this->setPageTitle('Teacher', 'List of all teachers');

        $curriculum->load('grades');

        SEOMeta::setTitle($curriculum->metaTitle);
        SEOMeta::setDescription($curriculum->metaDescription);
        SEOMeta::addKeyword($curriculum->metaKeyword);
        SEOMeta::setCanonical(route('curriculum.detail', $curriculum->slug));

        OpenGraph::setDescription($curriculum->metaDescription);
        OpenGraph::setTitle($curriculum->metaTitle);
        OpenGraph::setUrl(route('curriculum.detail', $curriculum->slug));

        return view('curriculum-details', compact('curriculum'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function gradeDetail(Request $request, Curriculam $curriculum, Grade $grade)
    {
        $this->setPageTitle('Teacher', 'List of all teachers');

        $curriculum->load('grades');

        SEOMeta::setTitle($grade->metaTitle);
        SEOMeta::setDescription($grade->metaDescription);
        SEOMeta::addKeyword($grade->metaKeyword);
        SEOMeta::setCanonical(route('grade.detail',[$curriculum->slug, $grade->slug]));

        OpenGraph::setDescription($grade->metaDescription);
        OpenGraph::setTitle($grade->metaTitle);
        OpenGraph::setUrl(route('grade.detail',[$curriculum->slug, $grade->slug]));

        return view('grade-details', compact('curriculum', 'grade'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function subjectDetail(Request $request, Curriculam $curriculum, Grade $grade, Subject $subject)
    {
        $this->setPageTitle('Teacher', 'List of all teachers');

        $curriculum->load('grades');

        SEOMeta::setTitle($subject->metaTitle);
        SEOMeta::setDescription($subject->metaDescription);
        SEOMeta::addKeyword($subject->metaKeyword);
        SEOMeta::setCanonical(route('subject.detail',[$curriculum->slug, $grade->slug, $subject->slug]));

        OpenGraph::setDescription($subject->metaDescription);
        OpenGraph::setTitle($subject->metaTitle);
        OpenGraph::setUrl(route('subject.detail',[$curriculum->slug, $grade->slug, $subject->slug]));

        return view('subject-details', compact('curriculum', 'grade', 'subject'));
    }
}
