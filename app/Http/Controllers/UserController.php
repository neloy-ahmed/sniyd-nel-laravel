<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        return 'all users';
    }
    
    public function greet() 
    {
        return view('greeting');
    }


    public function profileShow() 
    {
        
        return 'user profile';
    }

    public function test() 
    {
        // $url = route('profile');
        // return $url;
        // return redirect()->route('profile');
        // return to_route('profile');
    }


}

// Build a simple route and controller to display a basic view.

// The Route List

// php artisan route:list

// Route Parameters

// Required Parameters

// Optional Parameters

// Named Routes

// You may also specify route names for controller actions:

// Route Groups
// Route Prefixes

// Git, 

// Why use git

// install git

// github, create a new repo and push to it

//push new commit

// git pull

// multiple user contribute in a repo

// git clone

//What is database migration and its use case

// Generating Migrations

// php artisan make:migration create_flights_table

// Running Migrations

// php artisan migrate