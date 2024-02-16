<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::orderBy('id', 'desc')->paginate(5);
        return view('companies.index', compact('companies'));
    }


    public function create()
    {
        return view('companies.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'address' => 'required|max:255',
        ]);


        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return redirect()->route('companies.index')->with('success', 'Company has been created successfully.');
    }


    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }


    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }


    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'address' => 'required|max:255',
        ]);

        // $company->fill($request->post())->save();

        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->address = $request->input('address');

        $company->save();

        return redirect()->route('companies.index')->with('success', 'Company has been updated successfully');
    }


    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company has been deleted successfully');
    }
}
