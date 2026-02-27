<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collocation;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Collocation $collocation)
    {
        $categories = $collocation->categories;
        return view('categories.index', compact('categories','collocation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(Collocation $collocation)
    // {
    //     return view('categories.create',compact('collocation'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Collocation $collocation)
    {   
        
        $collocation->categories()->create($request->validate(['name'=>'required|string|max:20']));
        return redirect()->route('collocations.categories.index',$collocation);
    }

    /**
     * Display the specified resource.
     */
    // public function show(Category $category)
    // {
    //     // $category = Category::find($id);
    //     return view('categories.show', compact('category'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        return view('collocation.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Category $category)
    {
        $validated = $request->validate(['name'=>'required|string|max:20']);

        $category->update($validated);
        return redirect()->route('collocations.categories.index',$category->collocation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $collocation=$category->collocation;
        $category->delete();
        return redirect()->route('collocations.categories.index',$collocation);
    }
}
