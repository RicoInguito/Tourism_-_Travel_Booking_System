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
        return view('User.index', compact('users'));
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
       $user = $request->validate([
        'role_name' => 'required',
        'name' => 'required',
        'email' => 'email|unique:users|required',
        'password' => 'required|min:8',
       ]);
// 
    //    dd($user);
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
        $user = User::findorFail($id)->latest()->first();
        return view('User.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($id);
        $user = User::findorFail($id)->latest()->first();

        $user->update([
            'name' => $request->name,
            'role_name' => $request->role_name,
            'email' => $request->email,
        ]);

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

        return redirect()->route('users.index');
    }
}
