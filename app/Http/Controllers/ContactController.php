<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collects = Contact::get();
        return view('dashboard.contact.index', compact('collects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email:dns:unique:contacts',
            'phone' => 'required|numeric',
            'user_id' =>'required|integer'
        ]);

        Contact::create($validateData);
        // $request->session()->flash('success', 'Registration Successfull! Please login');
        return redirect('/dashboard/contact')->with('success', 'Add New Contact Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return $contact;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('dashboard.contact.edit', [
           'contact' => $contact
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $rules = [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|numeric',
            'user_id' =>'required|integer'
        ];

        if($request->id != $contact->id) {

            $rules['email'] = 'required|email:dns:unique:contacts';
        }

        $validatedData = $request->validate($rules);

        Contact::where('id', $contact->id)
                ->update($validatedData);
        // $request->session()->flash('success', 'Registration Successfull! Please login');
        return redirect('/dashboard/contact')->with('success', 'Contact Updated Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $destroy = Contact::findOrFail($id);
        $destroy->delete();
        return redirect('/dashboard/contact')->with('success', 'Contact Deleted Successfull!');
    }
}
