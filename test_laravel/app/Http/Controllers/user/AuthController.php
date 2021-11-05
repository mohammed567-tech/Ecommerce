<?php

namespace App\Http\Controllers\user;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login()
    {
        return view('auth\login');
    }
    function register()
    {
        return view('auth\register');
    }
    function create (Request $request)
{
    $request->validate([
        'email'=>'required|email|unique:users',
        'password'=>'required|min:5|max:12',
        'phone'=>'required|max:11',
    ]);
    $user= new User;
    $user->email=$request->email;
    $user->password=Hash::make($request->password);
    $user->phone=$request->phone;
    $query= $user->save();

    if ($query)
    {
        return back()->with('success' ,' you have been  registered');
    }
    else
    {
        return back()->with('fail' ,' went wrong with you' );
    }
}


function check (Request $request )
{
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12',

    ]);
    if (Auth::attempt(['email'=>$request->email ,'password' =>$request->password]));
    return redirect("/products");


}
}
