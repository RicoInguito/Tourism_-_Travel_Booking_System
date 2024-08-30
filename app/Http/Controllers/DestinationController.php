<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DestinationController extends Controller
{
    //
    public function index(): View
    {
        $destinations = Destination::all();     
        return view('destination.index')->with ('destinations', $destinations);
    }
    
    //
    public function create(): View
    {
        return view('destination.create');
    }

    //
    public function store(Request $request): RedirectResponse
    {
        // Validate the required fields, including 'location'
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string', // Add validation for location
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        // Handle image upload if present
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imagePath = $image->store('images', 'public');
            $validatedData['profile_image'] = $imagePath;
        }
    
        // Create the destination with the validated data
        Destination::create($validatedData);
    
        return redirect()->route('destinations.index')->with('success', 'Destination created successfully');
    }

    //
    public function show(string $id): View
    {
        $destinations = Destination::find($id);
        return view('destination.show')->with('destinations', $destinations);
    }

    //
    public function edit(string $id): View
    {
        $destinations = Destination::find($id);
        return view('destination.edit')->with('destinations', $destinations);
    }

    //
    public function update(Request $request, string $id): RedirectResponse
    {
        // dd($request->all());
        $destinations = Destination::find($id);
        // dd($destinations);
        $input = $request->all();
        $destinations->update($input);

        if($request->hasFile('profile_image')){
            // dd('aw');
            $image = $request->file('profile_image');
            $imagePath = $image->store('images', 'public');
            $destinations->profile_image = $imagePath;
            //  dd('aw');
           }
        //    dd( $imagePath );
        $destinations->update([
            'name' => $request->name,
            'description' => $request->description ,
            'location' => $request->location,
            'price' => $request->price,
        ]);
        // dd($destinations);

        $destinations->save();
        
        return redirect()->route('destinations.index');  
    }
    
    //
    public function destroy(string $id): RedirectResponse
    {
        Destination::destroy($id);
        return redirect('destinations')->with('flash_message', 'Tours Deleted!'); 
    }

}
