<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(config('pagination.count'));
        return view('admin.companies.index',get_defined_vars()); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.companies.create',get_defined_vars()); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $data = $request->validated();

        $image = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('companies', $newImageName, 'public');
        $data['image'] = $newImageName;

        Company::create($data);
        return to_route('admin.companies.index')->with('success', __('keywords.create_success'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $data = $request->validated();

        Storage::delete("public/companies/$company->image");
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('companies', $newImageName, 'public');
            $data['image'] = $newImageName;
            
        $company->update($data);
        return to_route('admin.companies.index')->with('success', __('keywords.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        Storage::delete("public/companies/$company->image");
        $company->delete();
        return to_route('admin.companies.index')->with('success', __('keywords.delete_success'));
    }
}
