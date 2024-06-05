<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));

    }
    public function create()
    {
        return view('website.contact');

    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:11',
            'email' => 'required|email|unique:users',
            'address' => 'nullable|string',
            'description' => 'required|string',
        ]);

        Contact::create($validatedData);
        return redirect()->route('website.contact')
            ->with('success', 'Contact created successfully.');

    }
    public function show(Contact $contact)
    {
        return view('admin.contact.show', compact('contact'));

    }
    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }
    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:11',
            'email' => 'required|email|unique:contacts,email,' . $contact->id,
            'address' => 'nullable|string',
            'description' => 'required|string',
        ]);

        $contact->update($validatedData);

        return redirect()->route('admin.contact.index')
            ->with('success', 'Contact updated successfully.');
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contact.index')
            ->with('success', 'Contact deleted successfully.');
    }
}
