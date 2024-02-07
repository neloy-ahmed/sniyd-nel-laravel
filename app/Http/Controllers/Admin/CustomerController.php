<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;



class CustomerController extends Controller
{

    

    public function create()
    {
        // auth_admin()->allows('customer.create');

        // $genders = UserGender::toArray();
        // // $locale = Locale::toArray();
        // $countries = Country::all();

        return view('admin.customers.create');
    }

    
}
