<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{
    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ];

    public function authenticate()
    {
        $this->validate();

        if (Auth::guard('web')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            return redirect(route('student.dashboard'));
        }

        if (Auth::guard('teacher')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            return redirect(route('teacher.dashboard'));
        }

        if(Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            return redirect(route('admin.dashboard'));
        }

        $this->addError('email', trans('auth.failed'));

        // return redirect()->intended(route('home'));
    }

    public function render()
    {
        return view('livewire.auth.login-component');
    }
}
