<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(50);
        return view('contacts.index', ['contacts' => $contacts]);
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $contact = new Contact();

        $contact->name = request('name');
        $contact->phone = request('phone');
        $contact->email = request('email');
        $contact->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact.edit', ['contact' => $contact]);
    }

    public function update($id)
    {
        $contact = Contact::find($id);

        $contact->name = request('name');
        $contact->phone = request('phone');
        $contact->email = request('email');
        $contact->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id)->delete();

        return redirect('/');
    }
}
