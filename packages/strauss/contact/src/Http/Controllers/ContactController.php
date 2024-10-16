<?php

namespace Strauss\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Strauss\Contact\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact::contact');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
        ]);

        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Contact form submitted successfully!');
    }
}
