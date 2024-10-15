<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(10);

        // insted of using compact if we have many variables to sent
        return view('admin.services.index',get_defined_vars()); 
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create',get_defined_vars()); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();

        Service::create($data);
        return to_route('admin.services.index')->with('success', __('keywords.create_success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show',get_defined_vars()); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $service->update($data);
        return to_route('admin.services.index')->with('success', __('keywords.update_success'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return to_route('admin.services.index')->with('success', __('keywords.delete_success'));

    }
}
