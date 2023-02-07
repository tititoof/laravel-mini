<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(CustomerRequest $request)
    {
        $customer = Contact::create($request->all());
        
        return redirect()->route('customers.index');
    }

    public function show(Customer $customer)
    {
        return view('customers.show', compact('contact'));
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('contact'));
    }

    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());
        
        return redirect()->route('customers.index');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        
        return redirect()->route('customers.index');
    }
}
