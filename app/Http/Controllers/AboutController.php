<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::paginate(config('pagination.count'));
        return view('admin.abouts.index',get_defined_vars()); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.abouts.create',get_defined_vars()); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
        $data = $request->validated();

        About::create($data);
        return to_route('admin.abouts.index')->with('success', __('keywords.create_success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('admin.abouts.show',get_defined_vars()); 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.abouts.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        $data = $request->validated();
        $about->update($data);
        return to_route('admin.abouts.index')->with('success', __('keywords.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        return to_route('admin.abouts.index')->with('success', __('keywords.delete_success'));
    }
}
