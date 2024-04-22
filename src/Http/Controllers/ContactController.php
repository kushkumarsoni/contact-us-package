<?php

namespace Kushkumarsoni\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Kushkumarsoni\Contact\Models\Contact;
use Kushkumarsoni\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request):RedirectResponse
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'nullable|numeric|digits_between:10,12',
            'subject' =>'nullable',
            'message' =>'nullable'
        ]);

        if($validator->fails()) {
            return redirect(route('contact'))->withErrors($validator)->withInput();
        }

        Contact::create($request->all());
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        return redirect(route('contact'))->with('success','Your query has been successfully submitted.');
    }
}
