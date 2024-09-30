<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function loadHomePage() 
    {
        if( auth()->check() ) {
            // auth() = $_SESSION
            // auth()->user() = $_SESSION['user']
            // auth()->user()->name; = $_SESSION['user']['name'];
            $name = auth()->user()->name;
        } else {
            $name = 'Guest';
        }

       
        
        return view("home", [ 'name' => $name]);
    }
}
