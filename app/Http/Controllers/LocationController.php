<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View as ViewView;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $locations = Location::all();
        return view('location.index')->with ('locations', $locations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $tourist = $request->validate([
            'location_name' => 'required',
            'place' => 'required',
            'city' => 'required',
           ]);
    
           if($request->hasFile('profile_image')){
            $image = $request->file('profile_image')->store('images', 'public');
            $tourist['profile_image'] = $image;
           }
            Location::create($tourist);
            return redirect('locations')->with ('flash_message', 'Locations Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location): ViewView
    {
        //
        $locations = Location::find($location);
        return view('location.show')->with('locations', $locations);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location): View
    {
        //
        $locations = Location::find($location);
        return view('location.edit')->with('locations', $locations);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location): RedirectResponse
    {
        //
        $locations = Location::find($location);
        $input = $request->all();
        $locations->updates($input);
        return  redirect('locations')->with('flash_message', 'Locations Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        //
        Location::destroy($location);
        return  redirect('locations')->with('flash_message', 'Locations Deleted!');
    }
}
