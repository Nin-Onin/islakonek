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
        $contacts = Contact::all();
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
            'name' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'religion' => 'required',
            'civil_status' => 'required',
            'date_of_birth' => 'required',
            'location' => 'required',
            'phone_number' => 'nullable'
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
            'name' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'religion' => 'required',
            'civil_status' => 'required',
            'date_of_birth' => 'required',
            'location' => 'required',
            'phone_number' => 'nullable'
        ]);

        $contact->update($data);

        return redirect(route('contact.index'))->with('success', 'Product Updated Succesffully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect(route('contact.index'))->with('success', 'Product deleted Succesffully');
    }
}
