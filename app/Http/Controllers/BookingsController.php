<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\Bookings;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookingsController extends Controller
{
    //
    public function index(): View
    {
        $bookings = Bookings::all();
        return view('bookings.index')->with ('bookings', $bookings);
    }
    
    //
    public function create(): View
    {
        return view('bookings.create');
    }

    //
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Bookings::create($input);
        return redirect('bookings')->with ('flash_message', 'Bookings Added!');
    }

    //
    public function show(string $id): View
    {
        $bookings = Bookings::find($id);
        return view('bookings.show')->with('bookings', $bookings);
    }

    //
    public function edit(string $id): View
    {
        $bookings = Bookings::find($id);
        return view('bookings.edit')->with('bookings', $bookings);
    }

    //
    public function update(Request $request, string $id): RedirectResponse
    {
        $bookings = Bookings::find($id);
        $input = $request->all();
        $bookings->update($input);
        return redirect('bookings')->with('flash_message', 'Bookings Updated!');  
    }
    
    //
    public function destroy(string $id): RedirectResponse
    {
        Bookings::destroy($id);
        return redirect('bookings')->with('flash_message', 'Bookings Deleted!'); 
    }

}