<?php

namespace App\Http\Controllers;

use App\Models\Addresss;
use Illuminate\Http\Request;

class AddresssController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $store = Addresss::get();
        return view('dashboard.address.index', compact('store'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.address.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateStore = $request->validate([
            'street' => 'required|max:200',
            'city' => 'required|max:100',
            'province' => 'required|max:100',
            'country' => 'required|max:100',
            'postal_code' =>'required|numeric',
            'contact_id' => 'required|integer'
        ]);

        Addresss::create($validateStore);
        return redirect('/dashboard/addresss')->with('success', 'Add New Address Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Addresss $addresss)
    {
        return $addresss;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Addresss $addresss)
    {
        return view('dashboard.address.edit', [
            'addresss' => $addresss
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Addresss $addresss)
    {
        $validateStore = $request->validate([
            'street' => 'required|max:200',
            'city' => 'required|max:100',
            'province' => 'required|max:100',
            'country' => 'required|max:100',
            'postal_code' =>'required|numeric',
            'contact_id' => 'required|integer'
        ]);

        Addresss::where('id', $addresss->id)
                ->update($validateStore);
        return redirect('/dashboard/addresss')->with('success', 'Address Updated Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $destroy = Addresss::findOrFail($id);
        $destroy->delete();
        return redirect('/dashboard/addresss')->with('success', 'Address Deleted Successfull!');
    }
}
