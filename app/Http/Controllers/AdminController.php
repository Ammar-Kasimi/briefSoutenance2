<?php

namespace App\Http\Controllers;

use App\Models\Collocation;
use App\Models\Depense;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::paginate(2);
        $collocation_count=Collocation::has('members','>',2)->count();
        $deps_sum=Depense::sum('total');
        return view('admin.dashboard',compact('users','collocation_count','deps_sum'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function toggleUser(User $user){
        if($user->isActive==true)
        {
            $user->isActive=false;
        }else
        {$user->isActive=true;
        }
        $user->save();
        return redirect()->route('admin.dashboard');
    }
}
