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

    public function Accept($id) {
        $LienHe = CONTACT::findOrFail($id);
        $LienHe->TrangThai = 1;
        $LienHe->save();

        return redirect()->Route('Index_Contact_Management')->with('success', 'Contact accept successfully!');
    }

    public function Delete($id){
        $LienHe = CONTACT::findOrFail($id);
        $LienHe->delete();

        return redirect()->route('Index_Contact_Management')->with('success', 'Contact deleted successfully!');
    }
}
