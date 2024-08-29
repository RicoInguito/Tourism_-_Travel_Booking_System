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
        $input = $request->all();
        Destination::create($input);
        return redirect('destinations')->with ('flash_message', 'Tours Added!');
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
        return redirect('destinations')->with('flash_message', 'Tours Updated!');  
    }
    
    //
    public function destroy(string $id): RedirectResponse
    {
        Destination::destroy($id);
        return redirect('destinations')->with('flash_message', 'Tours Deleted!'); 
    }

}
