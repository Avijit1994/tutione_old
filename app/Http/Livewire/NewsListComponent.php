<?php

namespace App\Http\Livewire;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class NewsListComponent extends Component
{
    public $selectedNews;

    public $large_image;

    public $isModalOpen = 0;

    public function showModal(News $news)
    {
        $this->large_image = Storage::disk('s3')->url($news->large_image);

    }

    public function render()
    {
        $data['news'] = News::when(request()->type, function ($query) {
            return $query->where('category', request()->type);
        })->latest()->paginate();

        return view('livewire.news-list-component',$data);
    }
}
