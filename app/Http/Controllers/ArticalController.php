<?php

namespace App\Http\Controllers;

use App\Models\Artical;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreArticalRequest;
use App\Http\Requests\UpdateArticalRequest;

// same sevice provider with settings
class ArticalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $heroArtical = Artical::findOrFail(1);
        $artical = Artical::findOrFail(1);
        $aboutArtical = Artical::findOrFail(2);
        $featureArtical = Artical::findOrFail(3);
        return view('admin.articals.index',get_defined_vars()); 
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticalRequest $request, Artical $artical)
    {
        $data = $request->validated();
        if($request->hasFile('image')){
            Storage::delete("public/images/$artical->image");
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('members', $newImageName, 'public');
            $data['image'] = $newImageName;
        }
        $artical->update($data);
        return to_route('admin.articals.index')->with('success', __('keywords.update_success'))->with('id', $artical->id);
    }
}
