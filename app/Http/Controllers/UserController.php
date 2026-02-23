<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::All();
        return view('admin.php', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->validate(['username=>required|string|max:40','password=>required|min:6|string','email=>required|unique:users','role=>string|max:15']));
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('users.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $users)
    {

        return view('users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  User $users)
    {
        $validated = $request->validate(['username=>required|string|max:40','password=>required|min:6|string','email=>required|unique:users','role=>string|max:15']);
        $validated['completed'] = $request->has('completed');

        $users->update($validated);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $users)
    {
        $users->delete();
        return redirect()->route('users.index');
    }
    public function login(){
        
    }
}
