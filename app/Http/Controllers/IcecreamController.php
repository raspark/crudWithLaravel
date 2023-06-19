<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Icecream;
use Illuminate\Http\Request;

class IcecreamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $icecreams = Icecream::all(); // select * from icecream;
        return view("icecreams.index", ["icecreams" => $icecreams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("icecreams.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $icecream = new Icecream();
        $icecream->type = $request->input('type');
        $icecream->name = $request->input('name');
        $icecream->description = $request->input('description');
        $icecream->save();

        return redirect()->route("icecreams.index")->with('alert', 'Inserted Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Icecream $icecream)
    {
        return view('icecreams.show', compact('icecream'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Icecream $icecream)
    {
        return view('icecreams.edit', compact('icecream'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Icecream $icecream)
    {
        $icecream -> update($request->all());
        return redirect()->route("icecreams.index")->with('alert', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Icecream $icecream)
    {
        //Icecream::where('id', '=', $icecream->id)->delete();
        //Icecream::table('icecreams')->where('id', $icecream->id)->delete();
        $icecream->delete();
        return redirect()->route("icecreams.index")->with('alert', 'Deleted!');
    }
}
