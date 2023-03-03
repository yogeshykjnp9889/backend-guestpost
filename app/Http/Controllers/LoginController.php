<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function __construct(){
        if(Auth::user()){
            \Redirect::to('admin/dashboard')->send();
        }
    }   

    public function index(){
        return view('admin/login');
    }

   	public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }
        return back()->withErrors(['error' => 'The provided credentials do not match our records.']);
    }

    public function Logout(Request $request){
    	Auth::logout();
	    $request->session()->invalidate();
	    $request->session()->regenerateToken();
	    return redirect()->intended('travel-admin');
    }
}
