<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Collocation;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Collocation $collocation)
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Collocation $collocation)
    {
        return view('categories.create',compact('collocation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Collocation $collocation)
    {   

        Category::create($request->validate(['name'=>'required|string|max:20']));
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // $category = Category::find($id);
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Category $category)
    {
        $validated = $request->validate(['name=>required|string|max:20']);

        $category->update($validated);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
