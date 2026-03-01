<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depense;
use App\Models\payment;
use App\Models\Collocation;

class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(Collocation $collocation)
    // {
    //     $depenses = $collocation->depenses;
    //     return view('collocations.index', compact('depenses','collocation'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(Collocation $collocation)
    // {
    //     return view('depenses.create',compact('collocation'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Collocation $collocation)
    {   
        // dd($request->all());
        $validated=$request->validate(['title'=>'required|string|min:4','total'=>'gt:0|required','category_id'=>'required|int']);
        $validated['user_id']=1;
        $dep=$collocation->depenses()->create($validated);
       
        $arr = $collocation->members->where('id', '!=', $validated['user_id']);
       foreach($arr as $member){
            Payment::create(['payer_id'=>$validated['user_id'],'indebted_id'=>$member->id,'depense_id'=>$dep->id,'amount'=>($dep->total/count($arr))+1]);
        }
        // $request->validate(['payer_id'=>'required|int','indebted_id'=>'required|int','depense_id'=>'required|int','amount'=>'status'])
        // $validated2=
        return redirect()->route('collocation.show',$collocation);
    }

    /**
     * Display the specified resource.
     */
    // public function show(Depense $depense)
    // {
    //     // $depense = Depense::find($id);
    //     return view('depenses.show', compact('depense'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Depense $depense)
    // {
    //     return view('collocation.depenses.edit', compact('depense'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request,  Depense $depense)
    // {
    //     $validated = $request->validate(['name'=>'required|string|max:20']);

    //     $depense->update($validated);
    //     return redirect()->route('collocations.depenses.index',$depense->collocation);
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Depense $depense)
    // {
    //     $collocation=$depense->collocation;
    //     $depense->delete();
    //     return redirect()->route('collocations.depenses.index',$collocation);
    // }
}
