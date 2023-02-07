<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddressRequest;
use App\Models\Address;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        
        return view('addresses.index', compact('addresses'));
    }

    public function create()
    {
        return view('addresses.create');
    }

    public function store(AddressRequest $request)
    {
        $address = Address::create($request->all());
        
        return redirect()->route('addresses.index');
    }

    public function show(Address $address)
    {
        return view('addresses.show', compact('address'));
    }

    public function edit(Address $address)
    {
        return view('addresses.edit', compact('address'));
    }

    public function update(AddressRequest $request, Address $address)
    {
        $address->update($request->all());
        
        return redirect()->route('addresses.index');
    }

    public function destroy(Address $address)
    {
        $address->delete();
        
        return redirect()->route('addresses.index');
    }
}
