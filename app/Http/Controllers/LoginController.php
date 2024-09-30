<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loadLoginPage()
    {
        return view("login");
    }

    public function dologin(Request $request) 
    {
        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // do the password
            if (auth()->attempt($validateData)) {
                // regenerate session tokens
                    $request->session()->regenerate();
                return redirect("/");
            } else {
                // ->widthErrors is used to customize error message if there's a wrongly provided value in the input field above ^
                    return redirect("/login")->withErrors([
                        'password' => "The password or email provided does not match our records"
                    ]);
            }
    }
}
