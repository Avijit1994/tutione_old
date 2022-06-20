<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|RedirectResponse
     * @throws ValidationException
     */
    public function index(Request $request)
    {
        $this->setPageTitle('blog', 'List of all Query');

        $contacts = Contact::latest()->paginate();

        $this->data['status'] = array(1 => 'Use', 2 => 'Unused');

        return view('admin.contact.index', compact('contacts'), $this->data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Contact $blog
     * @return RedirectResponse
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Delete Success');
    }
}
