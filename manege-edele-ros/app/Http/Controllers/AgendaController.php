<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\agenda;
use App\Models\User;
use App\Models\AgendaUser;
use App\Models\Comment;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role')->only('create', 'edit', 'destroy');
    }


    public function index()
    {
        $user = Auth::user();

        if(auth()->user()->role === 'leerling' || auth()->user()->role === 'instructeur') {
            $agendas = $user->agendas()->orderBy('start_datum', 'asc')->get();
        } else {
            $agendas = agenda::orderBy('start_datum', 'asc')->get();
        };

        $users = User::all();
        $users = User::all();
        return view('agenda.index', compact('agendas', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agendas = agenda::all();
        $users = User::all();
        return view('agenda.create', compact('agendas', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, agenda $agenda)
    {


        $request->validate([
            'start_datum' => 'required|after_or_equal:now',
            'eind_datum' => 'required|date|after_or_equal:start_datum|after_or_equal:now',
            'lesdoel' => 'required',
            'soort' => 'required',
            'agendaUsers' => 'required'
        ]);



        $agenda = agenda::create($request->all());


        $agenda->agendaUsers()->attach($request->get('agendaUsers'));
        //dd($request->all());
        return redirect()->route('agenda.index')->with('success', 'De nieuwe opdracht is opgeslagen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = Comment::all();
        $users = User::all();
        $agenda = agenda::findOrFail($id);
        return view('agenda.show', compact('agenda', 'comments', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(agenda $agenda, Request $request)
    {
        $agenda = agenda::all();
        $users = User::all();
        $agendaUser = AgendaUser::all();

        $agendaId = $request->input('agenda_id');

        // Haal de gekoppelde werkprocessen op 

        $agenda = agenda::find($agendaId);

        $agendaUser = AgendaUser::where('agenda_id', $agenda->id)->get();

        return view('agenda.edit', compact('agenda', 'users', 'agendaUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agenda $agenda)
    {
        $request->validate([
            'start_datum' => 'required',
            'eind_datum' => 'required|date|after_or_equal:start_datum',
            'lesdoel' => 'required',
            'soort' => 'required',
            'agendaUsers' => 'required'
        ]);

        $formData = $request->all();

        $agenda->update($formData);

        $agenda->agendaUsers()->sync($request->get('agendaUsers'));

        return redirect()->route('agenda.index')
            ->withSuccess(__('Post update successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(agenda $agenda)
    {
        $agenda->delete();
        $comment =  Comment::where('agenda_id', $agenda->id);
        $comment->delete();

        return redirect()->route('agenda.index')
            ->withSuccess(__('Post delete successfully.'));
    }
}
