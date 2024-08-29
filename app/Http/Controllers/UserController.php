<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::simplePaginate(5);
        return view('User.index', compact('users'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
       $user = $request->validate([
        'role_name' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'email|unique:users|required',
        'password' => 'required|min:8',
       ]);
//  dd($request->all());
// dd('aw');
       if($request->hasFile('profile_image')){
        // dd('aw');
        $image = $request->file('profile_image');
        $imagePath = $image->store('images', 'public');
        $user['profile_image'] = $imagePath;
        //  dd('aw');
       }
       
    //    dd($user['profile_image']);

    User::create($user);

    return redirect()->route('users.index')->with('success', 'created user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        // dd('aw');
        $user = User::findorFail($id)->first();
        return view('User.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($id);
        $user = User::findorFail($id)->first();

        if($request->hasFile('profile_image')){
            // dd('aw');
            $image = $request->file('profile_image');
            $imagePath = $image->store('images', 'public');
            $user->profile_image = $imagePath;
            //  dd('aw');
           }
        //    dd( $imagePath );
        $user->update([
            'role_name' => $request->role_name,
            'first_name' => $request->first_name ,
            'last_name' => $request->last_name,
            'email' => $request->email,
        ]);
        // dd($user);

        $user->save();
        
        return redirect()->route('users.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // dd($id);
        $user = User::findorFail($id)->latest()->first();

        $user->delete();

        return redirect()->route('users.index')->with('i');
    }
}
