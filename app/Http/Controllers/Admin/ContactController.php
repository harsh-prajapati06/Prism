<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Redirect;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $contact = Contact::get();
        return view('admin.contact.view',compact('contact'));
    }
}
