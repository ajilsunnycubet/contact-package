<?php

namespace Ajilsunnycubet\Contact\Http\Controllers;

use Ajilsunnycubet\Contact\Mail\ContactMailable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ajilsunnycubet\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function save(Request $request)
    {
        $contact = Contact::create($request->all());
        $name = $request->firstname.' '.$request->lastname;
        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->subject,$request->country,$name));
        return redirect()->route('contact');
    }
}
