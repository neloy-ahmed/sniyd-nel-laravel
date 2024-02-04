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

// Discuss about form
// GET / POST method
// Receiving Form inputs

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

// Configure database connection in Laravel

//What is database migration and its use case

// Generating Migrations

// php artisan make:migration create_flights_table

// Running Migrations

// php artisan migrate

// Rolling Back Migrations

/**
 * To roll back the latest migration operation, you may use the rollback Artisan command. 
 * This command rolls back the last "batch" of migrations, which may include multiple migration files:
*/

// php artisan migrate:rollback

// Roll Back and Migrate Using a Single Command

/**
 * The migrate:refresh command will roll back all of your migrations and then execute the migrate command. 
 * This command effectively re-creates your entire database:
*/

// php artisan migrate:refresh

// Drop All Tables and Migrate

/**
 * The migrate:fresh command will drop all tables from the database and then execute the migrate command:
*/

// php artisan migrate:fresh