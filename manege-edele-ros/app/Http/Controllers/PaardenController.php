<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paarden;

class PaardenController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role')->only('create', 'edit', 'destroy');
    }

    public function index()
    {
        $paarden = paarden::all(); // Retrieve all paarden records from the database

        return view('paarden.index', compact('paarden')); // Pass the data to the view
    }

    public function create()
    {
        return view('paarden.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required|string',
            'geboortedatum' => 'required|date|before_or_equal:geboortedatum|before_or_equal:now',
            'geslacht' => 'required|in:Man,Vrouw',
            'tamheid' => 'required|in:tam,gemiddeld,wild',
        ]);

        paarden::create($request->all());
        return redirect()->route('paarden.index');
    }

    public function show(paarden $paard)
    {
        return view('paarden.show', compact('paard'));
    }

    public function edit($paard_id)
    {
        // dd($paard_id);
        $paard = paarden::find($paard_id);
        return view('paarden.edit', compact('paard'));
    }

    public function update(Request $request, $paard_id)
    {
        $paard = paarden::find($paard_id);
        $request->validate([
            'naam' => 'required|string',
            'geboortedatum' => 'required|date',
            'geslacht' => 'required|in:Man,Vrouw',
            'tamheid' => 'in:tam,gemiddeld,wild',
        ]);

        $paard->update($request->all());
        return redirect()->route('paarden.index');
    }

    public function destroy($paard_id)
    {
        $paard = paarden::find($paard_id);
        $paard->delete();
        return redirect()->route('paarden.index');
    }
}
