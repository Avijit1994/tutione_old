<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
//            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
//            'subject' => 'required',
            'message' => 'required'
        ]);
        //  Store data in database
        Contact::create($request->all());
        //
        return redirect()->back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
