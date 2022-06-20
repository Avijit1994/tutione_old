<?php

namespace App\View\Components;

use App\Models\Curriculam;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function render()
    {
        $curriculums = Curriculam::latest()->get();

        return view('layouts.app',compact('curriculums'));
    }
}
