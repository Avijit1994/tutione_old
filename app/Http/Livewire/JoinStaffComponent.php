<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class JoinStaffComponent extends Component
{
    use WithFileUploads;

    /** @var string */
    public $firstName = '';

    /** @var string */
    public $lastName = '';

    /** @var string */
    public $phone = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $whatsAppNo = '';

    /** @var string */
    public $country = '';

    /** @var string */
    public $department = '';

    /** @var string */
    public $uploadCV = '';

    public function register()
    {
        $this->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'phone' => ['required', Rule::phone()->country([$this->country])->type('mobile')],
            'email' => ['required', 'email', 'unique:users'],
            'whatsAppNo' => ['required'],
            'country' => ['required'],
            'department' => ['required'],
            'uploadCV' => ['required'],
        ]);

        $cv = $this->uploadCV->store('photos');

        $user = User::create([
            'type' => 'staf',
            'email' => $this->email,
            'name' => $this->firstName . ' ' . $this->lastName,
            'password' => Hash::make('1234567890'),
        ]);

        $user->userDetail()->create([
            'phone' => $this->phone,
            'whatsapp' => $this->whatsAppNo,
            'country' => $this->country,
            'department' => $this->department,
            'cv' => $cv,
        ]);

        return redirect()->intended(route('join-us.success'));
    }

    public function render()
    {
        return view('livewire.join-staff-component');
    }
}
