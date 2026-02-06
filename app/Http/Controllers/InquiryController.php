<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index()
    {
        $contacts = \App\Models\Contact::paginate(5);

        return view('inquiries.index', compact('contacts'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('inquiries.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->status = $request->input('status');
        $contact->remarks = $request->input('remarks');
        $contact->save();

        return redirect()->route('inquiries.edit', $id)->with('message', '更新しました');
    }
}
