<?php

namespace App\Http\Controllers;

use App\Models\Collocation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        Auth::user()->isOwner=true;
        return redirect()->route('collocation.show', Collocation::create($request->validate(['title' => 'string|required', 'desc' => 'max:999'])));
    }


    /**
     * Display the specified resource.
     */
    public function show(Collocation $collocation)
    {
        if (Auth::user()->collocation_id != $collocation->id){
            return redirect()->route('dashboard');
        }
        $collocation->load('depenses.category', 'categories', 'members','payments.indebted','payments.payer');
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
    public function removeMember(User $user){
        $collocation=$user->collocation;
    $user->collocation_id=null;
    $user->save();
    return $collocation;
    }
    public function leaveCollocation(User $user){
        if($user->payments->count()==0){
            $user->reputation++;
        }else{
            $user->reputation--;
        }
        $this->removeMember($user);
        // $user->collocation->removeMember($user);
        return redirect()->route('dashboard');
    }
    public function kickMember(User $user){
        // dd('test');
        if(Auth::user()->isOwner==true){
            // dd(1);
            $user->payments()->update(['indebted_id'=>Auth::id()]);
            Auth::user()->payments()->whereColumn('indebted_id', 'payer_id')->delete();
            $collocation=$this->removeMember($user);
            return redirect()->route('collocation.show',$collocation);
        }
        return redirect()->route('collocation.show',$user->collocation);
    }
}
