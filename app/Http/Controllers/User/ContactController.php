<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\thongtinlienlac;

class ContactController extends Controller
{
    public function showForm()
    {
        $contactInfo = thongtinlienlac::first();
        return view('frontend.pages.contact', compact('contactInfo'));
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'Ten' => 'required|string|max:255',
            'SDT' => 'required|string|max:20',
            'Email' => 'required|email|max:255',
            'TinNhan' => 'nullable|string',
        ]);

        \App\Models\Contact::create([
            'Ten' => $validated['Ten'],
            'SDT' => $validated['SDT'],
            'Email' => $validated['Email'],
            'TinNhan' => $validated['TinNhan'],
        ]);

        return redirect()->route('contact.form')->with('success', 'Contact saved successfully!');
    }
}