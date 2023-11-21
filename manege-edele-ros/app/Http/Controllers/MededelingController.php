<?php

namespace App\Http\Controllers;

use App\Models\Mededeling;
use Illuminate\Http\Request;

class MededelingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role')->only('create', 'edit', 'destroy', 'index');
    }

    public function index()
    {
        $mededelingen = Mededeling::all();

        return view('mededeling.index', compact('mededelingen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mededelingen = Mededeling::all();

        return view('mededeling.create', compact('mededelingen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mededeling' => 'required'
        ]);

        $mededeling = Mededeling::create($request->all());

        $mededeling->save();

        return redirect()->route('mededeling.index')->with('success', 'De nieuwe opdracht is opgeslagen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mededeling  $mededeling
     * @return \Illuminate\Http\Response
     */

    public function show(Mededeling $mededeling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mededeling  $mededeling
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $mededelingen = Mededeling::findOrFail($id);

        return view('mededeling.edit', compact('mededelingen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mededeling  $mededeling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mededeling $mededeling)
    {
        $request->validate([
            'mededeling' => 'required'
        ]);

        $formData = $request->all();

        $mededeling->update($formData);

        return redirect()->route('mededeling.index')
            ->withSuccess(__('Post update successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mededeling  $mededeling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mededeling $mededeling)
    {
        $mededeling->delete();

        return redirect()->route('mededeling.index')
            ->withSuccess(__('Post delete successfully.'));
    }
}
