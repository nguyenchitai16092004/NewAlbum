<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CONTACT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactAdminController extends Controller
{
    public function Index()
    {
        $LienHe = CONTACT::paginate(5);

        return view('backend.pages.contact.contact-management', compact('LienHe'));
    }

    public function Edit($id) {
        $LienHe = CONTACT::findOrFail($id);

        return redirect()->Route('');
    }
}