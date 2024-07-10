<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::simplePaginate(5);
        return view('pages.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'photo' => 'nullable',
            'name' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'religion' => 'required',
            'status' => 'required',
            'location' => 'required',
        ]);

        $newContact = Contact::create($data);

        return redirect(route('contact.index'));
    }


    public function edit(Contact $contact)
    {
        return view('pages.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Contact $contact, Request $request)
    {
        $data = $request->validate([
            'photo' => 'nullable',
            'name' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'religion' => 'required',
            'status' => 'required',
            'location' => 'required',
        ]);

        $contact->update($data);

        return redirect(route('contact.index'))->with('success', 'Contact Updated Succesffully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect(route('contact.index'))->with('success', 'Contact deleted Succesffully');
    }
}
