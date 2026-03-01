<?php
// <!-- 
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Http\facades\Hash;
// use App\Models\Usser;
// use Illuminate\Http\facade\Auth;


// class AuthController extends Controller
// {
//     public function showLogin(){

//     }
//     public function showRegister(){

//     }
//     public function login(Request $request){
//         $credentiels=$request->validate(['name'=>'string|required|min:4',
//             'password'=>'string|required|min:6',
//             'email'=>'string|email|required'
//            ]);
//         if(Auth::attempt){
//             $request->session()->regenerate();
//         }

//     }
//     public function register(Request $request){
//         $request->validate([
//             'name'=>'string|required|min:4',
//             'password'=>'string|required|min:6',
//             'email'=>'string|email|required',
//             'role'=>'string|required']);
//         Usser::create([
//          'name'=>$request->name,
//          'password'=>Hash::make($request->password),
//          'email'=>$request->email,
//          'role'=>$request->role
//         ]);
//         Auth::login()
//          return redirect()->route('Home.index');
//     }
   
// } -->
