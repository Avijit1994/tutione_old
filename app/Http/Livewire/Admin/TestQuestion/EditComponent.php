<?php

namespace App\Http\Livewire\Admin\TestQuestion;

use App\Models\TestQuestion;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditComponent extends Component
{
    use WithFileUploads;

    public $test;

    public $testQuestion;

    public $name;

    public $option = [
        'option_1' => '',
        'option_2' => '',
        'option_3' => '',
        'option_4' => '',
    ];

    public $option_image = [
        'option_1' => '',
        'option_2' => '',
        'option_3' => '',
        'option_4' => '',
    ];

    public $answer;

    public $option_type;

    public $question_type;

    public $question_types = [];


    public function mount($test, $testQuestion)
    {
        $this->test = $test;
        $this->testQuestion = $testQuestion;

        $this->name = $testQuestion->name;

        $this->option_type = $testQuestion->option_type;
        $this->question_type = $testQuestion->question_type;

        if ($testQuestion->option_type == 'image') {
            $this->option_image = $testQuestion->option;
        }

        if ($testQuestion->option_type == 'text') {
            $this->option = $testQuestion->option;
        }

        $this->answer = $testQuestion->answer;

        if ($test->question_type == 'mcq') {
            $this->question_types = ['mcq' => 'mcq'];
        }

        if ($test->question_type == 'mcq-written') {
            $this->question_types = ['mcq' => 'mcq', 'written' => 'written'];
        }

        if ($test->question_type == 'written') {
            $this->question_types = ['written' => 'written'];
        }

        if ($test->question_type == 'verbal') {
            $this->question_types = ['verbal' => 'verbal'];
        }
    }

    public function save()
    {
        $this->validate([
            'question_type' => 'required',
            'name' => 'required',
            // 'option.option_1' => 'required',
            // 'option.option_2' => 'required',
            // 'option.option_3' => 'required',
            // 'option.option_4' => 'required',
            // 'option_type' => 'required',
            // 'question_type' => 'required',
            // 'answer' => 'required',
        ]);

        // $filenames = collect($this->photos)->map->store('photos');
        if ($this->option_type == 'image') {
            $this->option['option_1'] = $this->option_image['option_1']->store('public');
            $this->option['option_2'] = $this->option_image['option_2']->store('public');
            $this->option['option_3'] = $this->option_image['option_3']->store('public');
            $this->option['option_4'] = $this->option_image['option_4']->store('public');
        }

        $this->testQuestion->update([
            'name' => $this->name,
            'option_type' => $this->option_type,
            'question_type' => $this->question_type,
            'answer' => $this->answer,
            'option' => $this->option,
            'test_id' => $this->test->id,
        ]);

        return redirect(route('admin.test.test-question.index', $this->test->id));
    }


    public function render()
    {
        return view('livewire.admin.test-question.edit-component');
    }
}
