<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    
    public function showLoginForm()
    {
        return view('login');
    }

    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        
        $user = DB::table('logins')
            ->where('email', $email)
            ->where('password', $password)
            ->first();

        if ($user) {
            
            return redirect()->route('nearbyStores');
        } else {
            
            return back()->with('error', 'Invalid Username or Password');
        }
    }

    
    public function nearbyStores()
    {
        return view('nearbyStores');
    }

    public function logout()
{
    // Forget the user session
    session()->forget('user'); // Or whatever session key you're using to track the user

    // Redirect to the login page
    return redirect()->route('login');
}

}