<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;
use App\Models\Offer;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        
        return view('offers.index', compact('offers'));
    }

    public function create()
    {
        return view('offers.create');
    }

    public function store(OfferRequest $request)
    {
        $offer = Offer::create($request->all());
        
        return redirect()->route('offers.index');
    }

    public function show(Offer $offer)
    {
        return view('offers.show', compact('offer'));
    }

    public function edit(Offer $offer)
    {
        return view('offers.edit', compact('offer'));
    }

    public function update(OfferRequest $request, Offer $offer)
    {
        $offer->update($request->all());
        
        return redirect()->route('offers.index');
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();
        
        return redirect()->route('offers.index');
    }
}
