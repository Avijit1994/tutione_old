<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var array
     */
    protected $data = array();


    /**
     * @param $title
     * @param $subTitle
     */
    protected function setPageTitle($title, $subTitle)
    {
        view()->share(['pageTitle' => $title, 'subTitle' => $subTitle]);
    }


    /**
     * @param $title
     * @param $subTitle
     */
    protected function setBreadcrumb($text, $link)
    {
        $collection = collect([['text' => 'Dashboard', 'link' => 'home']]);

        $breadcrumbs = $collection->push(["text" => $text, "link" => $link]);

        view()->share(['breadcrumbs' => $breadcrumbs]);
    }
}
