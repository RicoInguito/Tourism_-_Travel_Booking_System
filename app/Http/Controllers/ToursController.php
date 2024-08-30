<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\View\View;

class ToursController extends Controller
{
    //
    public function index(): View
    {
        $tours = Tours::all();
        return view('tours.index')->with ('tours', $tours);
    }
    
    //
    public function create(): View
    {
        return view('tours.create');
    }

    //
    public function store(Request $request): RedirectResponse
    {
    //    dd($request->all());
       $tourist = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'destination_id' => 'required',
       ]);

       if($request->hasFile('profile_image')){
        $image = $request->file('profile_image')->store('images', 'public');
        $tourist['profile_image'] = $image;
       }
        Tours::create($tourist);
        return redirect('tours')->with ('flash_message', 'Tours Added!');
    }

    //
    public function show(string $id): View
    {
        $tours = Tours::find($id);
        return view('tours.show')->with('tours', $tours);
    }

    //
    public function edit(string $id): View
    {
        $tours = Tours::find($id);
        return view('tours.edit')->with('tours', $tours);
    }

    //
    public function update(Request $request, string $id): RedirectResponse
    {
        $tours = Tours::find($id);
        $input = $request->all();
        $tours->update($input);
        return redirect('tours')->with('flash_message', 'Tours Updated!');  
    }
    
    //
    public function destroy(string $id): RedirectResponse
    {
        Tours::destroy($id);
        return redirect('tours')->with('flash_message', 'Tours Deleted!'); 
    }

}
