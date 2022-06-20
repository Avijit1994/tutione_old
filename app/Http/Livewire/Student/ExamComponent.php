<?php

namespace App\Http\Livewire\Student;

use App\Models\StudentTestDetail;
use App\Models\TestQuestion;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ExamComponent extends Component
{
    use WithFileUploads, WithPagination;

    public $test_question_id;

    public $student_test_id;

    public $studentTest;

    public $question_type;
    public $option_type;

    public $answer;
    public $file_answer;

    protected $paginationTheme = 'bootstrap';

    public function mount($studentTest)
    {
        $this->studentTest = $studentTest;
        $this->student_test_id = $studentTest->id;
    }

    public function give_answer()
    {
        // $request['user_id'] = auth()->user()->id;

        // $studentTest = StudentTest::updateOrCreate([
        //     'user_id' => auth()->user()->id,
        //     'test_id' => $request->test_id,
        // ], $request->all());

        if ($this->question_type == 'written') {
            $this->answer = $this->file_answer->storePublicly('exam', 's3');
        }

        $studentTest = StudentTestDetail::updateOrCreate([
            'test_question_id' => $this->test_question_id,
            'student_test_id' => $this->student_test_id,
        ], [
            'test_question_id' => $this->test_question_id,
            'student_test_id' => $this->student_test_id,
            'answer' => $this->answer,
            'given_time' => now(),
        ]);
    }

    public function updatedFileAnswer() {

        $this->answer = $this->file_answer->storePublicly('exam', 's3');

        $studentTest = StudentTestDetail::updateOrCreate([
            'test_question_id' => $this->test_question_id,
            'student_test_id' => $this->student_test_id,
        ], [
            'test_question_id' => $this->test_question_id,
            'student_test_id' => $this->student_test_id,
            'answer' => $this->answer,
            'given_time' => now(),
        ]);

    }

    public function save()
    {

    }

    public function finish()
    {
        return redirect()->route('student.student-test.result',$this->student_test_id);
    }

    public function render()
    {
        $data['testQuestions'] = $testQuestion = TestQuestion::with(['userStudentTestDetail' => function ($q) {
            return $q->where('student_test_id', $this->studentTest->id);
        }])->whereTestId($this->studentTest->test_id)->paginate(1);

        $this->test_question_id = $testQuestion->get(0)->id;
        $this->question_type = $testQuestion->get(0)->question_type;
        $this->option_type = $testQuestion->get(0)->option_type;

        $this->answer = optional($testQuestion->get(0)->studentTestDetail)->answer;

        $data['timer'] = Carbon::now()->setTimezone('Asia/Kolkata')->addMinutes($this->studentTest->test->duration);

        return view('livewire.student.exam-component', $data);
    }
}
