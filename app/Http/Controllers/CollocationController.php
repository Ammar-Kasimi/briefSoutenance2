<?php

namespace App\Http\Controllers;

use App\Models\Collocation;
use Illuminate\Http\Request;

class CollocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return redirect()->route('collocation.show', Collocation::create($request->validate(['title' => 'string|required', 'desc' => 'max:999'])));
    }


    /**
     * Display the specified resource.
     */
    public function show(Collocation $collocation)
    {
        $collocation->load('depenses.category', 'categories', 'members');
        return view('collocations.show', compact('collocation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collocation $collocation) {
        return view('collocation.edit',compact('collocation'));
    }

 
    public function update(Request $request, Collocation $collocation)
    {
        $collocation->update($request->validate(['title' => 'string|required', 'desc' => 'max:999']));
        return redirect()->route('colocation.show', $collocation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collocation $collocation)
    {
        $collocation->delete();
        $collocation->depenses()->delete();
        $collocation->categories()->delete();
        $collocation->members()->detach();
        return view('dashboard');
    }
}
