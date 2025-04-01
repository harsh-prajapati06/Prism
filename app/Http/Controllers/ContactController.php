<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Redirect;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        if($request->isMethod('Post')){
            $contact = new Contact;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->mobile = $request->mobile;
            $contact->subject = $request->subject;
            $contact->date = date('Y-m-d');
            $contact->message = $request->message;
            $contact->save();
            
            return redirect::to('contact')->with('messsage','Query Submit Successfully');
        }
        return view('contact');
    }
}
