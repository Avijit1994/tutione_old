<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|Application|View
     */
    public function index(Request $request)
    {
        $this->setPageTitle('Teacher', 'List of all teachers');

        $teachers = Teacher::with('teacherSkill', 'teacherSkill.curriculam', 'teacherSkill.grade', 'teacherSkill.subject')
            ->when($request->curriculam, function ($query) use ($request) {
                return $query->whereHas('teacherSkill.curriculam', function ($q) use ($request) {
                    return $q->where('slug', $request->curriculam);
                });
            })
            ->when($request->grade, function ($query) use ($request) {
                return $query->whereHas('teacherSkill.grade', function ($q) use ($request) {
                    return $q->where('slug', $request->grade);
                });
            })
            ->when($request->subject, function ($query) use ($request) {
                return $query->whereHas('teacherSkill.subject', function ($q) use ($request) {
                    return $q->where('slug', $request->subject);
                });
            })->whereStatus('won')->get();

        return view('find-teacher', compact('teachers'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Factory|Application|View
     */
    public function teacherDetail(Request $request,Teacher $teacher)
    {
        $this->setPageTitle('Teacher', 'List of all teachers');

        SEOMeta::setTitle($teacher->metaTitle);
        SEOMeta::setDescription($teacher->metaDescription);
        SEOMeta::addKeyword($teacher->metaKeyword);

        OpenGraph::setDescription($teacher->metaDescription);
        OpenGraph::setTitle($teacher->metaTitle);
        OpenGraph::setUrl(route('teacher.details', $teacher->id));

        return view('find-teacher-details', compact('teacher'));
    }
}
