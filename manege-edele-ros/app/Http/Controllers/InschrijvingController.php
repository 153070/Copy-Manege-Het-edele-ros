<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import the Hash facade
use App\Models\inschrijvingen;
use App\Models\User;

class InschrijvingController extends Controller
{
    public function index()
    {
        $inschrijvingen = inschrijvingen::all(); // Verzameld alle inschrijving tables van de database
        $disablebutton = false;
        return view('inschrijvingen.index', compact('inschrijvingen')); // verzend de data weer terug naar de view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(inschrijvingen $inschrijvingen)
    {
        $inschrijvingen = inschrijvingen::all();
        return view('inschrijvingen.create', compact('inschrijvingen'));
    }

    public function update(Request $request, $inschrijving)
    {
        
        $this->promoteToUser($request, $inschrijving); // Een inschrijving wordt gepromote naar een nieuwe user

        return redirect()->route('inschrijvingen.index');
    }

    public function promoteToUser(Request $request, $inschrijving_id) // Alle benodigde data van inschrijvingen en de user wordt hier opgeroepen
    {
        //Haald de data op van inschrijfformulier en user
        $newUser = new User; 
        $inschrijving = inschrijvingen::find($inschrijving_id);
        $newUser->name= $inschrijving->naam;
        $newUser->adres= $inschrijving->adres;
        $newUser->woonplaats= $inschrijving->woonplaats;
        $newUser->email= $inschrijving->email;
        $newUser->role= 'leerling';
        $newUser->password = Hash::make($request->input('password'));

        $disablebutton = true;

        $newUser->save();
        return redirect()->route('inschrijvingen.index', compact('disablebutton'))->with('success', 'Leerling is aangemaakt.');
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
            'naam' => 'required|string',
            'leeftijd' => 'required|date|before_or_equal:leeftijd|before_or_equal:now',
            'geslacht' => 'required|in:Man,Vrouw',
            'adres' => 'required|string',
            'woonplaats' => 'required|string',
            'email' => 'required|email',
            'telefoonnummer' => 'required|numeric',
            'lespakket' => 'required|in:Pakket 1,Pakket 2,Pakket 3',
            'opmerking' => 'nullable|string',
        ]);

        $inschrijving = inschrijvingen::create($request->all());

        if (auth()->check()) { // verwijst de gebruiker naar de view op basis van of hij of zij is ingelogt
            return redirect()->route('inschrijvingen.index')->with('success', 'inschrijving is verzonden.');
        } else {
            return redirect()->route('inschrijfformulier')->with('success', 'Uw inschrijving is verzonden.');
        }
        
    }

    public function edit($inschrijving_id)
    {

        $inschrijving = inschrijvingen::find($inschrijving_id);
        return view('inschrijvingen.edit', compact('inschrijving'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inschrijvingen  $inschrijving
     * @return \Illuminate\Http\Response
     */

     public function show(inschrijvingen $inschrijving)
     {
        //
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inschrijvingen  $inschrijving
     * @return \Illuminate\Http\Response
     */
    public function destroy(inschrijvingen $inschrijvingen)
    {
        $inschrijvingen->delete();

        return redirect()->route('inschrijvingen.index')
            ->withSuccess(__('Inschrijving is verwijderd.'));
    }

}
