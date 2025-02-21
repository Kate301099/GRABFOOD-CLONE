<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Auth::user();
        $countries = Country::query()->paginate(3);
        return view('admin.country.index-country',compact('countries','data'));
    }

    public function create()
    {
        $data = Auth::user();
        return view('admin.country.add-country',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        $country = new Country();
        $country->fill($request->validated());
        $country->save();
        return redirect()->route('country.index')->with('success',__('country created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show( Country $country)
    {
        $data = Auth::user();
        return view('admin.country.edit-country ',compact('country','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $country->fill($request->validated());
        $country->save();
        return redirect()->route('country.index')->with('success',__('country updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('country.index')->with('success',__('country deleted successfully'));
    }
}
