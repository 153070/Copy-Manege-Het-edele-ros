<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\agenda;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comment = Comment::all();

        return view('agenda.show', compact('agenda'));
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
            'comment' => 'required',
        ]);

        // dd($request->all());

        $comment = Comment::create([
            'comment' => $request->Input(['comment']),
            'agenda_id' => request('agenda_id'),
            'user_id' => auth()->user()->id,
        ]);



        // $comment = Comment::create($request->all());

        $comment->save();

        //dd($request->all());
        return redirect()->route('agenda.show', ['agenda' => request('agenda_id')])->with('success', 'De nieuwe opdracht is opgeslagen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
