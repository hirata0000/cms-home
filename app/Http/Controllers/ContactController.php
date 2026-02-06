<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index():view
    {
        return view('contact.index');
    }

    public function confirm(Request $request):View|RedirectResponse
    {
        $validated = $request->validate([
            'company' => 'required|string|max:20',
            'name' => 'required|string|max:20',
            'phone' => 'required|regex:/^[0-9-]+$/',
            'mail' => 'required|email',
            'birthday' => 'required',
            'sex' => 'required',
            'job' => 'required',
            'contact' => 'required|string',
        ]);
        $contact = $request->all();

        return view('contact.confirm', compact('contact'));
    }

    public function send(Request $request):RedirectResponse
    {
        $contact = new Contact;
        $contact->company = $request->company;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->mail = $request->mail;
        $contact->birthday = $request->birthday;
        $contact->sex = $request->sex;
        $contact->job = $request->job;
        $contact->contact = $request->contact;
        $contact->save();

        return view('contact.send', ['contact' => $contact]);
    }
}
